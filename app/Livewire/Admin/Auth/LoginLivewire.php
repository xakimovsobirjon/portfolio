<?php

namespace App\Livewire\Admin\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Manny\Manny;

class LoginLivewire extends Component
{
    public $email,$password;

    public $rules=[
        'email'=>'required|email',
        'password'=>'required|min:8',
    ];

    public function login(){
        $this->validate();

        $user= User::where('email',$this->email)->first();
        if($user){
            if(Hash::check($this->password,$user->password)){
                Auth::login($user);
                return redirect()->route('admin.home');
            }else{
                $this->addError('password','Parol no\'tog\'ri kiritildi!');
            }
        }else{
            $this->addError('email','Bunday user mavjud emas!');
        }
    }

    public function render()
    {
        return view('livewire.admin.auth.login-livewire');
    }
}
