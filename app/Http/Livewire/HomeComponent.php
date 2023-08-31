<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Models\Product;
use App\Models\HomeSlider;
use Livewire\WithPagination;
use Cart;



class HomeComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount(){
        $this->sorting = 'default';
        $this->pagesize = 20;
    }

    public function store($product_id, $product_name, $product_price){
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate("App\Models\Product");
        
        session()->flash('success_message', 'Item added in cart');

        return redirect()->route('product.cart');
    }

    public function render()
    {
        $sliders = HomeSlider::where('status', true)->get();
        if($this->sorting == 'date'){
            $products = Product::orderBy("created_at", "DESC")->paginate($this->pagesize);
        }else if($this->sorting == 'price'){
            $products = Product::orderBy("regular_price", "ASC")->paginate($this->pagesize);
        }else if($this->sorting == 'price-desc'){
            $products = Product::orderBy("regular_price", "DESC")->paginate($this->pagesize);
        }else{
            $products = Product::paginate($this->pagesize);
        }
        return view('livewire.home-component', ['products' => $products, 'sliders' => $sliders])->layout('layouts.base');
    }
}
