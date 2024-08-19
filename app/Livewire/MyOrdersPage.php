<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('My Orders - The Crabbys')]
class MyOrdersPage extends Component
{
    use WithPagination;
    public function render()
    {
        $my_orders = Order::where('user_id', auth()->id())->latest()->paginate(2);
        return view('livewire.my-orders-page', [
            'orders' => $my_orders
        ]);
    }
}
