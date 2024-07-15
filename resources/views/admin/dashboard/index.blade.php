<x-app-layout-admin title="Dashboard Admin">

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
          <h2 class="title-medium-dashboard">Jumlah Himpunan</h2>
          <h1 class="title-xlarge-dashboard">{{ $jumlahHimpunan }}</h1>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card shadow-sm">
        <div class="p-4">
          <h2 class="title-medium-dashboard"> Jumlah FO ( Field Officer )</h2>
          <h1 class="title-xlarge-dashboard">{{ $jumlahFO }}</h1>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Content End -->

</x-app-layout-admin>