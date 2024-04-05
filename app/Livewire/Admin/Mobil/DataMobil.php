<?php

namespace App\Livewire\Admin\Mobil;

use App\Models\MerkMobil;
use App\Models\Mobil;
use App\Models\ModelMobil;
use Livewire\Component;

use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DataMobil extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $paginationTheme = 'bootstrap';

    public $mobil_id;
    public $merk_id;
    public $modelmobil_id;
    public $nama_mobil;
    public $gambar_mobil;
    public $deskripsi_mobil;
    public $nomor_plat;
    public $harga_sewa;
    public $jenis;
    public $form = false;
    public $paging = 2;


    public $katakunci;

    public  $updateData = false;

    public function tambah(){

        $this->form = true;
    }


    public function clear(){
        $this->mobil_id = null;
        $this->merk_id = null;
        $this->modelmobil_id = null;
        $this->nama_mobil = null;
        $this->gambar_mobil = null;
        $this->deskripsi_mobil = null;
        $this->nomor_plat = null;
        $this->harga_sewa = null;
        $this->jenis = null;
        $this->form = false;
        $this->updateData = false;


    }

    public function simpan(){
        $rules = [
            'merk_id' => 'required',
            'gambar_mobil' => 'required|max:1024|image|nullable|image|mimes:png,png,jpeg,gif',
            'modelmobil_id' => 'required',
            'nama_mobil' => 'required',
            'deskripsi_mobil' => 'required',
            'nomor_plat' => 'required',
            'harga_sewa' => 'required',
            'jenis' => 'required',
        ];
        $pesan = [
            'jenis.required' => 'Jenis Mobil Wajib diisi',
            'harga_sewa.required' => 'harga_sewa Wajib diisi',
            'nomor_plat.required' => 'nomor_plat Wajib diisi',
            'merk_id.required' => 'Merk Wajib diisi',
            'modelmobil_id.required' => 'Model Wajib diisi',
            'nama_mobil.required' => 'Nama Mobil Wajib diisi',
            'deskripsi_mobil.required' => 'Deskripsi Mobil Wajib diisi',
            'gambar_mobil.required' => 'logo Wajib diisi',
            'gambar_mobil.max:1024' => 'Maksimal 1mb',
        ];
        $validated = $this->validate($rules, $pesan);
        
        $name = date('ymdhis').'.'.$this->gambar_mobil->extension();
        $this->gambar_mobil->storeAs('photos', $name );
        Mobil::create([
           'merk_id'         => $this->merk_id,
           'modelmobil_id'   => $this->modelmobil_id,
            'nama_mobil'     => $this->nama_mobil,
           'gambar_mobil'    => $name,
           'deskripsi_mobil' => $this->deskripsi_mobil,
           'nomor_plat'      => $this->nomor_plat,
           'harga_sewa'      => $this->harga_sewa,
           'jenis'           => $this->jenis,
            
        ]);
      
        session()->flash('message', 'data berhasil disimpan');
        $this->clear();
    }

    public function update(){
        $rules = [
            'merk_id' => 'required',
            'modelmobil_id' => 'required',
            'nama_mobil' => 'required',
            'deskripsi_mobil' => 'required',
            'nomor_plat' => 'required',
            'harga_sewa' => 'required',
            'jenis' => 'required',
        ];
        $pesan = [
            'jenis.required' => 'Jenis Mobil Wajib diisi',
            'harga_sewa.required' => 'harga_sewa Wajib diisi',
            'nomor_plat.required' => 'nomor_plat Wajib diisi',
            'merk_id.required' => 'Merk Wajib diisi',
            'modelmobil_id.required' => 'Model Wajib diisi',
            'nama_mobil.required' => 'Nama Mobil Wajib diisi',
            'deskripsi_mobil.required' => 'Deskripsi Mobil Wajib diisi',
        ];
        $validated = $this->validate($rules, $pesan);
        
      
        $data = Mobil::find($this->mobil_id);
        $data->update([
           'merk_id'         => $this->merk_id,
           'modelmobil_id'   => $this->modelmobil_id,
            'nama_mobil'     => $this->nama_mobil,
           'deskripsi_mobil' => $this->deskripsi_mobil,
           'nomor_plat'      => $this->nomor_plat,
           'harga_sewa'      => $this->harga_sewa,
           'jenis'           => $this->jenis,
            
        ]);
      
        session()->flash('message', 'data berhasil diupdate');
        $this->clear();
    }

    public function edit($id){
        if($id != null){
            $data = Mobil::find($id);
            $this->mobil_id = $data->id;
            $this->merk_id = $data->merk_id;
            $this->modelmobil_id = $data->modelmobil_id;
            $this->nama_mobil = $data->nama_mobil;
            $this->gambar_mobil = $data->gambar_mobil;
            $this->deskripsi_mobil = $data->deskripsi_mobil;
            $this->nomor_plat = $data->nomor_plat;
            $this->harga_sewa = $data->harga_sewa;
            $this->jenis = $data->jenis;
            $this->form = true;
            $this->updateData = true;
        }
    }

    public function delete(){
        if($this->mobil_id != null){
            $data = Mobil::find($this->mobil_id);
            $data->delete();
            session()->flash('message', 'data berhasil dihapus');
            $this->clear();
        }
    }

    public function delete_confirmation($id){
        if($id != null){
            $this->mobil_id = $id;
        }
    }

    public function filterpagging(){
        $this->paging = $this->paging;
    }

    public function render()
    {
        $data['merk'] = MerkMobil::orderBy('id', 'desc')->get();
        $data['model'] = ModelMobil::orderBy('id', 'desc')->get();

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

        return view('livewire.admin.mobil.data-mobil', $data);
    }
}
