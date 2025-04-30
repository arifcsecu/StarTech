<?php
namespace App\Livewire;
use App\Models\Product;
use Livewire\WithPagination;
use Livewire\Component;

class ProductSearch extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch() { $this->resetPage(); }

    public function render()
    {
        $products = Product::where('name','like','%'.$this->search.'%')
                           ->latest()
                           ->paginate(5);    // ← paginate, not get()
        return view('livewire.product-search', compact('products'));
    }
}
