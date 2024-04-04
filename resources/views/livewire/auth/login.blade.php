<div>
  @if (session()->has('message'))
      <div class="pt-3">
        <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
          <i class="ri-check-double-line me-3 align-middle"></i> <strong>Successfull</strong> -  {{ session('message') }}
          </div>
      </div>
    @endif
    @if (session()->has('error'))
    <div class="pt-3">
      <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
        <i class="ri-check-double-line me-3 align-middle"></i> <strong>Successfull</strong> -  {{ session('error') }}
        </div>
    </div>
  @endif
  <form
            wire:submit.prevent="process"
              class="form-horizontal form-material"
              id="loginform"
            >
              <h3 class="box-title m-b-20">Login</h3>
              <div class="form-group">
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
              <div class="form-group">
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
                    Login
                  </button>
                </div>
              </div>
              <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                  Already have an account?
                  <a href="{{ route('register') }}" wire:navigate class="text-info m-l-5"
                    ><b>Sign Up</b></a
                  >
                </div>
              </div>
            </form>
</div>
