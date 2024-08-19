<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;

#[Title('Home Page - The Crabbys')]
class HomePage extends Component
{
    public function render()
    {
        $products = Product::where('is_popular', 1)->get();
        // dd($products);
        return view('livewire.home-page', [
            'products' => $products
        ]);
    }
}
