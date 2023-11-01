<?php

namespace App\Http\Livewire\Admin;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $weight;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $status;
    public $featured;
    public $quantity;
    public $category_id;
    public $image;
    public $images;

    public function mount(){
        $this->stock_status = 'instock';
        $this->featured = 0;
        $this->status = 0;
    }


    public function storeProduct(){

        $validatedData = $this->validate([

            'name' => 'required',
            'description' => 'required',
            'SKU' => 'required',
            'category_id' => 'required|numeric',
            'quantity' => 'required|numeric|min:1|not_in:0',
            'image' => 'image|max:1024'

        ]);

        $product = new Product();

        $product->name = $this->name;
        $product->weight = $this->weight;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->slug = Str::slug($this->name);
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->SKU = $this->SKU;
        $product->status = $this->status;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;

        $image_name = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('products', $image_name);

        $product->image = $image_name;

        if($this->images){
            $imagesname='';

            foreach($this->images as $key=>$image){
                $imgName = Carbon::now()->timestamp. $key. '.' .$image->extension();
                $image->storeAs('products', $imgName);
                $imagesname = $imagesname.','.$imgName ;
            }

            $product->images = $imagesname;
        }

        $product->save();

        session()->flash('success_message', 'Produit crée avec succés!');

    }
    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.admin-add-product-component', ['categories_product'=>$categories])->layout('layouts.admin');
    }
}
