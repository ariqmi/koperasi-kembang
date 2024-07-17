<x-app-layout-member title="Profil Member">

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
          value="{{ $usermember->nama }}"
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
          {{-- value="{{ $user->password }}" --}}
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
          value="{{ $user->password_confirmation }}"
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
          value="{{ $usermember->nik }}"
          disabled
        />

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="no_kk"
          class="form-label content-medium-dashboard"
          >Nomor Kartu Keluarga *</label
        >
        <input
          type="text"
          class="form-control"
          id="no_kk"
          name="no_kk"
          value="{{ $usermember->no_kk }}"
          disabled
        />

      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 mb-4">
        <label
          for="foto_ktp"
          class="form-label content-medium-dashboard"
          >Foto KTP *</label
        >
        <a class="form-control" href="{{ asset('storage/' . $usermember->foto_ktp) }}" target="_blank">Lihat Foto KTP</a>

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="foto_kk"
          class="form-label content-medium-dashboard"
          >Foto Kartu Keluarga *</label
        >
        <a class="form-control" href="{{ asset('storage/' . $usermember->foto_kk) }}" target="_blank">Lihat Foto Kartu Keluarga</a>

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
          class="form-control"
          id="no_hp"
          name="no_hp"
          value="{{ $usermember->no_hp }}"
          disabled
        />

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
          class="form-control"
          id="pekerjaan"
          name="pekerjaan"
          value="{{ $usermember->pekerjaan }}"
          disabled
        />

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="agama"
          class="form-label content-medium-dashboard"
          >Agama *</label
        >
        <input
          type="text"
          class="form-control"
          id="agama"
          name="agama"
          value="{{ $usermember->agama }}"
          disabled
        />

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
          class="form-control"
          id="tempat_lahir"
          name="tempat_lahir"
          value="{{ $usermember->tempat_lahir }}"
          disabled
        />

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="tanggal_lahir"
          class="form-label content-medium-dashboard"
          >Tanggal Lahir *</label
        >
        <input
          type="date"
          class="form-control"
          id="tanggal_lahir"
          name="tanggal_lahir"
          value="{{ $usermember->tanggal_lahir }}"
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
          value="{{ $usermember->kokab }}"
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
          value="{{ $usermember->kecamatan }}"
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
          value="{{ $usermember->kelurahan}}"
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
          value="{{ $usermember->rw }}"
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
          value="{{ $usermember->rt }}"
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
          value="{{ $usermember->alamat}}"
          disabled
        />

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
          class="form-select"
          id="himpunan_id"
          name="himpunan_id"
          disabled
        >
        <option value="">Pilih Nama Himpunan</option>
            <option value="{{ $himpunans->id }}" selected>{{ $himpunans->nama_himpunan }}</option>
        </select>

      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="user_fo_id"
          class="form-label content-medium-dashboard"
          >Nama FO ( Field Officer ) *</label
        >
        <input
          type="text"
          class="form-control"
          id="user_fo_id"
          name="user_fo_id"
          value="{{ $userfos->nama}}"
          disabled
        />

      </div>

    </div>

      <div class="col-lg-3 mx-auto">
        <a href="{{ route('member.profil.edit') }}" class="button-primary text-center mx-3 mt-2 d-block">Edit</a>
      </div>

  </div>
  
 </div>
 
  <!-- Content End -->
 
 </x-app-layout-member>