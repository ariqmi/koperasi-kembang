<x-app-layout-fo title="Tambah Kumpulan Anggota">

  <!-- Content Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="title-large-dashboard mb-0">
          Tambah Kumpulan Anggota
        </h2>
  
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('fo.kelolakumpulan.index', $usermember->himpunan_id) }}">Kelola Kumpulan Nama</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('fo.kelolakumpulan.create', $usermember->himpunan_id) }}">Tambah Kumpulan Himpunan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Tambah Kumpulan Anggota
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="card p-3 shadow-sm">
      <form>
        <div class="row">
          <span class="form-label content-medium-dashboard"
            >Absensi *</span
          >
          <div class="col-lg-6 mb-4">
            <input
              class="form-check-input"
              type="radio"
              name="absensi"
              id="absensi"
              checked
            />
            <label class="form-check-label" for="absensi">
              Hadir
            </label>
          </div>
          <div class="col-lg-6 mb-4">
            <input
              class="form-check-input"
              type="radio"
              name="absensi"
              id="absensi"
            />
            <label class="form-check-label" for="absensi">
              Tidak Hadir
            </label>
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
            />
          </div>
        </div>
      </form>

      <div class="col-lg-3 mx-auto">
        <a
          href="lihat-kumpulan-fo.html"
          class="button-primary text-center mx-3 mt-2 d-block"
          >Simpan</a
        >
      </div>
    </div>
  </div>
</div>
</div>

  </x-app-layout-fo>