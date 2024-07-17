<x-app-layout-member title="Kumpulan Saya">

<!-- Content Start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h2 class="title-large-dashboard mb-0">kumpulan Saya</h2>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            kumpulan Saya
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
          <th>Kumpulan Keberapa</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Ke-1</td>
          <td>12-07-23</td>
          <td>
            <a
              type="submit"
              href="{{ route('member.kumpulansaya.show') }}"
              class="button-icon me-1"
            >
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<!-- Content End -->

</x-app-layout-member>