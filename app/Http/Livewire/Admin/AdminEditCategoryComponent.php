<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;
    public $name;
    public $sort;
    public $status;
    public $icone;

    public function mount($category_slug){
        $this->category_slug = $category_slug;
        $category = Category::where("slug", $this->category_slug)->first();
        $this->name = $category->name;
        $this->sort = $category->sort;
        $this->status =$category->status;
        $this->icone = $category->picture;
        $this->category_id =  $category->id;

        
    }

     public function updateCategory(){
        $validatedData = $this->validate([

            'name' => 'required',
            'sort' => 'required|numeric|min:1|not_in:0'

        ]);

        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->sort = $this->sort;
        $category->status = $this->status;

        $category->save();

        session()->flash('success_message', 'Categorie modifié avec succés!');

     }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-category-component', ['categories_product'=>$categories])->layout('layouts.admin');
    }
}
