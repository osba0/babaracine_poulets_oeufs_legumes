<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class CategoryComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $category_slug;

    public function mount($category_slug){
        $this->sorting = 'default';
        $this->pagesize = 10;
        $this->category_slug = $category_slug;
    }
    public function store($product_id, $product_name, $product_price){
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate("App\Models\Product");
        
        session()->flash('success_message', 'Item added in cart');

        return redirect()->route('product.cart');
    }

    public function addWishlist($product_id, $product_name, $product_price){
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate("App\Models\Product");
        $this->emitTo('wishlist-count-component', 'refreshComponent'); 

    }

    public function removeFromWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
            }
        }
        
        $this->emitTo('wishlist-count-component', 'refreshComponent'); 
    }
    
     
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        //var_dump($this->sorting, random_int(0, 10));
        $category = Category::where('slug', $this->category_slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        if($this->sorting == 'date'){
            $products = Product::where("category_id", $category_id)->orderBy("created_at", "DESC")->paginate($this->pagesize);
        }else if($this->sorting == 'price'){
            $products = Product::where("category_id", $category_id)->orderBy("regular_price", "ASC")->paginate($this->pagesize);
        }else if($this->sorting == 'price-desc'){
            $products = Product::where("category_id", $category_id)->orderBy("regular_price", "DESC")->paginate($this->pagesize);
        }else{
            $products = Product::where("category_id", $category->id)->paginate($this->pagesize);
        }
        
        return view('livewire.category-component', ['products' => $products, 'category_name' => $category_name])->layout('layouts.base');
    }
}
