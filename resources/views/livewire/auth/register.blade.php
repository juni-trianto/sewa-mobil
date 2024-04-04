<div>
    <form
            wire:submit.prevent="simpan"
              class="form-horizontal form-material"
              id="loginform"
              action="index.html"
            >
              <h3 class="box-title m-b-20">Register</h3>
              <div class="form-group">
                <div class="col-xs-12">
                  <input
                    wire:model="name"
                    class="form-control"
                    type="text"
                    
                    placeholder="Name"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <input
                    class="form-control"
                    wire:model="email"
                    type="text"
                    
                    placeholder="Email"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <input
                    wire:model="telp"
                    class="form-control"
                    type="text"
                    
                    placeholder="No Telp"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <input
                    wire:model="address"
                    class="form-control"
                    type="text"
                    
                    placeholder="Alamat"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <input
                    wire:model="sim"
                    class="form-control"
                    type="text"
                    
                    placeholder="No Sim"
                  />
                </div>
              </div>
              <div class="form-group text-center p-b-20">
                <div class="col-xs-12">
                  <button
                    class="
                      btn btn-info btn-lg btn-block btn-rounded
                      text-uppercase
                      waves-effect waves-light
                    "
                    type="submit"
                  >
                    Daftar
                  </button>
                </div>
              </div>
              <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                  Already have an account?
                  <a href="{{ route('login') }}" wire:navigate class="text-info m-l-5"
                    ><b>Sign In</b></a
                  >
                </div>
              </div>
            </form>
</div>
