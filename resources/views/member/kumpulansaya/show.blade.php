<x-app-layout-member title="Lihat Kumpulan Saya"> 
 
 <!-- Content Start -->
 <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="title-large-dashboard mb-0">kumpulan Saya</h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('member.kumpulansaya.index') }}">Kumpulan Saya</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Lihat Kumpulan Saya
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="card p-3 shadow-sm">
    <div class="row">
      <div class="col-lg-12 mb-4">
        <label
          for="absensi"
          class="form-label content-medium-dashboard"
          >Absensi *</label
        >
        <select
          type="text"
          class="form-select"
          id="absensi"
          name="absensi"
          value="{{ old('absensi', $kumpulananggota->absensi) }}"
          disabled
        >
          <option value="Hadir">Hadir</option>
          <option value="Tidak Hadir">Tidak Hadir</option>
        </select>
    </div>
  </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
        <label
          for="pencairan_pinjaman"
          class="form-label content-medium-dashboard"
          >Pencairan Pinjaman</label
        >
        <input
          type="number"
          class="form-control"
          id="pencairan_pinjaman"
          name="pencairan_pinjaman"
          value="{{ old('pencairan_pinjaman', $kumpulananggota->pencairan_pinjaman) }}"
          disabled
        />
      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="takaful"
          class="form-label content-medium-dashboard"
          >Takaful</label
        >
        <input
          type="number"
          class="form-control"
          id="takaful"
          name="takaful"
          value="{{ old('takaful', $kumpulananggota->takaful) }}"
          disabled
        />
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <label
          for="angsuran"
          class="form-label content-medium-dashboard"
          >Angsuran</label
        >
        <input
          type="number"
          class="form-control"
          id="angsuran"
          name="angsuran"
          value="{{ old('angsuran', $kumpulananggota->angsuran) }}"
          disabled
        />
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
        <label
          for="simpanan_anggota_masuk"
          class="form-label content-medium-dashboard"
          >Simpanan Anggota ( Masuk )</label
        >
        <input
          type="number"
          class="form-control"
          id="simpanan_anggota_masuk"
          name="simpanan_anggota_masuk"
          value="{{ old('simpanan_anggota_masuk', $kumpulananggota->simpanan_anggota_masuk) }}"
          disabled
        />
      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="simpanan_anggota_keluar"
          class="form-label content-medium-dashboard"
          >Simpanan Anggota ( Keluar )</label
        >
        <input
          type="number"
          class="form-control"
          id="simpanan_anggota_keluar"
          name="simpanan_anggota_keluar"
          value="{{ old('simpanan_anggota_keluar', $kumpulananggota->simpanan_anggota_keluar) }}"
          disabled
        />
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
        <label
          for="simpanan_kelompok_masuk"
          class="form-label content-medium-dashboard"
          >Simpanan Kelompok ( Masuk )</label
        >
        <input
          type="number"
          class="form-control"
          id="simpanan_kelompok_masuk"
          name="simpanan_kelompok_masuk"
          value="{{ old('simpanan_kelompok_masuk', $kumpulananggota->simpanan_kelompok_masuk) }}"
          disabled
        />
      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="simpanan_kelompok_keluar"
          class="form-label content-medium-dashboard"
          >Simpanan Kelompok ( Keluar )</label
        >
        <input
          type="number"
          class="form-control"
          id="simpanan_kelompok_keluar"
          name="simpanan_kelompok_keluar"
          value="{{ old('simpanan_kelompok_keluar', $kumpulananggota->simpanan_kelompok_keluar) }}"
          disabled
        />
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
        <label
          for="simpanan_sukarela_masuk"
          class="form-label content-medium-dashboard"
          >Simpanan Sukarela ( Masuk )</label
        >
        <input
          type="number"
          class="form-control"
          id="simpanan_sukarela_masuk"
          name="simpanan_sukarela_masuk"
          value="{{ old('simpanan_sukarela_masuk', $kumpulananggota->simpanan_sukarela_masuk) }}"
          disabled
        />
      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="simpanan_sukarela_keluar"
          class="form-label content-medium-dashboard"
          >Simpanan Sukarela ( Keluar )</label
        >
        <input
          type="number"
          class="form-control"
          id="simpanan_sukarela_keluar"
          name="simpanan_sukarela_keluar"
          value="{{ old('simpanan_sukarela_keluar', $kumpulananggota->simpanan_sukarela_keluar) }}"
          disabled
        />
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4">
        <label
          for="infaq"
          class="form-label content-medium-dashboard"
          >Infaq</label
        >
        <input
          type="number"
          class="form-control"
          id="infaq"
          name="infaq"
          value="{{ old('infaq', $kumpulananggota->infaq) }}"
          disabled
        />
      </div>

      <div class="col-lg-6 mb-4">
        <label
          for="iuran_anggota"
          class="form-label content-medium-dashboard"
          >Iuran Anggota</label
        >
        <input
          type="number"
          class="form-control"
          id="iuran_anggota"
          name="iuran_anggota"
          value="{{ old('iuran_anggota', $kumpulananggota->iuran_anggota) }}"
          disabled
        />
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 mb-4">
        <label
          for="lainnya"
          class="form-label content-medium-dashboard"
          >Lain - Lain</label
        >
        <input
          type="number"
          class="form-control"
          id="lainnya"
          name="lainnya"
          value="{{ old('lainnya', $kumpulananggota->lainnya) }}"
          disabled
        />
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Content End -->


</x-app-layout-member>