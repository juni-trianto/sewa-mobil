<?php

namespace App\Livewire\Admin\Mobil;

use App\Models\MerkMobil;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class Merk extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $paginationTheme = 'bootstrap';

    public $merk;
    public $logo;
    public $merk_id;
    public $updateData = false;

    public function delete(){
        if($this->merk_id != null){
           $data = MerkMobil::find($this->merk_id);
           $data->delete();
           session()->flash('message', 'data berhasil dihapus');
        $this->clear();
        }
    }

    public function delete_confirmation($id){
        if($id != null){
            $this->merk_id = $id;
        }
    }

                            
    public function clear(){
        $this->merk = null;
        $this->logo = null;
        $this->merk_id = null;
        $this->updateData = false;
    }

    public function simpan(){
        $rules = [
            'merk' => 'required',
            'logo' => 'required|max:1024|image|nullable|image|mimes:png,png,jpeg,gif',
        ];
        $pesan = [
            'merk.required' => 'situs Wajib diisi',
            'logo.required' => 'logo Wajib diisi',
            'logo.max:1024' => 'Maksimal 1mb',
        ];
        $validated = $this->validate($rules, $pesan);
 
        $name = date('ymdhis').'.'.$this->logo->extension();
        $this->logo->storeAs('photos', $name );
        MerkMobil::create([
            'merk' => $this->merk, 
            'logo' => $name, 
        ]);
      
        session()->flash('message', 'data berhasil disimpan');
        $this->clear();
    }
    public function render()
    {
        $data['database'] = MerkMobil::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.mobil.merk',$data);
    }
}
