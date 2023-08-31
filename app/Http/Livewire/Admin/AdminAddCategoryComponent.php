<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $sort;
    public $status;
    public $icone;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function storeCategory(){

        $validatedData = $this->validate([

            'name' => 'required',
            'sort' => 'required|numeric|min:1|not_in:0',
            'icone' => 'image|max:1024'

        ]);

  

        $name = md5($this->icone . microtime()).'.'.$this->icone->extension();

        $this->icone->storeAs('assets/category', $name,'public_upload');

        $category = new Category();

        $category->name = $this->name;
        $category->slug = Str::slug($this->name);
        $category->sort = $this->sort;
        $category->status = $this->status;
        $category->picture = $name;

        $category->save();
        
        // reinit
        $this->name = '';
        $this->sort = '';
        $this->status = 0;
        $this->icone = null;

        session()->flash('success_message', 'Categorie crée avec succés!');

    }
    public function render()
    {
        
        return view('livewire.admin.admin-add-category-component')->layout('layouts.base');
    }
}
