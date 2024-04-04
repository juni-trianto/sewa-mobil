<div>
    <div class="row page-titles">
        <div class="col-md-3 align-self-center">
            <h3 class="text-themecolor">Manajemen User</h3>
             <input type="searc" wire:model.live="katakunci" class="form-control">
        </div>
        <div class="col-md-7"></div>
        <div class="col-md-2 align-self-center">
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
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody> 
                                @foreach ($database as $item => $value)
                                <tr>
                                    <td>{{ $database->firstItem() + $item  }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->telp }}</td>
                                    <td>
                                        <button wire:click="delete_confirmation({{$value->id}})" type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus">Del</button>
                                        <button wire:click="delete_confirmation({{$value->id}})" type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#reset">Reset Password</button>
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
  <div class="modal fade" wire:ignore.self id="reset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <diav class="modal-content">
        <form wire:submit.prevent="ubahpassword">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Reset Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <div class="col-xs-12">
                      <input
                        wire:model="password"
                        class="form-control"
                        type="password"
                        placeholder="New Password"
                      />
                      @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="clear" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" >Ubah Password</button>
              </div>
        </form>
      </diav>
    </div>
  </div>
    {{--  --}}
</div>
