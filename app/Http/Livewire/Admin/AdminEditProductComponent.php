<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;


class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $weight;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $status;
    public $featured;
    public $quantity;
    public $category_id;
    public $image;
    public $newimage;
    public $product_id;

    public function mount($product_slug){
        $product = Product::where('slug', $product_slug)->first();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->weight = $product->weight;
        $this->sale_price = $product->sale_price;
        $this->SKU = $product->SKU;
        $this->stock_status = $product->stock_status;
        $this->status = $product->status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->category_id = $product->category_id;
        $this->image = $product->image;
    }

    public function updateProduct(){

        $product = Product::where("id", $this->product_id)->first();

        $product->name = $this->name;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->weight = $this->weight;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        
        if($this->newimage){
            $image_name = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('products', $image_name);

            $product->image = $image_name;
        }
        $product->category_id = $this->category_id;
        $product->save();

        session()->flash('success_message', 'Produit a été modifié avec succés!');

    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component', ['categories_product'=>$categories])->layout('layouts.admin');
    }
}
