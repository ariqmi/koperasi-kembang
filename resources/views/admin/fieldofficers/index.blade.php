<x-app-layout-admin title="Pengaturan FO">

        <!-- Content Start -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="title-large-dashboard mb-0">Pengaturan FO</h2>

              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    Pengaturan FO
                  </li>
                </ol>
              </nav>
            </div>

            <div class="col-lg-4 ms-auto mb-4">
              <a
                href="{{ route('admin.fieldofficers.create') }}"
                class="button-primary text-center mx-3 mt-2 d-block"
                >+ Tambah FO</a
              >
            </div>
          </div>

          <div class="card p-3 shadow-sm">
            <table id="example" class="table table-striped" style="width: 100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama FO</th>
                  <th>Jumlah Himpunan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($userfos as $index => $userfo)
                    <tr>
                        <td>{{ ($userfos->currentPage() - 1) * $userfos->perPage() + $index + 1 }}</td>
                        <td>{{ $userfo->nama_fo }}</td>
                        <td>{{ $userfo->jumlah_himpunan }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus ?');" action="{{ route('admin.fieldofficers.destroy', $userfo->id) }}" method="POST">
                              <a     
                                            type="submit"
                                            href="{{ route('admin.fieldofficers.show', $userfo->id) }}"
                                            class="button-icon me-1"
                                        >
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a
                                            type="submit"
                                            href="{{ route('admin.fieldofficers.edit', $userfo->id) }}"
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
                        Data FO belum Ada.
                    </div>
                @endforelse
            </tbody>
            </table>
            {{ $userfos->links() }}
          </div>
        </div>
      </div>
    </div>
    <!-- Content End -->

</x-app-layout-admin>