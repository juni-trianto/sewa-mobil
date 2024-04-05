<div class="row">
    @if (session()->has('message'))
    <div class="pt-3">
      <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
        <i class="ri-check-double-line me-3 align-middle"></i> <strong>Successfull</strong> -  {{ session('message') }}
        </div>
    </div>
  @endif
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                @if ($updateData == false)
                <form wire:submit.prevent="simpan">
                @else
                <form wire:submit.prevent="update">
                @endif
                    <div class="form-group">
                        <div class="col-xs-12">
                          <input
                            wire:model="merk"
                            class="form-control"
                            type="text"
                            placeholder="Merk Mobil"
                          />
                          @error('merk') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12">
                          <input
                            wire:model="logo"
                            class="form-control"
                            type="file"
                            placeholder="Model Mobil"
                          />
                          @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                      </div>
                      <div class="form-group mb-3">
                        <div wire:loading wire:target="logo">Loading...</div>
                        @if ($logo)
                        <img src="{{ $logo->temporaryUrl() }}"  style="height: 200px; object-fit: cover;">
                        @endif
                    </div>
                      @if ($updateData == false)
                      <button class="btn btn-success" type="submit">Simpan</button>
                      @else
                      <button class="btn btn-primary" type="submit">Update</button>
                      @endif
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
               <div class="table-reponsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>logo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($database as $item => $value)
                        <tr>
                            <td>{{ $database->firstItem() + $item  }}</td>
                            <td>{{ $value->merk }}</td>
                            <td>
                                <img src="{{ url('storage/photos/'.$value->logo) }}" width="80px" alt="" title="" />

                            </td>
                            <td>
                                <button wire:click="delete_confirmation({{$value->id}})" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus">Del</button>
                                {{-- <button wire:click="edit({{$value->id}})" type="button" class="btn btn-primary btn-sm" >Edit</button> --}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$database->links()}}
               </div>
            </div>
        </div>
    </div>
    {{--  --}}
<!-- Modal -->
<div class="modal fade" wire:ignore.self id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah Anda Yakin akan Menghapus Model  Ini?
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