<x-app-layout-admin title="Pengaturan Himpunan">

        <!-- Content Start -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="title-large-dashboard mb-0">Pengaturan Himpunan</h2>

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    Pengaturan Himpunan
                  </li>
                </ol>
              </nav>
            </div>

            <div class="col-lg-4 ms-auto mb-4">
              <a
                href="{{ route('admin.himpunans.create') }}"
                class="button-primary text-center mx-3 mt-2 d-block"
                >+ Tambah Himpunan</a
              >
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
                        <td>{{ $himpunan->jumlah_himpunan }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus ?');" action="{{ route('admin.himpunans.destroy', $himpunan->id) }}" method="POST">
                              <a     
                                            type="submit"
                                            href="{{ route('admin.himpunans.show', $himpunan->id) }}"
                                            class="button-icon me-1"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a
                                            type="submit"
                                            href="{{ route('admin.himpunans.edit', $himpunan->id) }}"
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
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Himpunan belum Ada.
                    </div>
                @endforelse
            </tbody>
            </table>
            {{ $himpunans->links() }}
          </div>
        </div>
      </div>
    </div>
    <!-- Content End -->

</x-app-layout-admin>