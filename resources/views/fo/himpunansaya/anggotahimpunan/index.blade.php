<x-app-layout-fo title="Daftar Anggota Himpunan">

 <!-- Content Start -->
 <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="title-large-dashboard mb-0">
        Daftar Anggota Himpunan
      </h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Daftar Anggota Himpunan
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
          <th>Nama Anggota</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($usermembers as $index => $usermember)
        <tr>
            <td>{{ ($usermembers->currentPage() - 1) * $usermembers->perPage() + $index + 1 }}</td>
            <td>{{ $usermember->nama }}</td>
          <td>
            <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus ?');" action="{{ route('fo.anggotahimpunan.destroy', $usermember->user_id) }}" method="POST">
            <a
              type="submit"
              href="{{ route('fo.anggotahimpunan.show', $usermember->user_id) }}"
              class="button-icon me-1"
            >
              <i class="bi bi-eye"></i>
            </a>
            <a
              type="submit"
              href="{{ route('fo.anggotahimpunan.edit', $usermember->user_id) }}"
              class="button-icon-edit me-1"
            >
              <i class="bi bi-pencil-square"></i>
            </a>
            @csrf
            @method('DELETE')
            <button
            type="submit"
            class="button-icon-delete me-1"
            >
            <i class="bi bi-trash3"></i>
            </button>
            <a
              type="submit"
              href="{{ route('fo.anggotahimpunan.dashboard', $usermember->user_id) }}"
              class="button-icon-kumpulan me-1"
            >
              <i class="bi bi-bar-chart-line"></i>
            </a>
          </form>
          </td>
        </tr>
        @empty
        <div class="alert alert-danger">
            Data Anggota Himpunan belum Ada.
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