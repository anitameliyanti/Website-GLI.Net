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
<style>
    /*Layanan Section */
    .layanan-section {
        padding: 0.1rem 0;
    }

    .layanan-section .text-content {
        padding-left: 0.4rem;
        margin-left: -90px;
    }

    .layanan-section img {
        border-bottom-right-radius: 50px;
        width: 500px;
        height: 400px;
        object-fit: cover;
        margin-left: -90px;
    }

    h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #1976C2;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .layanan-section p {
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
        text-align: justify;
    }

    @media (max-width: 992px) {
        .layanan-section .text-content {
            padding-left: 0;
            margin-left: 0;
            text-align: center;
        }

        .layanan-section img {
            width: 100%;
            height: auto;
            margin-left: 0;
        }

        h2 {
            margin-top: 0.4rem;
            font-size: 1.5rem;
        }

        .layanan-section p {
            font-size: 0.9rem;
        }

        .layanan-section {
            padding: 1rem;
        }
    }

    /* alasan section */
    .icon-why {
        background: linear-gradient(to right, #007bff, #00b4ff);
        border-radius: 20px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        padding: 20px 10px;
        width: 45%;
        text-align: center;
        display: block;
        margin-left: auto;
        font-size: 25px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-top: -40px;
    }

    @media (max-width: 768px) {
        .icon-why {
            width: 80%;
            font-size: 20px;
            padding: 15px 10px;
            margin-left: 15px;
        }
    }

    @media (max-width: 480px) {
        .icon-why {
            width: 90%;
            font-size: 18px;
            padding: 10px 8px;
        }
    }

    /* Icon-alasan Section */
    .icon i {
        color: #3466AF;
        font-size: 2.5rem;
    }

    .icon h5 {
        color: #3466AF;
        font-weight: bold;
        font-size: 1rem;
        margin-top: 0.5rem;
    }

    /* Harga Cards */
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        height: 100%;
    }

    .card-title {
        padding: 10px;
        font-weight: bold;
        color: #fff;
        border-radius: 8px 8px 0 0;
        text-align: center;
    }

    .INTERMEDIATE {
        background-color: #5DADE2;
    }

    .BISNIS {
        background-color: #3498DB;
    }

    .PRO {
        background-color: #1ABC9C;
    }

    .PLATINUM {
        background-color: #F39C12;
    }

    .card-price {
        color: #3466AF;
        font-size: 1.5rem;
        font-weight: bold;
    }

    .min-contract {
        color: #f39c12;
        font-weight: bold;
    }

    /* List Styling */
    .card-body ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .card-body ul li {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        font-size: 0.9rem;
        border-bottom: 1px solid #ddd;
    }

    .card-body ul li:last-child {
        border-bottom: none;
    }

    .card-body ul li i {
        color: #28a745;
    }

    .card-body ul li .text-danger i {
        color: #dc3545;
    }

    .btn-custom {
    background-color: #000;
    color: white;
    }

    @media (max-width: 768px) {
        .header-section {
            flex-direction: column;
            text-align: center;
        }

        .header-section img {
            max-width: 100%;
        }
    }
</style>

<body>
    @include('includes.navbar')

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="image/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="Homepage.html">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">Tentang</a></li>
                <li class="nav-item"><a class="nav-link active" href="layanan.html">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="Blog.html">Blog</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="#">Berlangganan Sekarang</a></li>
            </ul>
        </div>
    </div>
