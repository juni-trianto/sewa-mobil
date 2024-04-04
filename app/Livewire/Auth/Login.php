<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public function process(){
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $pesan = [
            'email.required' => 'Email Wajib diisi',
            'email.email' => 'Format  email tidak sesuai',
            'password.required' => 'Password Wajib diisi',
        ];

        $validated = $this->validate($rules, $pesan);

        if(Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->redirect('/admin/dashboard');
        } else {
            session()->flash('error','Kombinasi email dan password salah!');
        }

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
