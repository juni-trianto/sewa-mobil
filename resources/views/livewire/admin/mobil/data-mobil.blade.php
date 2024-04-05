<div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <div class="row pt-3">
                <div class="col-md-8">
                 <input type="searc" wire:model.live="katakunci" class="form-control">
                </div>
                <div class="col-md-4">
                    <select class=" form-select" wire:model="paging" wire:click="filterpagging">
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="col-md-9"></div>
        <div class="col-md-2  align-self-center">
            <a wire:click="tambah" class="btn waves-effect  waves-light btn btn-info pull-right hidden-sm-down text-white">
                Tambah Mobil
            </a>
        </div>
    </div>
    @if ($form == true)
    <div class="card">
        <!-- Tab panes -->
        <div class="card-body">
            @if ($updateData == false)
            <form wire:submit.prevent="simpan" class="form-horizontal form-material mx-2 row">
                @else
                <form wire:submit.prevent="update" class="form-horizontal form-material mx-2 row">
            @endif
             
                <div class="form-group col-md-12">
                    <label class="col-md-12">Nama Mobil</label>
                    <div class="col-md-12">
                        <input type="text" wire:model="nama_mobil" placeholder="Cth. Yaris" class="form-control form-control-line">
                        @error('nama_mobil') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                @if ($updateData == false)
                <div class="form-group col-md-12">
                    <label class="col-md-12">Gambar Mobil</label>
                    <div class="col-md-12">
                        <input type="file" wire:model="gambar_mobil" class="form-control form-control-line">
                        @error('gambar_mobil') <span class="text-danger">{{ $message }}</span> @enderror

                    </div>
                </div>
                <div class="form-group mb-3">
                    <div wire:loading wire:target="gambar_mobil">Loading...</div>
                    @if ($gambar_mobil)
                    <img src="{{ $gambar_mobil->temporaryUrl() }}"  style="height: 200px; object-fit: cover;">
                    @endif
                </div>
                @endif
                <div class="form-group col-md-12">
                    <label class="col-md-12">Deskripsi</label>
                    <div class="col-md-12">
                        <textarea wire:model="deskripsi_mobil" class="form-control form-control-line"></textarea>
                        @error('deskripsi_mobil') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-sm-12">Merk</label>
                    <div class="col-sm-12">
                        <select wire:model="merk_id" class="form-control form-control-line">
                            <option value="">..::::..</option>
                            @foreach ($merk as $item => $valuemerk)
                                <option value="{{ $valuemerk->id }}">{{ $valuemerk->merk }}</option>
                            @endforeach
                        </select>
                        @error('merk_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-sm-12">Model</label>
                    <div class="col-sm-12">
                        <select wire:model="modelmobil_id" class="form-control form-control-line">
                            <option value="">..::::..</option>
                            @foreach ($model as $item => $valuemodel)
                                <option value="{{ $valuemodel->id }}">{{ $valuemodel->model }}</option>
                            @endforeach
                        </select>
                        @error('modelmobil_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-sm-12">Jenis</label>
                    <div class="col-sm-12">
                        <select wire:model="jenis" class="form-control form-control-line">
                            <option value="">..::::..</option>
                            <option value="matic">matic</option>
                            <option value="manual">manual</option>
                        </select>
                        @error('jenis') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="col-md-12">Nomor Plat</label>
                    <div class="col-md-12">
                        <input type="text" wire:model="nomor_plat" placeholder="Cth G 2337 FM" class="form-control form-control-line">
                        @error('nomor_plat') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="col-md-12">Harga Sewa</label>
                    <div class="col-md-12">
                        <input type="text" wire:model="harga_sewa" class="form-control form-control-line">
                        @error('harga_sewa') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="col-sm-12">
                        @if ($updateData == false)
                        <button class="btn btn-success">Simpan</button>
                        @else
                        <button class="btn btn-primary">Update</button>
                        @endif
                        <button wire:click="clear" type="button" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
        
    @endif

    <div class="row">
        <div class="col-12">
            @if (session()->has('message'))
                <div class="pt-3">
                    <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                    <i class="ri-check-double-line me-3 align-middle"></i> <strong>Successfull</strong> -  {{ session('message') }}
                    </div>
                </div>
                @endif
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Mobil</th>
                                    <th>Merk</th>
                                    <th>Model</th>
                                    <th>Plat </th>
                                    <th>Sewa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($database as $item => $value)
                                <tr>
                                    <td>{{ $database->firstItem() + $item  }}</td>
                                    <td>
                                    <img src="{{ url('storage/photos/'.$value->gambar_mobil) }}" width="100x" alt="" title="" />

                                    </td>
                                    <td>{{ $value->nama_mobil }}</td>
                                    <td>{{ $value->merk }}</td>
                                    <td>{{ $value->model }}</td>
                                    <td>{{ $value->nomor_plat }}</td>
                                    <td>{{ $value->harga_sewa }}</td>
                                    <td>
                                        <button wire:click="delete_confirmation({{$value->id}})" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus">Del</button>
                                        <button wire:click="edit({{$value->id}})" type="button" class="btn btn-primary btn-sm" >Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{-- {{$database->links()}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" wire:ignore.self id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah Anda Yakin akan Menghapus User Ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" wire:click="clear" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" wire:click="delete">Hapus</button>
        </div>
      </div>
    </div>
  </div>
    {{--  --}}
</div>
