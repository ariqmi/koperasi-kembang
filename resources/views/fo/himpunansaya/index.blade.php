<x-app-layout-fo title="Himpunan Saya">

  <!-- Content Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="title-large-dashboard mb-0">Himpunan Saya</h2>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              Himpunan Saya
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="card p-3 shadow-sm">
      <table id="example" class="table table-striped" style="width: 100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Himpunan</th>
            <th>Jumlah Anggota</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($himpunans as $index => $himpunan)
                    <tr>
                        <td>{{ ($himpunans->currentPage() - 1) * $himpunans->perPage() + $index + 1 }}</td>
                        <td>{{ $himpunan->nama_himpunan }}</td>
                        <td>{{ $himpunan->jumlah_anggota }}</td>
            <td>
              <a
                type="submit"
                href="{{ route('fo.himpunansaya.show', $himpunan->id) }}"
                class="button-icon me-1"
              >
                <i class="bi bi-eye"></i>
              </a>
              <a
                type="submit"
                href="{{ route('fo.anggotahimpunan.index', $himpunan->id) }}"
                class="button-icon-anggota me-1"
              >
                <i class="bi bi-people"></i>
              </a>
              <a
                type="submit"
                href="{{ route('fo.kelolakumpulan.index', $himpunan->id) }}"
                class="button-icon-kumpulan me-1"
              >
                <i class="bi bi-journals"></i>
              </a>
            </td>
          </tr>
          @empty
          <div class="alert alert-danger">
              Data Himpunan belum Ada.
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