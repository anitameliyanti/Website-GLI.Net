<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internet Provider</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
  @include('includes.navbar')

  <!-- Navbar -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
      <a class="navbar-brand" href="#">
      <img src="{{ asset('image/logo.png') }}" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link active"{{ url('/') }}">Beranda</a></li>
              <li class="nav-item"><a class="nav-link" href="about.html">Tentang</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/layanan') }}">Layanan</a></li>
              <li class="nav-item"><a class="nav-link" href="Blog.html">Blog</a></li>
              <li class="nav-item"><a class="btn btn-primary" href="#">Berlangganan Sekarang</a></li>
          </ul>
      </div>
  </div>
</nav> -->

  <!-- Banner Section -->
  <div id="carouselExampleControls" class="carousel slide container mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="banner" style="background-image: url('{{asset('image/banner-a.jpg')}}');">
          <h2>Global Lintas Iramada Network</h2>
          <p>Internet CEPAT, Streaming BEBAS, TANPA Batasan</p>
          <p><span>Mulai dari</span> <span class="fs-3 text-warning">Rp
              199,000 / Bulan</span></p>
          <a href="https://wa.me/62895332360440?text=Hallo%20Admin%20Gli.Net" class="btn btn-primary">Daftar disini</a>
        </div>
      </div>

      <div class="carousel-item">
        <div class="banner" style="background-image: url('image/banner-b.jpg');">
          <h2>Helpdesk Support 24 Jam</h2>
          <p>Pelayanan Helpdesk 24/7 siap membantu anda</p>
          <a href="https://wa.me/62895332360440?text=Hallo%20Admin%20Gli.Net" class="btn btn-primary">Hubungi Kami</a>
        </div>
      </div>

      <!-- Tambahkan carousel-item tambahan di sini jika diperlukan -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Icon Section -->
  <div class="icon-section container mt-4">
    <div class="row flex-nowrap">
      <div class="col">
        <a href="{{ url('/layanan') }}">
          <i class="bi bi-wifi"></i>
          <p>Internet</p>
        </a>
      </div>
      <!-- <div class="col">
        <a href="/internet-tv">
          <i class="bi bi-tv"></i>
          <p>Internet + TV</p>
        </a>
      </div> -->
      <div class="col">
        <a href="/promo">
          <i class="bi bi-megaphone"></i>
          <p>Promo</p>
        </a>
      </div>
      <!-- <div class="col">
        <a href="/speed-test">
          <i class="bi bi-speedometer2"></i>
          <p>Speed Test</p>
        </a>
      </div> -->
      <div class="col">
        <a href="/pengaduan">
          <i class="bi bi-headset"></i>
          <p>Pengaduan 24/7</p>
        </a>
      </div>
      <!-- <div class="col">
        <a href="/karir">
          <i class="bi bi-briefcase"></i>
          <p>Karir</p>
        </a>
      </div> -->
    </div>
  </div>

  <!-- Header Section -->
  <section class="header-section">
    <div class="container">
      <div class="header-content">
        <div>
          <h1>GLI.Net</h1>
          <p>GLI.net menyediakan layanan internet dedicated & broadband dengan infrastruktur memadai dan berkualitas
            tinggi.</p>
        </div>
        <img src="image/globe.png" alt="Globe" class="globe-image">
      </div>
    </div>
  </section>

  <!-- Service Section -->
  <section class="service-section">
    <h2>Produk Kami</h2>
    <div class="container">
      <div class="row gy-4">
      <div class="col-md-3">
          <div class="service-card">
            <img src="image/feelectric.png" class="service-card-img" alt="Service 2">
            <h2>Internet</h2>
            <p>Kami menghadirkan layanan internet berkecepatan tinggi tanpa batasan FUP, tersedia dalam berbagai opsi: Broadband Wireless, Dedicated Wireless, dan Fiber Optic. Nikmati koneksi stabil dan cepat yang mendukung kebutuhan digital Anda!</p>
            <a href="{{ url('/layanan') }}" class="btn">Selengkapnya</a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-card">
            <img src="image/feelectric.png" class="service-card-img" alt="Service 2">
            <h2>Cctv</h2>
            <p>Kami menyediakan layanan instalasi CCTV berkualitas tinggi dengan berbagai pilihan sistem canggih. Dapatkan pengawasan real-time yang andal untuk keamanan dan kenyamanan Anda!</p>
            <a href="" class="btn">Selengkapnya</a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-card">
            <img src="image/layanan.jpg" class="service-card-img" alt="Service 1">
            <h2>Tower Building</h2>
            <p>Kami menyediakan layanan pembuatan tower BTS, Menara Api, Triangle, Fourangle, dan lainnya, dikerjakan oleh tim profesional dengan kualitas terbaik untuk memenuhi kebutuhan Anda.</p>
            <a href="#" class="btn">Selengkapnya</a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-card">
            <img src="image/layanan.jpg" class="service-card-img" alt="Service 3">
            <h2>Network Building</h2>
            <p>Infrastruktur jaringan yang andal mendukung produktivitas perusahaan Anda. Kami siap memberikan layanan konsultasi dan eksekusi manage service terbaik untuk kebutuhan bisnis Anda.</p>
            <a href="#" class="btn">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container">
    <!-- Steps Section -->
    <div class="steps-section text-center">
      <h2 class="mb-4">Cara Berlangganan di GLI.NET</h2>
      <p>Tiga langkah mudah untuk menggunakan layanan dari kami</p>
      <div class="row text-center mt-4">
        <div class="col-md-4 mb-4">
          <div class="step-icon">
            <i class="bi bi-person-check-fill"></i>
          </div>
          <h5>1. Registrasi</h5>
          <p>
            Cek area lokasi pemasangan, pilih paket, dan pilih jadwal
            pemasangan.
          </p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="step-icon">
            <i class="bi bi-wrench"></i>
          </div>
          <h5>2. Instalasi</h5>
          <p>Lacak proses instalasi kemudian nikmati layanan GLI.Net!</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="step-icon">
            <i class="bi bi-credit-card"></i>
          </div>
          <h5>3. Bayar</h5>
          <p>Bayar tagihan dan nikmati kecepatan layanan GLI.Net.</p>
        </div>
      </div>
    </div>

    <!-- Partner Section -->
    <div class="text-center my-5">
      <h3>OUR PARTNER</h3>
      <div class="d-flex flex-wrap justify-content-center align-items-center mt-4">
        <img src="image/ActonInstitute.jpg" alt="Partner 1" class="partner-logo" />
        <img src="image/actxplorer.png" alt="Partner 2" class="partner-logo" />
        <img src="image/belmont.png" alt="Partner 3" class="partner-logo" />
        <img src="image/ClarionNewlifeCapital.jpg" alt="Partner 4" class="partner-logo" />
        <img src="image/DamsonCapital-1.jpeg" alt="Partner 5" class="partner-logo" />
        <img src="image/ffi.png" alt="Partner 6" class="partner-logo" />
      </div>
    </div>

    <!-- Testimonial Section -->
    <div class="text-center my-5">
      <h3>TESTIMONIAL</h3>
      <p>Apa kata mereka setelah menggunakan GLI.Net?</p>

      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <!-- First Slide -->
          <div class="carousel-item active">
            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="testimonial-card">
                  <img src="image/9ca3fa97-b341-4433-9de1-0f4f29c7ba08.jpg" class="testimonial-img"
                    alt="Ihsan Setiyadi">
                  <h5>Ihsan Setiyadi</h5>
                  <p>
                    Kami menyediakan layanan internet berkualitas tinggi yang
                    terdiri dari beberapa paket sesuai dengan kebutuhan bisnis Anda.
                  </p>
                </div>
              </div>
              <div class="col-md-5">
                <div class="testimonial-card">
                  <img src="image/Iman Gadzhi.jpg" class="testimonial-img" alt="Ridho Fitra Palasa">
                  <h5>Ridho Fitra Palasa</h5>
                  <p>
                    Kami memberikan layanan infrastruktur IT terlengkap dengan
                    dukungan tenaga ahli profesional untuk membantu jalannya bisnis
                    Anda.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Second Slide -->
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="testimonial-card">
                  <img src="image/9ca3fa97-b341-4433-9de1-0f4f29c7ba08.jpg" class="testimonial-img" alt="Joko Pratama">
                  <h5>Joko Pratama</h5>
                  <p>
                    Layanan kami dapat diandalkan dengan teknologi terkini dan
                    tim support yang siap membantu 24/7.
                  </p>
                </div>
              </div>
              <div class="col-md-5">
                <div class="testimonial-card">
                  <img src="image/9ca3fa97-b341-4433-9de1-0f4f29c7ba08.jpg" class="testimonial-img"
                    alt="Andri Setiawan">
                  <h5>Andri Setiawan</h5>
                  <p>
                    Kami berkomitmen untuk memberikan solusi terbaik sesuai
                    dengan kebutuhan digital Anda dengan harga kompetitif.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Third Slide -->
          <div class="carousel-item">
            <div class="row justify-content-center">
              <div class="col-md-5">
                <div class="testimonial-card">
                  <img src="image/26 Tips For A Great Professional LinkedIn Headshot.jpg" class="testimonial-img"
                    alt="Sarah Nugraha">
                  <h5>Sarah Nugraha</h5>
                  <p>
                    Teknologi kami memungkinkan perusahaan Anda untuk berkembang
                    lebih cepat dengan akses internet yang stabil dan cepat.
                  </p>
                </div>
              </div>
              <div class="col-md-5">
                <div class="testimonial-card">
                  <img src="image/26 Tips For A Great Professional LinkedIn Headshot.jpg" class="testimonial-img"
                    alt="Rina Suryani">
                  <h5>Rina Suryani</h5>
                  <p>
                    Kami membantu meningkatkan produktivitas bisnis Anda dengan
                    jaringan internet yang handal dan layanan pelanggan yang
                    responsif.
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  @include('includes.footer')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>