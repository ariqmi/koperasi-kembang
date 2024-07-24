<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Koperasi Kembang Syariah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

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
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- Animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Owl Carousel -->
    <link href="{{ url('js/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />

    <!-- Local CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css')}}"/>
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

        <!-- Navbar Start -->
        <div
        class="container-fluid fixed-top pt-3 animate__animated animate__fadeIn"
      >
        <nav
          class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 animate__animated animate__fadeIn"
        >
          <a href="/" class="navbar-brand">
            <img src="{{ url('img/logo-nav.png')}}" alt="" />
          </a>
          <button
            type="button"
            class="navbar-toggler me-4"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
              <a href="/" class="nav-item nav-link">Beranda</a>
              <a href="/kontak" class="nav-item nav-link active">Kontak</a>
            </div>
            <div class="d-lg-flex">
              @if (Auth::check())
          
              <a class="button-danger ms-4" href="{{ route('login.logout') }}">Logout</a>
              @else
        
              <a class="button-primary ms-4" href="{{ route('login.index') }}">Login</a>
              @endif
              
            </div>
          </div>
        </nav>
      </div>
      <!-- Navbar End -->

   <!-- Hero Section Start -->
   <section id="hero-kontak">
    <div class="hero-kontak">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 animate__animated animate__fadeInUp">
            <span class="breadcrumb"
              ><a href="/">Home</a> / Contact Us</span
            >
            <h3 class="section-title-large">Kontak</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Kontak Kami Section Start -->
  <section id="tentang-kami">
    <div class="container py-5 mt-5">
        <div class="row g-5">
          <div class="col-lg-12 animate__animated animate__fadeInUp">
            <span class="chip-title">Kontak Kami</span>
            <h1 class="section-title-lh-large my-4">Hubungi Kami di Sini</h1>
          </div>

          <div
            class="card-kontak-kami col-lg-6 col-md-12 animate__animated animate__fadeInUp"
          >
            <i class="bi bi-telephone-fill me-2"></i>
            <h1 class="section-content">+62 822-1181-4414</h1>
          </div>
          <div
            class="card-kontak-kami col-lg-6 col-md-12 animate__animated animate__fadeInUp"
          >
            <i class="bi bi-envelope-fill me-2"></i>
            <h1 class="section-content">koperasi.kembang@gmail.com</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Kontak Kami Section End -->

  <!-- Kantor Kami Section Start -->
  <section id="tentang-kami">
    <div class="container py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-12 animate__animated animate__fadeInUp">
            <span class="chip-title">Kantor Kami</span>
            <h1 class="section-title-lh-large mb-4 mt-4">
              Kunjungi Kami di Sini
            </h1>
          </div>
        </div>

        <div class="col-lg-12 animate__animated animate__fadeInUp my-4">
          <div id="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.733074983526!2d107.62001233241031!3d-6.928410342479703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8766d4a290d%3A0x1ef9f9b6ee0ed333!2sJl.%20Maleer%20III%20No.6a%2C%20Maleer%2C%20Kec.%20Batununggal%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040274!5e0!3m2!1sid!2sid!4v1713861035790!5m2!1sid!2sid"
              width="100%"
              height="400px"
              frameborder="0"
              style="
                border: 0;
                border-radius: 10px;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
              "
              allowfullscreen=""
            ></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Kantor Kami Section End -->

    <!-- Footer Start -->
    <div class="footer container-fluid pt-5 animate__animated animate__fadeIn">
      <div class="container py-4">
        <div class="row g-5">
          <div class="col-lg-4 col-md-6">
            <img src="{{ url('img/logo-footer.png')}}" alt="" height="68" />
            <p class="mt-3">
              Merupakan koperasi yang bergerak pada bidang simpanan, pembiayaan,
              dan investasi berdasarkan penerapan sistem bagi hasil (syariah).
            </p>
          </div>
          <div class="col-lg-4 col-md-6">
            <h5 class="mb-4">Hubungi Kami</h5>
            <p><i class="bi bi-envelope-fill me-2"></i>koperasi.kembang@gmail.com</p>
            <p><i class="bi bi-telephone-fill me-2"></i>+62 822-1181-4414</p>
          </div>
          <div class="col-lg-4 col-md-6">
            <h5 class="mb-4">Kantor Kami</h5>
            <p>
              <i class="bi bi-geo-alt-fill me-2"></i>Jl. Maleer III No.6a
              Maleer, Kec. Batununggal, Kota Bandung, Jawa Barat 40274
            </p>
            <p>
              <i class="bi bi-alarm-fill me-2"></i>Senin - Jumat | 08:00 - 17:00
              WIB
            </p>
          </div>
        </div>
      </div>
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center mb-3 mb-md-0">
              &copy; <a href="#">Koperasi Syariah Kembang</a>, All Right
              Reserved.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('js/wow/wow.min.js') }}"></script>
    <script src="{{ url('js/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('js/main.js') }}"></script>
  </body>
</html>
