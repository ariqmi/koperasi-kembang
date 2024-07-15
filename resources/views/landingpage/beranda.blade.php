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
            <a href="/" class="nav-item nav-link active">Beranda</a>
            <a href="/kontak" class="nav-item nav-link">Kontak</a>
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
    <section id="hero">
      <div class="container-fluid p-0 mb-5">
        <div
          id="header-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="w-100" src="{{ url('img/img-hero-1.png')}}" alt="Image" />
              <div class="carousel-caption">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-10 pt-5">
                      <h1 class="mb-3 animate__animated animate__slideInDown">
                        Koperasi Kembang Syariah Hadir Sebagai Solusi Bagi Anda
                      </h1>
                      <p class="mb-5 animate__animated animate__slideInDown">
                        Dengan menyediakan layanan simpan pinjam yang profesional dan modern demi kesejahteraan anggota dan masyarakat.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="w-100" src="{{ url('img/img-hero-2.png')}}" alt="Image" />
              <div class="carousel-caption">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-10 pt-5">
                      <h1 class="mb-3 animate__animated animate__slideInDown">
                        Koperasi Kembang Syariah Hadir Sebagai Solusi Bagi Anda
                      </h1>
                      <p class="mb-5 animate__animated animate__slideInDown">
                        Untuk membangun jaringan kolaborasi dengan koperasi dan berbagai lembaga lainnya.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="w-100" src="{{ url('img/img-hero-3.png')}}" alt="Image" />
              <div class="carousel-caption">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-10 pt-5">
                      <h1 class="mb-3 animate__animated animate__slideInDown">
                        Koperasi Kembang Syariah Hadir Sebagai Solusi Bagi Anda
                      </h1>
                      <p class="mb-5 animate__animated animate__slideInDown">
                        Untuk mengembangkan usaha-usaha sektor riil untuk kesejahteraan anggota, masyarakat, serta kemandirian koperasi.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#header-carousel"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Tentang Kami Section Start -->
    <section id="tentang-kami">
      <div class="container py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 animate__animated animate__fadeInUp">
              <span class="chip-title">Tentang Kami</span>
              <h1 class="section-title-lh-large mb-4 mt-4">
                Koperasi
                <span class="section-title-highlight d-block"
                  >Kembang Syariah</span
                >
              </h1>
              <p class="section-content mb-4">
                Merupakan koperasi yang bergerak pada bidang simpanan,
                pembiayaan, dan investasi berdasarkan penerapan sistem bagi
                hasil (syariah).
              </p>
            </div>
            <div class="col-lg-6 animate__animated animate__fadeInUp">
              <div class="img-border">
                <img
                  class="img-default"
                  src="{{ url('img/img-tentang-kami.png')}}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tentang Kami Section End -->

    <!-- Visi & Misi Section Start -->
    <section id="visi-misi">
      <div class="container py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp">
              <span class="chip-title">Visi & Misi</span>
              <img
                class="col-12 mt-4 img-visi pb-5"
                src="{{ url('img/img-visi-misi.png')}}"
                alt=""
              />
            </div>
            <div class="col-lg-8 col-md-6 animate__animated animate__fadeInUp">
              <h1 class="section-title-large mb-4 mt-4">Visi Kami</h1>
              <p class="section-content mb-4">
                Menjadi koperasi yang profesional dan mandiri dalam
                memberdayakan emak - emak yang berlandaskan nilai - nilai
                ekonomi syariah.
              </p>
              <h1 class="section-title-large mb-4 mt-4">Misi Kami</h1>
              <div class="col-lg-3 d-inline">
                <p class="section-content-medium">
                  1. Memberikan pelayanan simpan pinjam yang profesional dan
                  modern untuk kemaslahatan anggota dan masyarakat.
                </p>
              </div>
              <div class="col-lg-3 d-inline">
                <p class="section-content-medium">
                  2. Membangun jejaring kolaborasi dengan koperasi dan lembaga
                  lainnya.
                </p>
              </div>
              <div class="col-lg-3 d-inline">
                <p class="section-content-medium">
                  3. Mengembangkan usaha -usaha sekor riili kesejahteraan
                  anggota, masyarakat, dan kemandirian koperasi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Visi & Misi Section End -->

    <!-- Laynanan Kami Start -->
    <section id="layanan-kami">
      <div class="container py-5">
        <div class="container text-center">
          <div class="row g-5">
            <div class="col-lg-12 animate__animated animate__fadeInUp">
              <span class="chip-title">Layanan Kami</span>
              <h1 class="section-title-large mt-3">
                Koperasi
                <span class="section-title-highlight">Kembang Syariah</span>
                Menyediakan Layanan
              </h1>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card-layanan rounded d-flex h-100">
                <div class="card-layanan-img rounded">
                  <img
                    class="img-fluid"
                    src="{{ url('img/img-card-layanan.png')}}"
                    alt=""
                  />
                </div>
                <div class="card-layanan-text rounded p-4">
                  <div class="rounded mx-auto mb-3">
                    <img
                      class="img-fluid"
                      src="{{ url('img/icon-card-layanan.png')}}"
                      alt="Icon"
                    />
                  </div>
                  <h4>Qadrul Hasan</h4>
                  <p>
                    Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                    lorem sed diam stet diam sed stet.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card-layanan rounded d-flex h-100">
                <div class="card-layanan-img rounded">
                  <img
                    class="img-fluid"
                    src="{{ url('img/img-card-layanan.png')}}"
                    alt=""
                  />
                </div>
                <div class="card-layanan-text rounded p-4">
                  <div class="rounded mx-auto mb-3">
                    <img
                      class="img-fluid"
                      src="{{ url('img/icon-card-layanan.png')}}"
                      alt="Icon"
                    />
                  </div>
                  <h4>Qadrul Hasan</h4>
                  <p>
                    Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                    lorem sed diam stet diam sed stet.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mx-auto">
              <div class="card-layanan rounded d-flex h-100">
                <div class="card-layanan-img rounded">
                  <img
                    class="img-fluid"
                    src="{{ url('img/img-card-layanan.png')}}"
                    alt=""
                  />
                </div>
                <div class="card-layanan-text rounded p-4">
                  <div class="rounded mx-auto mb-3">
                    <img
                      class="img-fluid"
                      src="{{ url('img/icon-card-layanan.png')}}"
                      alt="Icon"
                    />
                  </div>
                  <h4>Qadrul Hasan</h4>
                  <p>
                    Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                    lorem sed diam stet diam sed stet.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Layanan Kami End -->

    <!-- Dokumentasi Start -->
    <section id="dokumentasi">
      <div class="container py-5">
        <div class="container text-center">
          <div class="row g-5">
            <div class="col-lg-12 animate__animated animate__fadeInUp">
              <span class="chip-title">Dokumentasi Kegiatan</span>
              <h1 class="section-title-large mt-3">
                Dokumentasi Kegiatan Koperasi
                <span class="section-title-highlight d-block"
                  >Kembang Syariah</span
                >
              </h1>
            </div>

            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 animate__animated animate__fadeInUp">
              <div class="card-galeri rounded">
                <img class="" src="{{ url('img/card-galeri.png')}}" alt="" width="100%" />
                <div>
                  <h4 class="section-content-medium card-galeri-text">
                    Aktivitas Setoran Tabungan
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Dokumentasi End -->

    <!-- Testimoni Section Start -->
    <section id="testimoni">
      <div class="container py-5 my-4">
        <div class="container">
          <div class="row g-5">
            <div
              class="col-lg-5 col-md-6 text-center text-lg-start text-md-start my-auto animate__animated animate__fadeInUp"
            >
              <span class="chip-title">Testimoni</span>
              <h1 class="section-title-large my-3">
                Kata Mereka Yang Sudah Bergabung Dengan Koperasi
                <span class="section-title-highlight">Kembang Syariah</span>
              </h1>
            </div>
            <div class="col-lg-7 col-md-6 animate__animated animate__fadeInUp">
              <div class="owl-carousel testimoni-carousel">
                <div class="testimoni-item">
                  <img
                    class="img-fluid rounded mb-3"
                    src="{{ url('img/testimoni-1.png')}}"
                    alt=""
                  />
                  <p class="section-content-medium">
                    “Merupakan koperasi yang bergerak pada bidang simpanan,
                    pembiayaan, dan investasi berdasarkan penerapan sistem bagi
                    hasil (syariah).”
                  </p>
                  <h4 class="section-content">Jenny Wilson</h4>
                </div>
                <div class="testimoni-item">
                  <img
                    class="img-fluid rounded mb-3"
                    src="{{ url('img/testimoni-2.png')}}"
                    alt=""
                  />
                  <p class="section-content-medium">
                    “Merupakan koperasi yang bergerak pada bidang simpanan,
                    pembiayaan, dan investasi berdasarkan penerapan sistem bagi
                    hasil (syariah).”
                  </p>
                  <h4 class="section-content">Devon Lane</h4>
                </div>
                <div class="testimoni-item">
                  <img
                    class="img-fluid rounded mb-3"
                    src="{{ url('img/testimoni-3.png')}}"
                    alt=""
                  />
                  <p class="section-content-medium">
                    “Merupakan koperasi yang bergerak pada bidang simpanan,
                    pembiayaan, dan investasi berdasarkan penerapan sistem bagi
                    hasil (syariah).”
                  </p>
                  <h4 class="section-content">Robert Fox</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimoni Section End -->

    <!-- Member of Section Start -->
    <section id="member-of">
      <div class="container py-5 mb-4">
        <div class="container text-center">
          <div class="row g-5">
            <div class="col-lg-12 animate__animated animate__fadeInUp">
              <span class="chip-title">Member of</span>
            </div>
            <div class="col-lg-6 col-md-6 animate__animated animate__fadeInUp">
              <img src="{{ url('img/logo-member-of-1.png')}}" alt="" height="80" />
            </div>
            <div class="col-lg-6 col-md-6 animate__animated animate__fadeInUp">
              <img src="{{ url('img/logo-member-of-2.png')}}" alt="" height="80" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Member of Section End -->

    <!-- Gabung Section Start -->
    <section id="gabung">
      <div class="container pt-5">
        <div class="container">
          <div class="row g-5">
            <div
              class="col-lg-7 col-md-7 text-center text-lg-start text-md-start my-auto animate__animated animate__fadeInUp"
            >
              <h1 class="section-title-large mb-4">
                Mari Bergabung Dengan Koperasi
                <span class="section-title-highlight">Kembang Syariah</span>
              </h1>
              <a class="button-primary" href="registrasi.html">
                Gabung Sekarang
              </a>
            </div>
            <div
              class="col-lg-5 col-md-5 text-center animate__animated animate__fadeInUp"
            >
              <img src="{{ url('img/ilus-gabung.svg')}}" class="ilus-gabung" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gabung Section End -->

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
              &copy; <a href="#">Koperasi Kembang Syariah</a>, All Right
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
