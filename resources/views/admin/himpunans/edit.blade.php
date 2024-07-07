<x-app-layout-admin title="Edit Himpunan">

  <!-- Content Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="title-large-dashboard mb-0">Edit Himpunan {{ $himpunan->nama_himpunan }}</h2>
  
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('admin.himpunans.index') }}">Pengaturan Himpunan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Edit Himpunan {{ $himpunan->nama_himpunan }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  
    <div class="card p-3 shadow-sm">
  
      <form id="add_himpunan" action="{{ route('admin.himpunans.update', $himpunan->id) }}" method="POST">
        
          @csrf
          @method('PUT')
  
        <div class="row">
  
          <div class="col-lg-6 mb-4">
            <label
              for="nama_himpunan"
              class="form-label content-medium-dashboard"
              >Nama Himpunan *</label
            >
            <input
              type="text"
              class="form-control @error('nama_himpunan') is-invalid @enderror"
              id="nama_himpunan"
              name="nama_himpunan"
              value="{{ old('nama_himpunan', $himpunan->nama_himpunan) }}"
            />
  
            <!-- error message-->
            @error('nama_himpunan')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="kode_himpunan"
              class="form-label content-medium-dashboard"
              >Kode Himpunan *</label
            >
            <input
              type="text"
              class="form-control @error('kode_himpunan') is-invalid @enderror"
              id="kode_himpunan"
              name="kode_himpunan"
              value="{{ old('kode_himpunan', $himpunan->kode_himpunan) }}"
            />
  
            <!-- error message-->
            @error('kode_himpunan')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
        </div>
  
  
        <div class="row">
  
          <div class="col-lg-6 mb-4">
            <label
              for="tanggal_aktivasi"
              class="form-label content-medium-dashboard"
              >Tanggal Aktivasi *</label
            >
            <input
              type="date"
              class="form-control @error('tanggal_aktivasi') is-invalid @enderror"
              id="tanggal_aktivasi"
              name="tanggal_aktivasi"
              value="{{ old('tanggal_aktivasi', $himpunan->tanggal_aktivasi) }}"
            />
  
            <!-- error message-->
            @error('tanggal_aktivasi')
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
              value="{{ old('jumlah_anggota' , $himpunan->jumlah_anggota) }}"
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
              value="{{ $himpunan->kokab }}"
            >
              <option value="Kota Bandung" {{ $himpunan->kokab == 'Kota Bandung' ? 'selected' : '' }}>Kota Bandung</option>
              <option value="Kabupaten Bandung" {{ $himpunan->kokab == 'Kabupaten Bandung' ? 'selected' : '' }}>Kabupaten Bandung</option>
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
              value="{{ old('kecamatan' , $himpunan->kecamatan) }}"
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
              value="{{ old('kelurahan' , $himpunan->kelurahan) }}"
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
              value="{{ old('rw' , $himpunan->rw) }}"
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
              value="{{ old('rt', $himpunan->rt) }}"
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
              value="{{ old('alamat' , $himpunan->alamat) }}"
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
              for="user_fo_id"
              class="form-label content-medium-dashboard"
              >Nama FO ( Field Officer ) *</label
            >
            <select
              type="text"
              class="form-select  @error('user_fo_id') is-invalid @enderror"
              id="user_fo_id"
              name="user_fo_id"
              value="{{ old('user_fo_id' , $himpunan->user_fo_id) }}"
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
  
          <div class="col-lg-6 mb-4">
            <label
              for="mitra"
              class="form-label content-medium-dashboard"
              >Nama Mitra *</label
            >
            <input
              type="text"
              class="form-control @error('mitra') is-invalid @enderror"
              id="mitra"
              name="mitra"
              value="{{ old('mitra' , $himpunan->mitra) }}"
            />
  
            <!-- error message-->
            @error('mitra')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
        </div>
  
        <div class="row">
  
          <div class="col-lg-6 mb-4">
            <label
              for="email_mitra"
              class="form-label content-medium-dashboard"
              >Email Mitra *</label
            >
            <input
              type="text"
              class="form-control @error('email_mitra') is-invalid @enderror"
              id="email_mitra"
              name="email_mitra"
              value="{{ old('email_mitra' , $himpunan->email_mitra) }}"
            />
  
            <!-- error message-->
            @error('email_mitra')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="no_hp_mitra"
              class="form-label content-medium-dashboard"
              >No HP Mitra *</label
            >
            <input
              type="text"
              class="form-control @error('no_hp_mitra') is-invalid @enderror"
              id="no_hp_mitra"
              name="no_hp_mitra"
              value="{{ old('no_hp_mitra', $himpunan->no_hp_mitra) }}"
            />
  
            <!-- error message-->
            @error('no_hp_mitra')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
        </div>
  
        <div class="col-lg-3 mx-auto">
          <a onclick="event.preventDefault(); document.getElementById('add_himpunan').submit();" class="button-primary text-center mx-3 mt-2 d-block">Simpan</a>
        </div>
      </form>
  
    </div>
  </div>
  </div>
  </div>
  <!-- Content End -->
  
  </x-app-layout-admin>