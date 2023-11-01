<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Livewire\Component;

class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function updated($fields){
        $this->validateOnly($fields, [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ]);
    }
    

    public function changePassword(){
        $this->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed|different:current_password'
        ]);

        if(Hash::check($this->current_password, Auth::user()->password)){
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('password_success', 'Mot de passe modifié avec succés!');
        }else{
            session()->flash('password_error', 'Mot de passe ne correspond pas!');
        }
    }

    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
