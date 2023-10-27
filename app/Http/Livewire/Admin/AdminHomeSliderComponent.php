<?php

namespace App\Http\Livewire\Admin;
use App\Models\HomeSlider;

use Livewire\Component;
use Livewire\WithPagination;

class AdminHomeSliderComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
     public function deleteSlide($id){
        $slide = HomeSlider::find($id);
        $slide->delete();
        session()->flash('message', 'Slide a été supprimé avec succés!');
    }
    public function render()
    {
        $sliders = HomeSlider::paginate(10);
        return view('livewire.admin.admin-home-slider-component', ["sliders" => $sliders])->layout('layouts.admin');
    }
}
