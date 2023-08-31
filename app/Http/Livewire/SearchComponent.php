<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $search;

    public function mount(){
        $this->sorting = 'default';
        $this->pagesize = 4;
        $this->fill(request()->only('search'));
    }
    public function store($product_id, $product_name, $product_price){
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate("App\Models\Product");
        
        session()->flash('success_message', 'Item added in cart');

        return redirect()->route('product.cart');
    }

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {

        if($this->sorting == 'date'){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->orderBy("created_at", "DESC")->paginate($this->pagesize);
        }else if($this->sorting == 'price'){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->orderBy("regular_price", "ASC")->paginate($this->pagesize);
        }else if($this->sorting == 'price-desc'){
            $products = Product::where('name', 'like', '%'.$this->search.'%')->orderBy("regular_price", "DESC")->paginate($this->pagesize);
        }else{
            $products = Product::where('name', 'like', '%'.$this->search.'%')->paginate($this->pagesize);
        }
        
        return view('livewire.search-component', ['products' => $products])->layout('layouts.base');
    }
}
