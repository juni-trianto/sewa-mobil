<?php

namespace App\Livewire\Admin;

use App\Models\Mobil;
use Livewire\Component;

class SewaMobil extends Component
{
    public $paging = 2;
    public $katakunci;
    
    public function render()
    {
        if($this->katakunci != null){
            $data['database'] = Mobil::orderBy('id' , 'desc')
            ->where('nama_mobil', 'like','%'.$this->katakunci .'%' )
            ->orWhere('merk', 'like', '%'. $this->katakunci .'%')
            ->join('merk_mobils', 'merk_mobils.id', '=', 'mobils.merk_id')
            ->join('model_mobils', 'model_mobils.id', '=', 'mobils.modelmobil_id')
            ->select('mobils.*', 'merk_mobils.merk', 'model_mobils.model')
            ->paginate($this->paging);
        }else{
            $data['database'] = Mobil::orderBy('id' , 'desc')
            ->join('merk_mobils', 'merk_mobils.id', '=', 'mobils.merk_id')
            ->join('model_mobils', 'model_mobils.id', '=', 'mobils.modelmobil_id')
            ->select('mobils.*', 'merk_mobils.merk', 'model_mobils.model')
            ->paginate($this->paging);
        }

        return view('livewire.admin.sewa-mobil', $data);
    }
}
