<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>

    <!-- Logo Title Bar -->
    <link rel="icon" href="{{ url('favicon.ico')}}" type="img/x-icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Datatables -->
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css"
    />

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{ url('css/dashboard.css')}}"/>
  </head>

  <body>
    <!--  Body Wrapper -->
    <div
      class="page-wrapper"
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed"
    >
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div
            class="brand-logo d-flex align-items-center justify-content-between"
          >
            <a href="/" class="text-nowrap logo-img my-3">
              <img src="{{ url('img/logo-nav-black.png')}}" width="200" alt="" />
            </a>
            <div
              class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
              id="sidebarCollapse"
            >
              <i class="bi bi-x-lg"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar my-4" data-simplebar="">
            <ul id="sidebarnav">
              <li class="sidebar-item mb-3">
                <a
                  class="sidebar-link"
                  href="{{ route('fo.dashboard.index') }}" aria-expanded="false"
                >
                  <span>
                    <i class="bi bi-grid"></i>
                  </span>
                  <span class="hide-menu">Dashboard FO</span>
                </a>
              </li>
              
            <li class="sidebar-item mb-3 {{ request()->routeIs('fo.himpunansaya.index') || request()->routeIs('fo.himpunansaya.show') 
            || request()->routeIs('fo.anggotahimpunan.index') || request()->routeIs('fo.anggotahimpunan.show') 
            || request()->routeIs('fo.anggotahimpunan.edit')  || request()->routeIs('fo.anggotahimpunan.dashboard') 
            || request()->routeIs('fo.kelolakumpulan.index')  || request()->routeIs('fo.kelolakumpulan.create')
            || request()->routeIs('fo.kelolakumpulan.edit')   || request()->routeIs('fo.kumpulananggota.create') 
            || request()->routeIs('fo.kumpulananggota.edit') ? 'selected' : '' }}">
              <a
                class="sidebar-link"
                href="{{ route('fo.himpunansaya.index') }}"
                aria-expanded="false"
              >
                <span>
                  <i class="bi bi-people"></i>
                </span>
                <span class="hide-menu">Himpunan Saya</span>
              </a>
            </li>

            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->

      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a
                  class="nav-link sidebartoggler nav-icon-hover"
                  id="headerCollapse"
                  href="javascript:void(0)"
                >
                  <i class="bi bi-list"></i>
                </a>
              </li>
            </ul>
            <div
              class="navbar-collapse justify-content-end px-0"
              id="navbarNav"
            >
              <ul
                class="navbar-nav flex-row ms-auto align-items-center justify-content-end"
              >
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="javascript:void(0)"
                    id="drop2"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    @if(Auth::check())
                    
                    <h5 class="content-large-dashboard mx-3">Hi, {{ Auth::user()->username }}</h5>
              
                    @endif
                    <i class="bi bi-chevron-down icon-sm mb-1"></i>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                    aria-labelledby="drop2"
                  >
                    <div class="message-body">
                      <a
                        href="{{ route('fo.profil.show') }}"
                        class="d-flex align-items-center gap-2 dropdown-item"
                      >
                        <i class="bi bi-person icon-md"></i>
                        <p class="mb-0">Profil Saya</p>
                      </a>
                      <a
                        href="{{ route('login.logout') }}"
                        class="button-danger-sm text-center mx-3 mt-2 d-block"
                        >Logout</a
                      >
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>

       {{ $slot }}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('js/sidebarmenu.js') }}"></script>
    <script src="{{ url('js/app.min.js') }}"></script>

    <!-- Datatables -->
    <script
      defer
      src="https://cdn.datatables.net/2.0.7/js/dataTables.js"
    ></script>
    <script
      defer
      src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      //message with sweetalert
      @if(session('success'))
          Swal.fire({
              icon: "success",
              title: "BERHASIL",
              text: "{{ session('success') }}",
              showConfirmButton: false,
              timer: 2000
          });
      @elseif(session('error'))
          Swal.fire({
              icon: "error",
              title: "GAGAL!",
              text: "{{ session('error') }}",
              showConfirmButton: false,
              timer: 2000
          });
      @endif

  </script>
  
  </body>
</html>
