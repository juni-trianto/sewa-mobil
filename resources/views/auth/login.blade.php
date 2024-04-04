
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('auth.head')
  </head>

  <body class="card-no-border">
    <section id="wrapper">
      <div
        {{-- class="pt-3 pb-3" --}}
        class="login-register"
        style="
          background-image: url(https://demos.wrappixel.com/premium-admin-templates/bootstrap/adminwrap-bootstrap/package/assets/images/background/login-register.jpg);
        ">
        <div class="login-box card">
            <div  class="pt-3">
                <h5 style="text-align: center;">Login Rental Mobil</h5>
            </div>
          <div class="card-body">
            @livewire('auth.login')
          </div>
        </div>
      </div>
    </section>
    @include('auth.footer')
  </body>
</html>
