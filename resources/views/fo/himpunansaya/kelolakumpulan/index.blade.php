<x-app-layout-fo title="Kelola Kumpulan">

<!-- Content Start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="title-large-dashboard mb-0">
        Kelola Kumpulan
      </h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Kelola Kumpulan
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
      @forelse ($kumpulans as $index => $kumpulan)
      <tr>
          <td>{{ ($kumpulans->currentPage() - 1) * $kumpulans->perPage() + $index + 1 }}</td>
          <td>ke-{{ ($kumpulans->currentPage() - 1) * $kumpulans->perPage() + $index + 1 }}</td>
          <td>{{ $kumpulan->tanggal }}</td>
        <td>
          <a
            type="submit"
            href="{{ route('fo.kelolakumpulan.edit', $kumpulan->id) }}"
            class="button-icon-edit me-1"
          >
            <i class="bi bi-pencil-square"></i>
          </a>
        </td>
      </tr>
      @empty
                    <div class="alert alert-danger">
                        Data Kumpulan belum Ada.
                    </div>
                @endforelse
    </tbody>
  </table>
</div>
</div>
</div>
</div>
<!-- Content End -->


</x-app-layout-fo>