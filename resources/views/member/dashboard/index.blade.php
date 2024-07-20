<x-app-layout-member title="Dashboard Member">

  <!-- Content Start -->
  <div class="container-fluid">
    <h2 class="title-large-dashboard mb-0">Dashboard</h2>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          Dashboard
        </li>
      </ol>
    </nav>

    <div class="row">
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="p-4">
            <h2 class="title-medium-dashboard">Pinjaman</h2>
            <h1 class="title-xlarge-dashboard">{{ number_format($pinjaman,0,',','.') }}</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card shadow-sm">
          <di class="p-4">
            <h2 class="title-medium-dashboard">Simpanan Anggota</h2>
            <h1 class="title-xlarge-dashboard">{{ number_format($simpanananggota,0,',','.') }}</h1>
          </di>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="card shadow-sm">
          <div class="p-4">
            <h2 class="title-medium-dashboard">Simpanan Kelompok</h2>
            <h1 class="title-xlarge-dashboard">{{ number_format($simpanankelompok,0,',','.') }}</h1>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card shadow-sm">
          <di class="p-4">
            <h2 class="title-medium-dashboard">Simpanan Sukarela</h2>
            <h1 class="title-xlarge-dashboard">{{ number_format($simpanankelompok,0,',','.') }}</h1>
          </di>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Content End -->
  </x-app-layout-member>