<x-app-layout-fo title="Dashboard Anggota Himpunan">

  <!-- Content Start -->
   <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="title-large-dashboard mb-0">
          Dashboard {{ $usermember->nama }}
        </h2>
  
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('fo.himpunansaya.index') }}">Himpunan Saya</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('fo.anggotahimpunan.index', $usermember->himpunan_id) }}">Daftar Anggota Himpunan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Dashboard {{ $usermember->nama }}
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="p-4">
            <h2 class="title-medium-dashboard">Pinjaman</h2>
            <h1 class="title-xlarge-dashboard">500.000</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card shadow-sm">
          <di class="p-4">
            <h2 class="title-medium-dashboard">Simpanan Anggota</h2>
            <h1 class="title-xlarge-dashboard">25.000</h1>
          </di>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="p-4">
            <h2 class="title-medium-dashboard">Simpanan Kelompok</h2>
            <h1 class="title-xlarge-dashboard">50.000</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card shadow-sm">
          <di class="p-4">
            <h2 class="title-medium-dashboard">Simpanan Sukarela</h2>
            <h1 class="title-xlarge-dashboard">64.000</h1>
          </di>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Content End -->

</x-app-layout-fo>