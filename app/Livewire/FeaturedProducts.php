<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class FeaturedProducts extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::where('is_featured', true)
                           ->latest()
                           ->paginate(10);

        return view('livewire.home-special.featured-products', compact('products'));
    }
}
