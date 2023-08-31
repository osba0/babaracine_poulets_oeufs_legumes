<?php

namespace App\Http\Livewire\Admin;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Categorie a été supprimée avec succés!');
    }
    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.admin.admin-category-component', ['admin_categories' => $categories])->layout('layouts.admin');
    }
}
