<x-app-layout-fo title="Profil FO">

  <!-- Content Start -->
  <div class="container-fluid">
   <div class="row">
     <div class="col-6">
       <h2 class="title-large-dashboard mb-3">Profil Saya</h2>
     </div>
   </div>
 
   <div class="card p-3 shadow-sm">
   
    <div class="row">

      <div class="col-lg-6 mb-4">
        <label
          for="nama"
          class="form-label content-medium-dashboard"
          >Nama Lengkap *</label
        >
        <input
          type="text"
          class="form-control"
          id="nama"
          name="nama"
          value="{{ $userfo->nama }}"
          disabled
        />

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="username"
          class="form-label content-medium-dashboard"
          >Username *</label
        >
        <input
          type="text"
          class="form-control"
          id="username"
          name="username"
           value="{{ $user->username }}"
          disabled
        />

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
          class="form-control"
          id="password"
          name="password"
          value="{{ $userfo->password }}"
          disabled
        />

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="konfirmasi_password"
          class="form-label content-medium-dashboard"
          >Konfirmasi Password *</label
        >
        <input
          type="password"
          class="form-control"
          id="konfirmasi_password"
          name="password_confirmation"
          value="{{ $userfo->password_confirmation }}"
          disabled
        />

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
          class="form-control"
          id="nik"
          name="nik"
          value="{{ $userfo->nik }}"
          disabled
        />

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="foto_ktp"
          class="form-label content-medium-dashboard"
          >Foto KTP *</label
        >
        <a class="form-control" href="{{ asset('storage/' . $userfo->foto_ktp) }}" target="_blank">Lihat Foto KTP</a>

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
          class="form-control"
          id="email"
          name="email"
          value="{{ $userfo->email }}"
          disabled
        />

      </div>


      <div class="col-lg-6 mb-4">
        <label
          for="no_hp"
          class="form-label content-medium-dashboard"
          >No HP *</label
        >
        <input
          type="text"
          class="form-control"
          id="no_hp"
          name="no_hp"
          value="{{ $userfo->no_hp }}"
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
          class="form-select"
          id="kokab"
          name="kokab"
          value="{{ $userfo->kokab }}"
          disabled
        >
          <option value="Kota Bandung">Kota Bandung</option>
          <option value="Kabupaten Bandung">Kabupaten Bandung</option>
        </select>

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
          value="{{ $userfo->kecamatan }}"
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
          value="{{ $userfo->kelurahan}}"
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
          value="{{ $userfo->rw }}"
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
          value="{{ $userfo->rt }}"
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
          value="{{ $userfo->alamat}}"
          disabled
        />

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
          class="form-control"
          id="coverage_area"
          name="coverage_area"
          value="{{ $userfo->coverage_area }}"
          disabled
        />

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="sertifikasi"
          class="form-label content-medium-dashboard"
          >Sertifikasi *</label
        >
        <input
          type="text"
          class="form-control"
          id="sertifikasi"
          name="sertifikasi"
          value="{{ $userfo->sertifikasi }}"
          disabled
        />

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
          class="form-control"
          id="jumlah_himpunan"
          name="jumlah_himpunan"
          {{-- value="{{ $jumlah_himpunan }}" --}}
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
          {{-- value="{{ $jumlah_anggota }}" --}}
          disabled
        />

      </div>

    </div>

      <div class="col-lg-3 mx-auto">
        <a href="{{ route('fo.profil.edit') }}" class="button-primary text-center mx-3 mt-2 d-block">Edit</a>
      </div>

  </div>
  
 </div>
 
  <!-- Content End -->
 
 </x-app-layout-fo>