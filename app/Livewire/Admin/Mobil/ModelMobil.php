<?php

namespace App\Livewire\Admin\Mobil;

use App\Models\ModelMobil as ModelsModelMobil;
use Livewire\Component;
use Livewire\WithPagination;

class ModelMobil extends Component
{

    use WithPagination;
    public $paginationTheme = 'bootstrap';

    public $model;
    public $model_id;
    public $updateData = false;

    public function clear(){
        $this->model= null;
        $this->model_id = null;
     $this->updateData = false;

    }

    public function simpan(){
        $rules = [
            'model' => 'required',
        ];
        $pesan = [
            'model.required' => 'Model Mobil Wajib diisi',
        ];
        $validated = $this->validate($rules, $pesan);
        ModelsModelMobil::create($validated);
        session()->flash('message', 'Model Mobil Berhasil disimpan');
        $this->clear();
    }

    public function delete(){
        if($this->model_id != null){
            $data = ModelsModelMobil::find($this->model_id);
            $data->delete();
            session()->flash('message', 'Model Mobil Berhasil dihapus');

            $this->clear();
        }
    }

    public function delete_confirmation($id){
        if($id != null){
            $this->model_id = $id;
        }
    }

    public function update(){
        $data = ModelsModelMobil::find($this->model_id);
        $data->update(['model' => $this->model ]);
        session()->flash('message', 'Model Mobil Berhasil diupdate');

        $this->clear();
    }

    public function edit($id){
        $data = ModelsModelMobil::find($id);

         $this->model = $data->model;
         $this->model_id = $data->id;
         $this->updateData = true;
        
    }

    public function render()
    {
        $data = ModelsModelMobil::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.mobil.model-mobil',['database' => $data ]);
    }
}
