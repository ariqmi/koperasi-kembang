<x-app-layout-fo title="Kelola Kumpulan">

<!-- Content Start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="title-large-dashboard mb-0">
        Kelola Kumpulan Nama
      </h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Kelola Kumpulan Nama
          </li>
        </ol>
      </nav>
    </div>

  <div class="col-lg-4 ms-auto mb-4">
    <a
      href="{{ route('fo.kelolakumpulan.create', $himpunan_id) }}"
      class="button-primary text-center mx-3 mt-2 d-block"
      >+ Tambah Kumpulan</a
    >
  </div>
</div>

<div class="card p-3 shadow-sm">
  <table id="example" class="table table-striped" style="width: 100%">
    <thead>
      <tr>
        <th>No</th>
        <th>Kumpulan Keberapa</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Ke-1</td>
        <td>12-07-23</td>
        <td>
          <a
            type="submit"
            href="{{ route('fo.kelolakumpulan.edit') }}"
            class="button-icon-edit me-1"
          >
            <i class="bi bi-pencil-square"></i>
          </a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
<!-- Content End -->


</x-app-layout-fo>