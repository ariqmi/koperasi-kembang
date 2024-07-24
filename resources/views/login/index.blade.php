<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="img/logo.png" type="img/x-icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- Animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Local CSS -->
    <link href="css/dashboard.css" rel="stylesheet" />
  </head>

  <body class="bg-auth">
    <section id="login">
      <div
        class="position-relative min-vh-100 d-flex align-items-center justify-content-center px-lg-5 py-lg-5 px-2 py-2"
      >
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-8">
              <div class="card shadow px-3">
                <div class="card-body">
                  <a
                    href="/"
                    class="text-nowrap text-center d-block pt-3 pb-1 w-100"
                  >
                    <img src="img/logo-nav-black.png" width="200" alt="" />
                  </a>
                  <h3 class="content-large-dashboard text-center mb-4">
                    Selamat Datang di Koperasi
                    <span class="title-highlight">Syariah Kembang</span>
                  </h3>

                  <form id="login_form" action="{{ route('login.verify') }}" method="POST">

                    @csrf
                    
                    <div class="mb-3">
                      <label
                      for="username"
                      class="form-label content-medium-dashboard"
                      >Username *</label
                    >
                    <input
                      type="text"
                      class="form-control @error('username') is-invalid @enderror"
                      id="username"
                      name="username"
                      value="{{ old('username') }}"
                    />

                     <!-- error message-->
                     @error('username')
                     <div class="alert alert-danger mt-2">
                     {{ $message }}
                     </div>
                     @enderror
                    </div>

                    <div class="mb-4">
                      <label
                          for="password"
                          class="form-label content-medium-dashboard"
                          >Password *</label
                        >
                        <input
                          type="password"
                          class="form-control @error('password') is-invalid @enderror"
                          id="password"
                          name="password"
                          value="{{ old('password') }}"
                        />
              
                        <!-- error message-->
                        @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
                    </div>

                    <div
                      class="d-flex align-items-center justify-content-between mb-3"
                    ></div>
                    
                    {{-- <button type="submit" class="button-primary w-100 d-flex mb-4">Login</button> --}}
                    <a onclick="event.preventDefault(); document.getElementById('login_form').submit();" class="button-primary w-100 d-flex mb-4">Login</a>

                    <div
                      class="d-flex align-items-center justify-content-center"
                    >
                      <p class="mb-0 content-medium-dashboard">
                        Belum Punya Akun?
                      </p>
                      <a
                        class="text-link content-medium-dashboard ms-2"
                        href="{{ route('registrasi.create') }}" 
                        >Buat Akun</a
                      >
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      //message with sweetalert
      @if(session('success'))
          Swal.fire({
              icon: "success",
              title: "BERHASIL",
              text: "{{ session('success') }}",
              showConfirmButton: false,
              timer: 2500
          });
      @elseif(session('error'))
          Swal.fire({
              icon: "error",
              title: "GAGAL!",
              text: "{{ session('error') }}",
              showConfirmButton: false,
              timer: 2500
          });
      @endif

  </script>
  </body>
</html>
