<x-app-layout-admin title="Lihat Himpunan">

  <!-- Content Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="title-large-dashboard mb-0">Lihat Himpunan {{ $himpunan->nama_himpunan }}</h2>
  
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('admin.himpunans.index') }}">Pengaturan Himpunan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Lihat Himpunan {{ $himpunan->nama_himpunan }}
            </li>
          </ol>
        </nav>
      </div>
    </div>
  
    <div class="card p-3 shadow-sm">
   
        <div class="row">

          <div class="col-lg-6 mb-4">
            <label
              for="nama_himpunan"
              class="form-label content-medium-dashboard"
              >Nama Himpunan *</label
            >
            <input
              type="text"
              class="form-control"
              id="nama_himpunan"
              name="nama_himpunan"
              value="{{ $himpunan->nama_himpunan }}"
              disabled
            />
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="kode_himpunan"
              class="form-label content-medium-dashboard"
              >Kode Himpunan *</label
            >
            <input
              type="text"
              class="form-control"
              id="kode_himpunan"
              name="kode_himpunan"
              value="{{ $himpunan->kode_himpunan }}"
              disabled
            />
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
              class="form-control"
              id="tanggal_aktivasi"
              name="tanggal_aktivasi"
              value="{{ $himpunan->tanggal_aktivasi }}"
              disabled
            />
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="jumlah_anggota"
              class="form-label content-medium-dashboard"
              >Jumlah Anggota *</label
            >
            <input
              type="text"
              class="form-control"
              id="jumlah_anggota"
              name="jumlah_anggota"
              value="{{ $himpunan->jumlah_anggota }}"
              disabled
            />
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
              class="form-control"
              id="provinsi"
              name="provinsi"
              value="Jawa Barat"
              disabled
            />  
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
              disabled
            >
              <option selected>{{ $himpunan->kokab }}</option>
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
              class="form-control"
              id="kecamatan"
              name="kecamatan"
              value="{{ $himpunan->kecamatan }}"
              disabled
            />
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="kelurahan"
              class="form-label content-medium-dashboard"
              >Kelurahan *</label
            >
            <input
              type="text"
              class="form-control"
              id="kelurahan"
              name="kelurahan"
              value="{{ $himpunan->kelurahan }}"
              disabled
            />
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
              class="form-control"
              id="rw"
              name="rw"
              value="{{ $himpunan->rw }}"
              disabled
            />
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="rt"
              class="form-label content-medium-dashboard"
              >RT *</label
            >
            <input
              type="text"
              class="form-control"
              id="rt"
              name="rt"
              value="{{ $himpunan->rt }}"
              disabled
            />
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
              class="form-control"
              id="alamat"
              name="alamat"
              value="{{ $himpunan->alamat }}"
              disabled
            />
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
              class="form-select"
              id="user_fo_id"
              name="user_fo_id"
              value="{{ $himpunan->user_fo_id }}"
              disabled
            >
              <option selected>Pilih Nama FO</option>
              <option value="1">Fikri</option>
              <option value="2">Iqbal Al Fikri Rachman</option>
            </select>
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="mitra"
              class="form-label content-medium-dashboard"
              >Nama Mitra *</label
            >
            <input
              type="text"
              class="form-control"
              id="mitra"
              name="mitra"
              value="{{ $himpunan->mitra }}"
              disabled
            />
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
              class="form-control"
              id="email_mitra"
              name="email_mitra"
              value="{{ $himpunan->email_mitra }}"
              disabled
            />
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="no_hp_mitra"
              class="form-label content-medium-dashboard"
              >No HP Mitra *</label
            >
            <input
              type="text"
              class="form-control"
              id="no_hp_mitra"
              name="no_hp_mitra"
              value="{{ $himpunan->no_hp_mitra }}"
              disabled
            />
          </div>
  
        </div>
  
        <div class="col-lg-3 mx-auto">
          <a href="{{ route('admin.himpunans.edit', $himpunan->id) }}" class="button-primary text-center mx-3 mt-2 d-block">Edit</a>
        </div>

    </div>
    
  </div>
  </div>
  </div>
  <!-- Content End -->
  
  </x-app-layout-admin>