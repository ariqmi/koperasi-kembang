<x-app-layout-fo title="Edit Kumpulan">

  <!-- Content Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="title-large-dashboard mb-0">
          Edit Kumpulan
        </h2>
  
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('fo.kelolakumpulan.index') }}">Kelola Kumpulan Nama</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Edit Kumpulan
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="card p-3 shadow-sm">
      <form>
        <div class="row">
          <div class="col-lg-12 mb-4">
            <label
              for="input-tanggal-kumpulan"
              class="form-label content-medium-dashboard"
              >Tanggal Kumpulan *</label
            >
            <input
              type="date"
              class="form-control"
              id="input-tanggal-kumpulan"
              name="input-tanggal-kumpulan"
            />
          </div>
          <div class="col-lg-12 mb-4">
            <label
              for="input-judul-materi"
              class="form-label content-medium-dashboard"
              >Judul Materi *</label
            >
            <input
              type="tel"
              class="form-control"
              id="input-judul-materi"
              name="input-judul-materi"
            />
          </div>
        </div>
      </form>

      <table id="example" class="table table-striped" style="width: 100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Dewi Chandra Kurniawati</td>
            <td>
              <a
                type="submit"
                href="{{ route('fo.kumpulananggota.edit') }}"
                class="button-icon-edit me-1"
              >
                <i class="bi bi-pencil-square"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="col-lg-3 mx-auto mt-4">
        <a
          href="kumpulan-fo.html"
          class="button-primary text-center mx-3 mt-2 d-block"
          >Simpan</a
        >
      </div>
    </div>
  </div>
</div>
</div>
<!-- Content End -->


</x-app-layout-fo>