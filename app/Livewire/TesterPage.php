<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;

#[Title('Home Page - The Crabbys')]
class TesterPage extends Component
{
    public function render()
    {
        $categories = Category::where('is_active', 1)->get();
        // dd($categories);
        return view('livewire.tester-page', [
            'category' => $categories
        ]);
    }
}
