<?php

namespace App\Http\Livewire\Admin;
use App\Models\HomeSlider;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $link;
    public $price;
    public $image;
    public $status;

    public function mount(){
        $this->status = 0;
    }


    public function storeSlide(){

        $validatedData = $this->validate([

            'title' => 'required',
            'image' => 'image|max:1024'

        ]);

        $slide = new HomeSlider();

        $slide->title = $this->title;
        $slide->subtitle = $this->subtitle;
        $slide->link = $this->link;
        $slide->price = $this->price;
        $slide->status = $this->status;

        $image_name = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('sliders', $image_name);

        $slide->image = $image_name;

        $slide->save();

        session()->flash('success_message', 'Slide crée avec succés!');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
