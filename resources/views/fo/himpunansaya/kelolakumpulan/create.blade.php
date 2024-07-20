<x-app-layout-fo title="Tambah Kumpulan">

  <!-- Content Start -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="title-large-dashboard mb-0">
          Tambah Kumpulan Himpunan
        </h2>
  
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('fo.kelolakumpulan.index', $himpunan_id) }}">Kelola Kumpulan Nama</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Tambah Kumpulan Himpunan
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="card p-3 shadow-sm">
      <form id="add_kumpulan" action="{{ route('fo.kelolakumpulan.store', $himpunan_id) }}" method="POST">
      
        @csrf
        <div class="row">
          <div class="col-lg-12 mb-4">
            <label
              for="tanggal"
              class="form-label content-medium-dashboard"
              >Tanggal Kumpulan *</label
            >
            <input
              type="date"
              class="form-control @error('tanggal') is-invalid @enderror"
              id="tanggal"
              name="tanggal"
              value="{{ old('tanggal') }}"
            />
  
            <!-- error message-->
            @error('tanggal')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>

          <div class="col-lg-12 mb-4">
            <label
              for="judul_materi"
              class="form-label content-medium-dashboard"
              >Judul Materi *</label
            >
            <input
              type="text"
              class="form-control @error('judul_materi') is-invalid @enderror"
              id="judul_materi"
              name="judul_materi"
              value="{{ old('judul_materi') }}"
            />
  
            <!-- error message-->
            @error('judul_materi')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
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
          @forelse ($usermembers as $index => $usermember)
          <tr>
              <td>{{ ($usermembers->currentPage() - 1) * $usermembers->perPage() + $index + 1 }}</td>
              <td>{{ $usermember->nama }}</td>
            <td>
              <a
                type="submit"
                href="{{ route('fo.kumpulananggota.create', $usermember->id) }}"
                class="button-icon me-1"
              >
              <i class="bi bi-plus-lg"></i>
              </a>
            </td>
          </tr>
          @empty
                    <div class="alert alert-danger">
                        Data Anggota belum Ada.
                    </div>
                @endforelse
        </tbody>
      </table>

        <div class="col-lg-3 mx-auto">
          <a onclick="event.preventDefault(); document.getElementById('add_kumpulan').submit();" class="button-primary text-center mx-3 mt-2 d-block">Simpan</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Content End -->


</x-app-layout-fo>