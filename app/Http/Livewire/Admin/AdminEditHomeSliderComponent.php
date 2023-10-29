<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\HomeSlider;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $link;
    public $price;
    public $image;
    public $status;
    public $slide_id;
    public $newimage;

    public function mount($slide_id){
        $silder = HomeSlider::where('id', $slide_id)->first();
        $this->slide_id = $silder->id;
        $this->title = $silder->title;
        $this->subtitle = $silder->subtitle;
        $this->link = $silder->link;
        $this->price = $silder->price;
        $this->status = $silder->status;
        $this->image = $silder->image;
    }

    public function updateSlide(){

        $slide = HomeSlider::where("id", $this->slide_id)->first();

        $slide->title = $this->title;
        $slide->subtitle = $this->subtitle;
        $slide->link = $this->link;
        $slide->price = $this->price;
        $slide->status = $this->status;      
        
        if($this->newimage){
            $image_name = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('sliders', $image_name);

            $slide->image = $image_name;
        }
        $slide->id = $this->slide_id;
        $slide->save();

        session()->flash('success_message', 'Slide a été modifié avec succés!');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.admin');
    }
}
