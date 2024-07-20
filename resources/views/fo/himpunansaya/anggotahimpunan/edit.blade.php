<x-app-layout-fo title="Edit Anggota Himpunan">

<!-- Content Start -->
 <div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="title-large-dashboard mb-0">
        Edit {{ $usermember->nama }}
      </h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{ route('fo.anggotahimpunan.index', $usermember->himpunan_id) }}">Daftar Anggota Himpunan</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Edit {{ $usermember->nama }}
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="card p-3 shadow-sm">
    
    <form id="edit_member" action="{{ route('fo.anggotahimpunan.update', $usermember->user_id) }}" method="POST" enctype="multipart/form-data">
        
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
            value="{{ old('nama', $usermember->nama) }}"
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
            {{-- value="{{ old('password', $user->password) }}" --}}
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
            {{-- value="{{ old('password_confirmation', $user->password_confirmation }}" --}}
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
            value="{{ old('nik', $usermember->nik) }}"
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
            value="{{ old('no_kk', $usermember->no_kk) }}"
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
          class="form-control @error('nik') is-invalid @enderror"
          id="foto_ktp"
          name="foto_ktp"
          value="{{ old('foto_ktp', $usermember->foto_ktp) }}"
        />

        <a href="{{ asset('storage/'. $usermember->foto_ktp)  }}" target="_blank">Lihat Foto KTP</a>

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
          class="form-control @error('nik') is-invalid @enderror"
          id="foto_kk"
          name="foto_kk"
          value="{{ old('foto_kk', $usermember->foto_kk) }}"
        />

        <a href="{{ asset('storage/'. $usermember->foto_kk)  }}" target="_blank">Lihat Foto KTP</a>

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
            value="{{ old('no_hp', $usermember->no_hp) }}"
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
            value="{{ old('pekerjaan', $usermember->pekerjaan) }}"
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
            value="{{ old('agama', $usermember->agama) }}"
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
            value="{{ old('tempat_lahir', $usermember->tempat_lahir) }}"
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
            value="{{ old('tanggal_lahir', $usermember->tanggal_lahir) }}"
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
            value="{{ old('kokab', $usermember->kokab) }}"
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
            value="{{ old('kecamatan', $usermember->kecamatan) }}"
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
            value="{{ old('kelurahan', $usermember->kelurahan) }}"
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
            value="{{ old('rw', $usermember->rw) }}"
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
            value="{{ old('rt', $usermember->rt) }}"
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
            value="{{ old('alamat', $usermember->alamat) }}"
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

        <div class="col-lg-12 mb-4">
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
          >
          <option value="">Pilih Nama Himpunan</option>
          @foreach($himpunans as $himpunan)
              <option {{ $himpunan->id == $usermember->himpunan_id ? 'selected' : '' }} value="{{ $himpunan->id }}">{{ $himpunan->nama_himpunan }}</option>
              @endforeach
          </select>

          <!-- error message-->
          @error('himpunan_id')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
         @enderror

        </div>

      </div>

      <div class="col-lg-3 mx-auto">
      <a onclick="event.preventDefault(); document.getElementById('edit_member').submit();" class="button-primary w-100 d-flex mb-4">Simpan</a>
    </div>

      
    </form>
  
   </div>
  </div>

 
  <!-- Content End -->

</x-app-layout-fo>