<x-app-layout-admin title=" Edit Profil Admin">

 <!-- Content Start -->
 <div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <h2 class="title-large-dashboard mb-3">Edit Profil Saya</h2>
    </div>
  </div>

  <div class="card p-3 shadow-sm">
  
    <form id="profil_admin" action="{{ route('admin.profil.update') }}" method="POST">
      
        @csrf
        @method('PUT')

        <div class="row">
  
          <div class="col-lg-12 mb-4">
            <label
              for="username"
              class="form-label content-medium-dashboard"
              >Username *</label
            >
            <input
              type="text"
              class="form-control @error('username') is-invalid @enderror"
              id="username"
              name="username"
              value="{{ old('username', $user->username) }}"
            />

             <!-- error message-->
             @error('username')
             <div class="alert alert-danger mt-2">
                 {{ $message }}
             </div>
            @enderror

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
              class="form-control @error('password') is-invalid @enderror"
              id="password"
              name="password"
              value="{{ old('password') }}"
            />
  
            <!-- error message-->
            @error('password')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
          <div class="col-lg-6 mb-4">
            <label
              for="konfirmasi_password"
              class="form-label content-medium-dashboard"
              >Konfirmasi Password *</label
            >
            <input
              type="password"
              class="form-control @error('konfirmasi_password') is-invalid @enderror"
              id="konfirmasi_password"
              name="password_confirmation"
              value="{{ old('password_confirmation') }}"
            />
  
            <!-- error message-->
            @error('password')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
           @enderror
  
          </div>
  
        </div>

        <div class="col-lg-3 mx-auto">
          <a onclick="event.preventDefault(); document.getElementById('profil_admin').submit();" class="button-primary text-center mx-3 mt-2 d-block">Simpan</a>
        </div>

  <!-- Content End -->



</x-app-layout-admin>