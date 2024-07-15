<x-app-layout-admin title="Profil Admin">

 <!-- Content Start -->
 <div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <h2 class="title-large-dashboard mb-3">Profil Saya</h2>
    </div>
  </div>

  <div class="card p-3 shadow-sm">

  <div class="row">
  
    <div class="col-lg-12 mb-4">
      <label
        for="username"
        class="form-label content-medium-dashboard"
        >Username *</label
      >
      <input
        type="text"
        class="form-control"
        id="username"
        name="username"
        value="{{ $user->username }}"
        disabled
      />
    </div>

  </div>

  <div class="row">

    <div class="col-lg-6 mb-4">
      <label
        for="password"
        class="form-label content-medium-dashboard"
        >Password *</label
      >
      <input
        type="password"
        class="form-control"
        id="password"
        name="password"
        disabled
      />

    </div>

    <div class="col-lg-6 mb-4">
      <label
        for="konfirmasi_password"
        class="form-label content-medium-dashboard"
        >Konfirmasi Password *</label
      >
      <input
        type="password"
        class="form-control"
        id="konfirmasi_password"
        name="password_confirmation"
        disabled
      />

    </div>

  </div>

  <div class="col-lg-3 mx-auto">
    <a href="{{ route('admin.profil.edit') }}" class="button-primary text-center mx-3 mt-2 d-block">Edit</a>
  </div>    

</div>

 <!-- Content End -->




</x-app-layout-admin>