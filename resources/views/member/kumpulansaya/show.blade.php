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
    <form>
      <div class="row">
        <span class="form-label content-medium-dashboard"
          >Absensi *</span
        >
        <div class="col-lg-6 mb-4">
          <input
            class="form-check-input"
            type="radio"
            name="input-kehadiran"
            id="input-kehadiran"
            disabled
            checked
          />
          <label class="form-check-label" for="input-kehadiran">
            Hadir
          </label>
        </div>
        <div class="col-lg-6 mb-4">
          <input
            class="form-check-input"
            type="radio"
            name="input-kehadiran"
            id="input-kehadiran"
            disabled
          />
          <label class="form-check-label" for="input-kehadiran">
            Tidak Hadir
          </label>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 mb-4">
          <label
            for="input-pencairan-pinjaman"
            class="form-label content-medium-dashboard"
            >Pencairan Pinjaman</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-pencairan-pinjaman"
            name="input-pencairan-pinjaman"
            disabled
          />
        </div>
        <div class="col-lg-6 mb-4">
          <label
            for="input-takaful"
            class="form-label content-medium-dashboard"
            >Takaful</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-takaful"
            name="input-takaful"
            disabled
          />
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 mb-4">
          <label
            for="input-simpanan-anggota-masuk"
            class="form-label content-medium-dashboard"
            >Simpanan Anggota ( Masuk )</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-simpanan-anggota-masuk"
            name="input-simpanan-anggota-masuk"
            disabled
          />
        </div>
        <div class="col-lg-6 mb-4">
          <label
            for="input-simpanan-anggota-keluar"
            class="form-label content-medium-dashboard"
            >Simpanan Anggota ( Keluar )</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-simpanan-anggota-keluar"
            name="input-simpanan-anggota-keluar"
            disabled
          />
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 mb-4">
          <label
            for="input-simpanan-kelompok-masuk"
            class="form-label content-medium-dashboard"
            >Simpanan Kelompok ( Masuk )</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-simpanan-kelompok-masuk"
            name="input-simpanan-kelompok-masuk"
            disabled
          />
        </div>
        <div class="col-lg-6 mb-4">
          <label
            for="input-simpanan-kelompok-keluar"
            class="form-label content-medium-dashboard"
            >Simpanan Kelompok ( Keluar )</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-simpanan-kelompok-keluar"
            name="input-simpanan-kelompok-keluar"
            disabled
          />
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 mb-4">
          <label
            for="input-simpanan-sukarela-masuk"
            class="form-label content-medium-dashboard"
            >Simpanan Sukarela ( Masuk )</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-simpanan-sukarela-masuk"
            name="input-simpanan-sukarela-masuk"
            disabled
          />
        </div>
        <div class="col-lg-6 mb-4">
          <label
            for="input-simpanan-sukarela-keluar"
            class="form-label content-medium-dashboard"
            >Simpanan Sukarela ( Keluar )</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-simpanan-sukarela-keluar"
            name="input-simpanan-sukarela-keluar"
            disabled
          />
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 mb-4">
          <label
            for="input-infaq"
            class="form-label content-medium-dashboard"
            >Infaq</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-infaq"
            name="input-infaq"
            disabled
          />
        </div>
        <div class="col-lg-6 mb-4">
          <label
            for="input-iuran-anggota"
            class="form-label content-medium-dashboard"
            >Iuran Anggota</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-iuran-anggota"
            name="input-iuran-anggota"
            disabled
          />
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 mb-4">
          <label
            for="input-lain-lain"
            class="form-label content-medium-dashboard"
            >Lain - Lain</label
          >
          <input
            type="tel"
            class="form-control"
            id="input-lain-lain"
            name="input-lain-lain"
            disabled
          />
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
<!-- Content End -->


</x-app-layout-member>