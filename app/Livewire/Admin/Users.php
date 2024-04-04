<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class Users extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';

    public $paging = 2;
    public $password;
    public $user_id;
    public $katakunci;

    public function ubahpassword(){
        $rules = [
            'password' => 'required',
        ];
        $pesan = [
            'password.required' => 'Password Wajib diisi',
        ];
        $validated = $this->validate($rules, $pesan);
        $data = User::find($this->user_id);
        $data->update(['password' => Hash::make($this->password)]);
        $this->clear();
        session()->flash('message', 'Password berhasil di ubah');

        return redirect()->route('users');

    }

    public function clear(){
     $this->user_id = null;
     $this->password= null;

    }
    public function delete(){
        if($this->user_id != null){
            $data = User::find($this->user_id);
            $data->delete();
            $this->clear();
            session()->flash('message','User Berhasil dihapus!');

        }
    }

    public function filterpagging(){
        $this->paging = $this->paging;
    }

    public function delete_confirmation($id){
        if($id != null){
            $this->user_id = $id;
        }
    }

    public function render()
    {
        if($this->katakunci != null){
            $data['database'] = User::orderBy('id', 'desc')->where('name', 'like','%'.$this->katakunci .'%' )->orWhere('email', 'like', '%'. $this->katakunci .'%')->orWhere('address', 'like', '%'. $this->katakunci .'%')->paginate($this->paging);
        }else{
            $data['database'] = User::orderBy('id', 'desc')->paginate($this->paging);
        }

        return view('livewire.admin.users', $data);
    }
}
