<div>
  <h3 class="box-title m-b-20">Register</h3>

      <form
            wire:submit.prevent="simpan"
              class="form-horizontal form-material row"
              id="loginform"
              action="index.html"
            >
              <div class="form-group col-md-12">
                <div class="col-xs-12">
                  <input
                    wire:model="name"
                    class="form-control"
                    type="text"
                    placeholder="Fullname"
                  />
                  @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-xs-12">
                  <input
                    class="form-control"
                    wire:model="email"
                    type="text"
                    placeholder="Email"
                  />
                  @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-xs-12">
                  <input
                    wire:model="telp"
                    class="form-control"
                    type="text"
                    placeholder="No Telp"
                  />
                  @error('telp') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-xs-12">
                  <input
                    wire:model="address"
                    class="form-control"
                    type="text"
                    placeholder="Alamat"
                  />
                  @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-xs-12">
                  <input
                    wire:model="sim"
                    class="form-control"
                    type="text"
                    
                    placeholder="No Sim"
                  />
                  @error('sim') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-xs-12">
                  <input
                    wire:model="password"
                    class="form-control"
                    type="password"
                    placeholder="Password"
                  />
                  @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-xs-12">
                  <input
                    wire:model="password_confirmation"
                    class="form-control"
                    type="password"
                    placeholder="Confirm Password"
                  />
                  @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              <div class="form-group col-md-12 text-center p-b-20">
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
              <div class="form-group col-md-12 m-b-0">
                <div class="col-sm-12 text-center">
                  Already have an account?
                  <a href="{{ route('login') }}" wire:navigate class="text-info m-l-5"
                    ><b>Sign In</b></a
                  >
                </div>
              </div>
            </form>
</div>
