  <x-Customer.head></x-Customer.head>
  <div class="container-fluid vh-100 d-flex justify-content-center align-items-center LogReg">
      <div
          class="login-card border border-3 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-3 p-4 p-sm-5 shadow-lg rounded rounded-4 bg-light">
          <h1 class="fw-bold text-success text-center py-3 display-4">Login</h1>
          <form action="{{ route('login.store') }}" method="POST">
              @csrf
              <div class="d-flex flex-column my-3">
                  <label for="email" class="fw-bold text-success">Email</label>
                  <div class="d-flex position-relative">
                      <i class="bi bi-envelope-at icon"></i>
                      <input type="email" name="email" class="w-100 rounded rounded-3 border-1 ps-5 py-1">
                  </div>
                  @error('email')
                      <span class="text-danger my-1 text-nowrap">
                          <i class="bi bi-exclamation-triangle me-2"></i>
                          {{ $message }}
                      </span>
                  @enderror

              </div>
              <div class="d-flex flex-column my-3">
                  <label for="password" class="fw-bold text-success">Password</label>
                  <div class="d-flex position-relative">
                      <i class="bi bi-lock icon"></i>
                      <input type="password" name="password" class="w-100 rounded rounded-3 border-1 ps-5 py-1">
                  </div>
                  @error('password')
                      <span class="text-danger my-1 text-nowrap">
                          <i class="bi bi-exclamation-triangle me-2"></i>
                          {{ $message }}
                      </span>
                  @enderror
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember_me" id="flexCheckDefault">
                  <label class="form-check-label text-nowrap" for="flexCheckDefault">
                      Remember me
                  </label>
              </div>
              <button type="submit" class="w-100 btn btn-outline-success fw-bold rounded rounded-3 my-3">Login</button>
          </form>
          <p class="text-center">Belum Punya akun? <a href="{{ route('register') }}">Daftar Sekarang!</a></p>
      </div>
  </div>
  <x-Customer.foot></x-Customer.foot>






  {{-- "
        <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h1 class='modal-title fs-5' id='exampleModalLabel'>{$_SESSION['modal_header']}</h1>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
              </div>
              <div class='modal-body fw-bold text-center my-4'>
                {$_SESSION['modal_message']}
              </div>
            </div>
          </div>
        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function () {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
          });
        </script>
        " --}}
