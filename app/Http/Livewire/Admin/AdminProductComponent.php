<?php

namespace App\Http\Livewire\Admin;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function deleteProduct($id){
        $produit = Product::find($id);
        $produit->delete();
        session()->flash('message', 'Produit a été supprimé avec succés!');
    }
    public function render()
    {
        $products = Product::orderby("created_at", "DESC")->paginate(5);
        return view('livewire.admin.admin-product-component', ['admin_products' => $products])->layout('layouts.admin');
    }
}
