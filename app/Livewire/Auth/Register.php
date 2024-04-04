<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;


class Register extends Component
{
    public $name;
    public $email;
    public $address;
    public $telp;
    public $sim;
    public $password;
    public $password_confirmation;

    public function simpan(){
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'telp' => 'required',
            'sim' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ];
        $pesan = [
            'name.required' => 'Nama Lengkap Wajib diisi',
            'email.required' => 'Email Wajib diisi',
            'email.email' => 'Format  email tidak sesuai',
            'email.unique' => 'Email sudah ada',
            'password.required' => 'Password Wajib diisi',
        ];

        $validated = $this->validate($rules, $pesan);
         //    SIMPAN KE DATABASE
         $data['name']      = $this->name;
         $data['email']     = $this->email;
         $data['address']   = $this->address;
         $data['telp']      = $this->telp;
         $data['sim']       = $this->sim;
         $data['password']  = Hash::make($this->password);
         User::create($data);
         session()->flash('message', 'Register Berhasil silahkan Login');

         $this->redirect('/login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
