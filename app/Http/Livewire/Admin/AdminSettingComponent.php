<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;

use Livewire\Component;

class AdminSettingComponent extends Component
{
    public $email;
    public $phone;
    public $phone2;
    public $map;
    public $adresse;
    public $youtube;
    public $facebook;
    public $instagram;
    public $twitter;

    public function mount(){
        $setting = Setting::find(1);

        if($setting){
            $this->email=$setting->email;
            $this->phone=$setting->phone;
            $this->phone2=$setting->phone2;
            $this->map=$setting->map;
            $this->adresse=$setting->adresse;
            $this->youtube=$setting->youtube;
            $this->facebook = $this->facebook;
            $this->instagram=$setting->instagram;
            $this->twitter=$setting->twitter;
        }
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'email' => 'required|email',
            'phone' => 'required',
            'adresse' => 'required'
        ]);

    }

    public function saveStttings(){
        $this->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'adresse' => 'required'
        ]);

        $setting = Setting::find(1);
        if(!$setting){
            $setting = new Setting();
        }

        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->map = $this->map;
        $setting->adresse = $this->adresse;
        $setting->youtube = $this->youtube;
        $setting->instagram = $this->instagram;
        $setting->facebook = $this->facebook;
        $setting->twitter = $this->twitter;
        $setting->save();

        session()->flash('message', 'Configuration est enregistrée avec succés!');
    }

    

   

    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout("layouts.admin");
    }
}