</nav> -->

    <!-- Layanan Section -->
    <div class="container layanan-section">
        <div class="row align-items-center">
            <!-- Image on the left side -->
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start">
                <img src="image/header-layanan.jpg" alt="Keyboard Image" class="img-fluid">
            </div>
            <!-- Text on the right side -->
            <div class="col-lg-6 text-content">
                <h2>Layanan GLI.Net</h2>
                <p>
                    Kami menyediakan segala kebutuhan IT Anda mulai dari merancang hingga membangun
                    infrastruktur jaringan internet, mengelola serta mengoptimalkan lingkungan
                    infrastruktur Anda hingga membangun perangkat lunak yang saling terintegrasi satu
                    sama lain.
                </p>
            </div>
        </div>
    </div>

    <!-- Alasan Section -->
    <section class="container text-center my-5">
        <div class="icon-why mb-4">Mengapa harus di GLI.NET?</div>
        <div class="row icon">
            <div class="col-md-4">
                <i class="bi bi-globe"></i>
                <h5>Jaringan Cepat</h5>
            </div>
            <div class="col-md-4">
                <i class="bi bi-clock"></i>
                <h5>Customer Support 24/7</h5>
            </div>
            <div class="col-md-4">
                <i class="bi bi-envelope"></i>
                <h5>Profesional dan Berpengalaman</h5>
            </div>
        </div>
    </section>

    <!-- Harga Section -->
    <section class="container">
        <div class="row">
            <!-- INTERMEDIATE Plan -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-title INTERMEDIATE">BASIC</div>
                    <div class="card-body text-center">
                        <p class="card-price">Rp 199.000<span>/Bulan</span></p>
                        <ul>
                            <li>Speed UpTo <span>10 Mbps</span></li>
                            <li>Unlimited Kuota <i class="bi bi-check-circle text-success"></i></li>
                            <li>100 % Fiber Optic <i class="bi bi-check-circle text-success"></i></li>
                            <li>24/7 Helpdesk Call <i class="bi bi-check-circle text-success"></i></li>
                            <li>Maks Perangkat <span>7</span></li>
                            <!-- <li>Max Data Transfer <span>Unlimited</span></li>
                            <li>FTP Account <span>4</span></li>
                            <li>MySQL DB <span>4</span></li>
                            <li>Mail Account <span>50</span></li>
                            <li>Sub Domain <span>20</span></li>
                            <li>Jasa Upload <span class="text-danger"><i class="bi bi-x-circle"></i></span></li> -->
                            <li>Upgrade <span>Free</span></li>
                        </ul>
                        <!-- <p class="min-contract">Min. Kontrak: 6 Bln</p> -->
                        <a href="https://wa.me/62895332360440?text=Hallo%20Admin%20Gli.Net,%20Saya%20ingin%20pesan%20paket%20BASIC,%20mohon%20follow%20up%20untuk%20langkah%20selanjutnya%20ya,%20Terimakasih!" class="btn btn-custom btn-lg mt-3">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- BISNIS Plan -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-title BISNIS">HOME STANDARD</div>
                    <div class="card-body text-center">
                        <p class="card-price">Rp 299.000<span>/Bulan</span></p>
                        <ul>
                            <li>Speed UpTo <span>20 Mbps</span></li>
                            <li>Unlimited Kuota <i class="bi bi-check-circle text-success"></i></li>
                            <li>100 % Fiber Optic <i class="bi bi-check-circle text-success"></i></li>
                            <li>24/7 Helpdesk Call <i class="bi bi-check-circle text-success"></i></li>
                            <li>Maks Perangkat <span>15</span></li>
                            <!-- <li>Max Data Transfer <span>Unlimited</span></li>
                            <li>MySQL DB <span>10</span></li>
                            <li>Mail Account <span>100</span></li>
                            <li>Sub Domain <span>40</span></li> -->
                            <li>Upgrade <span>Free</span></li>
                        </ul>
                        <!-- <p class="min-contract">Min. Kontrak: 3 Bln</p> -->
                        <a href="https://wa.me/62895332360440?text=Hallo%20Admin%20Gli.Net,%20Saya%20ingin%20pesan%20paket%20HOME%20STANDARD,%20mohon%20follow%20up%20untuk%20langkah%20selanjutnya%20ya,%20Terimakasih!" class="btn btn-custom btn-lg mt-3">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- PRO Plan -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-title PRO">PRO</div>
                    <div class="card-body text-center">
                        <p class="card-price">Rp 449.000<span>/Bulan</span></p>
                        <ul>
                            <li>Speed UpTo <span>50 Mbps</span></li>
                            <li>Unlimited Kuota <i class="bi bi-check-circle text-success"></i></li>
                            <li>100 % Fiber Optic <i class="bi bi-check-circle text-success"></i></li>
                            <li>24/7 Helpdesk Call <i class="bi bi-check-circle text-success"></i></li>
                            <li>Maks Perangkat <span>35</span></li>
                            <!-- <li>Max Data Transfer <span>Unlimited</span></li>
                            <li>FTP Account <span>20</span></li>
                            <li>MySQL DB <span>20</span></li>
                            <li>Mail Account <span>Unlimited</span></li>
                            <li>Sub Domain <span>Unlimited</span></li> -->
                            <li>Upgrade <span>Free</span></li>
                        </ul>
                        <!-- <p class="min-contract">Min. Kontrak: 3 Bln</p> -->
                        <a href="https://wa.me/62895332360440?text=Hallo%20Admin%20Gli.Net,%20Saya%20ingin%20pesan%20paket%20PRO,%20mohon%20follow%20up%20untuk%20langkah%20selanjutnya%20ya,%20Terimakasih!" class="btn btn-custom btn-lg mt-3">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- PLATINUM Plan -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                    <div class="card-title PLATINUM">PLATINUM</div>
                    <div class="card-body text-center">
                        <p class="card-price">Rp 549.000<span>/Bulan</span></p>
                        <ul>
                            <li>Speed UpTo <span>85 Mbps</span></li>
                            <li>Unlimited Kuota <i class="bi bi-check-circle text-success"></i></li>
                            <li>100 % Fiber Optic <i class="bi bi-check-circle text-success"></i></li>
                            <li>24/7 Helpdesk Call <i class="bi bi-check-circle text-success"></i></li>
                            <li>Maks Perangkat <span>50</span></li>
                            <!-- <li>Max Data Transfer <span>Unlimited</span></li>
                            <li>FTP Account <span>30</span></li>
                            <li>MySQL DB <span>30</span></li>
                            <li>Mail Account <span>Unlimited</span></li>
                            <li>Sub Domain <span>Unlimited</span></li> -->
                            <li>Upgrade <span>Free</span></li>
                            <a href="https://wa.me/62895332360440?text=Hallo%20Admin%20Gli.Net,%20Saya%20ingin%20pesan%20paket%20PLATINUM,%20mohon%20follow%20up%20untuk%20langkah%20selanjutnya%20ya,%20Terimakasih!" class="btn btn-custom btn-lg mt-3">Pesan Sekarang</a>
                        </ul>
                        <!-- <p class="min-contract">Min. Kontrak: 1 Bln</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('includes.footer')

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>