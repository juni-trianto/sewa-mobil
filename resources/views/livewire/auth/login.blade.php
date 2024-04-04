<div>
    <form
            wire:submit.prevent="process"
              class="form-horizontal form-material"
              id="loginform"
              action="index.html"
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
