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
              <a href="{{ route('fo.kelolakumpulan.index', $kumpulan->himpunan_id) }}">Kelola Kumpulan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Edit Kumpulan
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="card p-3 shadow-sm">
      <form id="edit_kumpulan" action="{{ route('fo.kelolakumpulan.update', $kumpulan->id) }}" method="POST">
        
        @csrf
        @method('PUT')

        <div class="row">
          <div class="col-lg-12 mb-4">
            <label
              for="tanggal"
              class="form-label content-medium-dashboard"
              >Tanggal Kumpulan *</label
            >
            <input
              type="date"
              class="form-control"
              id="tanggal"
              name="tanggal"
              value="{{ old('tanggal' , $kumpulan->tanggal) }}"
            />
          </div>
          <div class="col-lg-12 mb-4">
            <label
              for="judul_materi"
              class="form-label content-medium-dashboard"
              >Judul Materi *</label
            >
            <input
              type="tel"
              class="form-control"
              id="judul_materi"
              name="judul_materi"
              value="{{ old('judul_materi' , $kumpulan->judul_materi) }}"
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
          @forelse ($kumpulananggotas as $index => $kumpulananggota)
          <tr>
              <td>{{ ($kumpulananggotas->currentPage() - 1) * $kumpulananggotas->perPage() + $index + 1 }}</td>
              <td>{{ $kumpulananggota->userMember->nama }}</td>
            <td>
              <a
                type="submit"
                href="{{ route('fo.kumpulananggota.edit', $kumpulananggota->id) }}"
                class="button-icon-edit me-1"
              >
                <i class="bi bi-pencil-square"></i>
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
      <a onclick="event.preventDefault(); document.getElementById('edit_kumpulan').submit();" class="button-primary text-center mx-3 mt-2 d-block">Simpan</a>
    </div>
    </div>
  </div>
</div>
</div>
<!-- Content End -->


</x-app-layout-fo>