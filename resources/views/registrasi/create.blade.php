<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Registrasi</title>
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
    <section id="registrasi">
      <div
        class="position-relative min-vh-100 d-flex align-items-center justify-content-center px-lg-5 py-lg-5 px-2 py-2"
      >
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-8">
              <div class="card shadow px-3">
                <div class="card-body">
                  <a
                    href="./index.html"
                    class="text-nowrap text-center d-block pt-3 pb-1 w-100"
                  >
                    <img src="img/logo-nav-black.png" width="200" alt="" />
                  </a>
                  <h3 class="content-large-dashboard text-center mb-4">
                    Selamat Datang di Koperasi
                    <span class="title-highlight">Kembang Syariah</span>
                  </h3>

                  <form id="add_member" action="{{ route('registrasi.store') }}" method="POST" enctype="multipart/form-data">
        
                    @csrf

                    <div class="row">
                      
                      <div class="col-lg-6 mb-4">
                        <label
                          for="nama"
                          class="form-label content-medium-dashboard"
                          >Nama Lengkap *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('nama') is-invalid @enderror"
                          id="nama"
                          name="nama"
                          value="{{ old('nama') }}"
                        />

                         <!-- error message-->
                         @error('nama')
                         <div class="alert alert-danger mt-2">
                         {{ $message }}
                         </div>
                         @enderror
  
                      </div>

                      <div class="col-lg-6 mb-4">
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

                    </div>

                    <div class="row">
  
                      <div class="col-lg-6 mb-4">
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
              
                      <div class="col-lg-6 mb-4">
                        <label
                          for="konfirmasi_password"
                          class="form-label content-medium-dashboard"
                          >Konfirmasi Password *</label
                        >
                        <input
                          type="password"
                          class="form-control @error('konfirmasi_password') is-invalid @enderror"
                          id="konfirmasi_password"
                          name="password_confirmation"
                          value="{{ old('password_confirmation') }}"
                        />
              
                        <!-- error message-->
                        @error('password')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
              
                    </div>

                    <div class="row">
                      
                      <div class="col-lg-6 mb-4">
                        <label
                          for="nik"
                          class="form-label content-medium-dashboard"
                          >NIK *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('nik') is-invalid @enderror"
                          id="nik"
                          name="nik"
                          value="{{ old('nik') }}"
                        />
              
                        <!-- error message-->
                        @error('nik')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                      <div class="col-lg-6 mb-4">
                        <label
                          for="no_kk"
                          class="form-label content-medium-dashboard"
                          >Nomor Kartu Keluarga *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('no_kk') is-invalid @enderror"
                          id="no_kk"
                          name="no_kk"
                          value="{{ old('no_kk') }}"
                        />
              
                        <!-- error message-->
                        @error('no_kk')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-lg-6 mb-4">
                        <label
                          for="foto_ktp"
                          class="form-label content-medium-dashboard"
                          >Foto KTP *</label
                        >
                        <input
                          type="file"
                          class="form-control @error('foto_ktp') is-invalid @enderror"
                          id="foto_ktp"
                          name="foto_ktp"
                        />
              
                        <!-- error message-->
                        @error('foto_ktp')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>            

                      
                      <div class="col-lg-6 mb-4">
                        <label
                          for="foto_kk"
                          class="form-label content-medium-dashboard"
                          >Foto Kartu Keluarga *</label
                        >
                        <input
                          type="file"
                          class="form-control @error('foto_kk') is-invalid @enderror"
                          id="foto_kk"
                          name="foto_kk"
                        />
              
                        <!-- error message-->
                        @error('foto_kk')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>  

                    </div>

                    <div class="row">
                      <div class="col-lg-12 mb-4">
                        <label
                          for="no_hp"
                          class="form-label content-medium-dashboard"
                          >No HP *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('no_hp') is-invalid @enderror"
                          id="no_hp"
                          name="no_hp"
                          value="{{ old('no_hp') }}"
                        />
              
                        <!-- error message-->
                        @error('no_hp')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-lg-6 mb-4">
                        <label
                          for="pekerjaan"
                          class="form-label content-medium-dashboard"
                          >Pekerjaan *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('pekerjaan') is-invalid @enderror"
                          id="pekerjaan"
                          name="pekerjaan"
                          value="{{ old('nik') }}"
                        />
              
                        <!-- error message-->
                        @error('pekerjaan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                      <div class="col-lg-6 mb-4">
                        <label
                          for="agama"
                          class="form-label content-medium-dashboard"
                          >Agama *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('agama') is-invalid @enderror"
                          id="agama"
                          name="agama"
                          value="{{ old('agama') }}"
                        />
              
                        <!-- error message-->
                        @error('agama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-lg-6 mb-4">
                        <label
                          for="tempat_lahir"
                          class="form-label content-medium-dashboard"
                          >Tempat Lahir *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('tempat_lahir') is-invalid @enderror"
                          id="tempat_lahir"
                          name="tempat_lahir"
                          value="{{ old('tempat_lahir') }}"
                        />
              
                        <!-- error message-->
                        @error('tempat_lahir')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                      <div class="col-lg-6 mb-4">
                        <label
                          for="tanggal_lahir"
                          class="form-label content-medium-dashboard"
                          >Tanggal Lahir *</label
                        >
                        <input
                          type="date"
                          class="form-control @error('tanggal_lahir') is-invalid @enderror"
                          id="tanggal_lahir"
                          name="tanggal_lahir"
                          value="{{ old('tanggal_lahir') }}"
                        />
              
                        <!-- error message-->
                        @error('tanggal_lahir')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-lg-6 mb-4">
                        <label
                          for="provinsi"
                          class="form-label content-medium-dashboard"
                          >Provinsi *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('provinsi') is-invalid @enderror"
                          id="provinsi"
                          name="provinsi"
                          value="Jawa Barat"
                          disabled
                        />
              
                        <!-- error message-->
                        @error('provinsi')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
              
                      <div class="col-lg-6 mb-4">
                        <label
                          for="kokab"
                          class="form-label content-medium-dashboard"
                          >Kota / Kabupaten *</label
                        >
                        <select
                          type="text"
                          class="form-select  @error('kokab') is-invalid @enderror"
                          id="kokab"
                          name="kokab"
                          value="{{ old('kokab') }}"
                        >
                          <option value="Kota Bandung">Kota Bandung</option>
                          <option value="Kabupaten Bandung">Kabupaten Bandung</option>
                        </select>
              
                        <!-- error message-->
                        @error('kokab')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
              
                    </div>
              
                    <div class="row">
              
                      <div class="col-lg-6 mb-4">
                        <label
                          for="kecamatan"
                          class="form-label content-medium-dashboard"
                          >Kecamatan *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('kecamatan') is-invalid @enderror"
                          id="kecamatan"
                          name="kecamatan"
                          value="{{ old('kecamatan') }}"
                        />
              
                        <!-- error message-->
                        @error('kecamatan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
              
                      <div class="col-lg-6 mb-4">
                        <label
                          for="kelurahan"
                          class="form-label content-medium-dashboard"
                          >Kelurahan *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('kelurahan') is-invalid @enderror"
                          id="kelurahan"
                          name="kelurahan"
                          value="{{ old('kelurahan') }}"
                        />
              
                        <!-- error message-->
                        @error('kelurahan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
              
                    </div>
              
                    <div class="row">
              
                      <div class="col-lg-6 mb-4">
                        <label
                          for="rw"
                          class="form-label content-medium-dashboard"
                          >RW *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('rw') is-invalid @enderror"
                          id="rw"
                          name="rw"
                          value="{{ old('rw') }}"
                        />
              
                        <!-- error message-->
                        @error('rw')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
              
                      <div class="col-lg-6 mb-4">
                        <label
                          for="rt"
                          class="form-label content-medium-dashboard"
                          >RT *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('rt') is-invalid @enderror"
                          id="rt"
                          name="rt"
                          value="{{ old('rt') }}"
                        />
              
                        <!-- error message-->
                        @error('rt')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
              
                    </div>
              
                    <div class="row">
                      <div class="col-lg-12 mb-4">
                        <label
                          for="alamat"
                          class="form-label content-medium-dashboard"
                          >Alamat *</label
                        >
                        <input
                          type="text"
                          class="form-control @error('alamat') is-invalid @enderror"
                          id="alamat"
                          name="alamat"
                          value="{{ old('alamat') }}"
                        />
              
                        <!-- error message-->
                        @error('alamat')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-lg-6 mb-4">
                        <label
                          for="himpunan_id"
                          class="form-label content-medium-dashboard"
                          >Nama Himpunan *</label
                        >
                        <select
                          type="text"
                          class="form-select  @error('himpunan_id') is-invalid @enderror"
                          id="himpunan_id"
                          name="himpunan_id"
                          value="{{ old('himpunan_id') }}"
                          disabled
                        >
                          <option selected>Pilih Nama Himpunan</option>
                          <option value="1">Kembang Sari</option>
                          <option value="2">Kembang Mawar</option>
                        </select>
              
                        <!-- error message-->
                        @error('himpunan_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                      <div class="col-lg-6 mb-4">
                        <label
                          for="user_fo_id"
                          class="form-label content-medium-dashboard"
                          >Nama FO ( Field Officer ) *</label
                        >
                        <select
                          type="text"
                          class="form-select  @error('user_fo_id') is-invalid @enderror"
                          id="user_fo_id"
                          name="user_fo_id"
                          value="{{ old('user_fo_id') }}"
                          disabled
                        >
                          <option selected>Pilih Nama FO</option>
                          <option value="1">Fikri</option>
                          <option value="2">Iqbal Al Fikri Rachman</option>
                        </select>
              
                        <!-- error message-->
                        @error('user_fo_id')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                       @enderror
              
                      </div>

                    </div>

                    <div
                      class="d-flex align-items-center justify-content-between mb-3"
                    ></div>

                    <a onclick="event.preventDefault(); document.getElementById('add_member').submit();" class="button-primary w-100 d-flex mb-4">Registrasi</a>

                    <div
                      class="d-flex align-items-center justify-content-center"
                    >
                      <p class="mb-0 content-medium-dashboard">
                        Sudah Memiliki Akun?
                      </p>
                      <a
                        class="text-link content-medium-dashboard ms-2"
                        href="login.html"
                        >Login</a
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
  </body>
</html>
