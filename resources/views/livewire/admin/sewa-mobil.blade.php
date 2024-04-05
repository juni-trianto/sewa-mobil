<div class="container-fluid">
    <div class="row">
        @foreach ($database as $item => $value )
        <div class="col-6">
            <div class="card" >
                <img class="card-img" src="{{ url('storage/photos/'.$value->gambar_mobil) }}" style="height: 300px; object-fit: cover;" alt="Image Description">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-1 col-1"><i class="bi bi-cart fa-fw text-info me-2"></i></div>
                        <div class="mb-3 col-md-5 col-5">
                            <h6 class="mb-0 fw-normal">Nama Mobil</h6>
                            <h6 class="mb-0 fw-normal"><b>{{ $value->nama_mobil }}</b></h6>
                        </div>
                        <div class="mb-3 col-md-6 col-5">
                            <h6 class="mb-0 fw-normal">Merk</h6>
                            <h6 class="mb-0 fw-normal"><b>{{ $value->merk }}</b></h6>
                        </div>
    
                        <div class="mb-3 col-md-1 col-1"><i class="bi bi-tags fa-fw text-orange me-2"></i></div>
                        <div class="mb-3 col-md-11 col-11">
                            <h6 class="mb-0 fw-normal">Model</h6>
                            <h6 class="mb-0 fw-normal"><small>{{ $value->model }}</small></h6>
                        </div>
    
                        <div class="mb-3 col-md-1 col-1"><i class="bi bi-pen fa-fw text-orange me-2"></i></div>
                        <div class="mb-3 col-md-11 col-11">
                            <h6 class="mb-0 fw-normal">Deskripsi</h6>
                            <h6 class="mb-0 fw-normal"><small>{{ $value->deskripsi_mobil }}</small></h6>
                        </div>

                        <div class="mb-3 col-md-1 col-1"><i class="bi bi-pen fa-fw text-orange me-2"></i></div>
                        <div class="mb-3 col-md-11 col-11">
                            <h6 class="mb-0 fw-normal">Nomor Plat</h6>
                            <h6 class="mb-0 fw-normal"><small>{{ $value->nomor_plat }}</small></h6>
                        </div>
                        <div class="mb-3 col-md-1 col-1"><i class="bi bi-pen fa-fw text-orange me-2"></i></div>
                        <div class="mb-3 col-md-11 col-11">
                            <h6 class="mb-0 fw-normal">Harga Sewa</h6>
                            <h6 class="mb-0 fw-normal"><small>{{ $value->harga_sewa }}</small></h6>
                        </div>
                        <div class="mb-3 col-md-1 col-1"><i class="bi bi-pen fa-fw text-orange me-2"></i></div>
                        <div class="mb-3 col-md-11 col-11">
                            <h6 class="mb-0 fw-normal">Cek</h6>
                            <h6 class="mb-0 fw-normal"><small>{{ $value->harga_sewa }}</small></h6>
                        </div>
    
    
                       
                    </div>
    
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>