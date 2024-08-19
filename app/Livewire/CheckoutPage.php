<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Helpers\CartManagement;
use App\Models\Meja;
use App\Models\Order;
use App\Models\Address;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\StripeClient;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlaced;

#[Title('Checkout - The Crabbys')]
class CheckoutPage extends Component
{
    public $first_name;
    public $last_name;
    public $phone;
    public $table_id;
    public $payment_method;

    public function mount() {
        $cart_items = CartManagement::getCartItemsFromCookie();
        if(count($cart_items) == 0) {
            return redirect('/products');
        }
    }

    public function placeOrder() {
        // dd($this->payment_method);

        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'table_id' => 'required|integer',
            'payment_method' => 'required',
        ]);

        $cart_items = CartManagement::getCartItemsFromCookie();

        $line_items = [];

        foreach($cart_items as $item){
            $line_items[] = [
                'price_data' => [
                    'currency' => 'IDR',
                    'unit_amount' => $item['unit_amount'] * 100,
                    'product_data' => [
                        'name' => $item['name'],
                    ]
                ],
                'quantity' => $item['quantity'],
            ];
        }

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->grand_total = CartManagement::calculateGrandTotal($cart_items);
        $order->payment_method = $this->payment_method;
        $order->payment_status = 'pending';
        $order->status = 'new';
        $order->currency = 'IDR';
        $order->notes = 'Order placed by' . auth()->user()->name;

        $address = new Address();
        $address->first_name = $this->first_name;
        $address->last_name = $this->last_name;
        $address->phone = $this->phone;
        $address->table_id = $this->table_id;

        $redirect_url = '';

        if($this->payment_method == 'stripe') {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $sessionCheckout = Session::create([
                'payment_method_types' => ['card'],
                'customer_email' => auth()->user()->email,
                'line_items' => $line_items,
                'mode' => 'payment',
                'success_url' => route('success').'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('cancel'),
            ]);

            $redirect_url = $sessionCheckout->url;
        } else {
            $redirect_url = route('success');
        }

        $order->save();
        $address->order_id = $order->id;
        $address->save();
        $order->items()->createMany($cart_items);
        CartManagement::clearCartItems();
        Mail::to(request()->user())->send(new OrderPlaced($order));
        return redirect($redirect_url);
    }

    public function render()
    {
        $Meja = Meja::where('is_active', 1)->get();

        $cart_items = CartManagement::getCartItemsFromCookie();
        $grand_total = CartManagement::calculateGrandTotal($cart_items);
        return view('livewire.checkout-page', [
            'cart_items' => $cart_items,
            'grand_total' => $grand_total,
            'table' => $Meja,
        ]);
    }
}
