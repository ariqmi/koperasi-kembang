<x-app-layout-admin title="Edit FO">

  <!-- Content Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="title-large-dashboard mb-0">Edit FO</h2>
  
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('admin.fieldofficers.index') }}">Pengaturan FO</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Edit FO
            </li>
          </ol>
        </nav>
      </div>
    </div>
  
    <div class="card p-3 shadow-sm">
  
      <form id="add_fo" action="{{ route('admin.fieldofficers.update', $userfo->user_id) }}" method="POST" enctype="multipart/form-data">
        
          @csrf
          @method('PUT')
  
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
              value="{{ old('nama', $userfo->nama) }}"
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
              value="{{ old('username', $user->username) }}"
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
              value="{{ old('nik', $userfo->nik) }}"
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
              for="foto_ktp"
              class="form-label content-medium-dashboard"
              >Foto KTP *</label
            >
            <input
            type="file"
            class="form-control @error('nik') is-invalid @enderror""
            id="foto_ktp"
            name="foto_ktp"
            value="{{ old('foto_ktp', $userfo->foto_ktp) }}"
          />

          <a href="{{ asset('storage/'. $userfo->foto_ktp)  }}" target="_blank">Lihat Foto KTP</a>
  
            <!-- error message-->
            @error('foto_ktp')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
        </div>

        <div class="row">
  
          <div class="col-lg-6 mb-4">
            <label
              for="email"
              class="form-label content-medium-dashboard"
              >Email *</label
            >
            <input
              type="text"
              class="form-control @error('email') is-invalid @enderror"
              id="email"
              name="email"
              value="{{ old('email', $userfo->email) }}"
            />
  
            <!-- error message-->
            @error('email')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
  
          <div class="col-lg-6 mb-4">
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
              value="{{ old('no_hp', $userfo->no_hp) }}"
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
              value="{{ old('kokab', $userfo->kokab) }}"
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
              value="{{ old('kecamatan', $userfo->kecamatan) }}"
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
              value="{{ old('kelurahan', $userfo->kelurahan) }}"
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
              value="{{ old('rw', $userfo->rw) }}"
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
              value="{{ old('rt', $userfo->rt) }}"
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
              value="{{ old('alamat', $userfo->alamat) }}"
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
              for="coverage_area"
              class="form-label content-medium-dashboard"
              >Coverage Area*</label
            >
            <input
              type="text"
              class="form-control @error('coverage_area') is-invalid @enderror"
              id="coverage_area"
              name="coverage_area"
              value="{{ old('coverage_area', $userfo->coverage_area) }}"
            />
  
            <!-- error message-->
            @error('coverage_area')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="sertifikasi"
              class="form-label content-medium-dashboard"
              >Sertifikasi *</label
            >
            <input
              type="text"
              class="form-control @error('sertifikasi') is-invalid @enderror"
              id="sertifikasi"
              name="sertifikasi"
              value="{{ old('sertifikasi', $userfo->sertifikasi) }}"
            />
  
            <!-- error message-->
            @error('sertifikasi')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
        </div>

        <div class="row">

          <div class="col-lg-6 mb-4">
            <label
              for="jumlah_himpunan"
              class="form-label content-medium-dashboard"
              >Jumlah Himpunan *</label
            >
            <input
              type="text"
              class="form-control @error('jumlah_himpunan') is-invalid @enderror"
              id="jumlah_himpunan"
              name="jumlah_himpunan"
              {{-- value="{{ $jumlah_himpunan }}" --}}
              disabled
            />
  
            <!-- error message-->
            @error('jumlah_himpunan')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="jumlah_anggota"
              class="form-label content-medium-dashboard"
              >Jumlah Anggota *</label
            >
            <input
              type="text"
              class="form-control @error('jumlah_anggota') is-invalid @enderror"
              id="jumlah_anggota"
              name="jumlah_anggota"
              {{-- value="{{ $jumlah_anggota }}" --}}
              disabled
            />
  
            <!-- error message-->
            @error('jumlah_anggota')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
        </div>

  
        <div class="col-lg-3 mx-auto">
          <a onclick="event.preventDefault(); document.getElementById('add_fo').submit();" class="button-primary text-center mx-3 mt-2 d-block">Simpan</a>
        </div>
      </form>
  
    </div>
  </div>
  </div>
  </div>
  <!-- Content End -->
  
  </x-app-layout-admin>