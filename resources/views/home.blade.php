<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $company_name }}</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure body covers full height */
            margin: 0;
        }

        .content {
            flex-grow: 1;
            padding-bottom: 50px; /* Adds space between content and footer */
        }

        /* Footer Styling */
        footer {
            background-color: #1c2331;
            color: white;
            padding: 50px 0; /* Increased padding */
            position: relative;
            bottom: 0;
            width: 100%; /* Full width */
        }

        footer .container {
            max-width: 100%; /* Full width for container */
        }

        footer p, footer a {
            color: white;
        }

        footer a:hover {
            color: #7c4dff;
        }

        .footer-bottom {
            background-color: rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 10px 0;
        }

        .social-icons a {
            color: white;
            margin-right: 15px;
        }

        /* Remove margin from the body */
        .hero {
            background-color: #f9d13e; /* Yellow background */
            padding: 100px 0;
            border-radius: 30px; /* Rounded corners */
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            color: white; /* White text color */
        }

        .hero p {
            font-size: 1.5rem;
            color: #333;
        }

        .btn-danger {
            font-size: 1.2rem;
            padding: 10px 20px;
            background-color: #d9534f;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .hero img {
            max-width: 100%;
            height: auto;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!-- Navbar Include -->
    @include('layout.app') <!-- Navbar will be included here -->

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row hero-content">
                <div class="col-md-6">
                    <h1 class="display-4">{{ $company_name }}</h1>
                    <p class="lead">{{ $tagline }}</p>
                    <a href="#" class="btn btn-danger btn-lg">{{ $cta_text }}</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('storage/app/public/orang.jpeg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenapa Harus MDB Indonesia?</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #2B2D42;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
        }

        .card-title {
            font-weight: bold;
            color: #2B2D42;
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .card-custom {
            border-radius: 15px;
            padding: 20px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .icon {
            font-size: 3rem;
            color: #FF5252;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        /* Bubble Effect */
        .bubble {
            position: absolute;
            top: -40px;
            left: 50%;
            width: 100px;
            height: 100px;
            background-color: rgba(255, 82, 82, 0.2);
            border-radius: 50%;
            z-index: 0;
            transform: translateX(-50%);
        }

        /* Additional small bubbles */
        .bubble-small {
            position: absolute;
            top: -30px;
            left: 20%;
            width: 50px;
            height: 50px;
            background-color: rgba(255, 82, 82, 0.3);
            border-radius: 50%;
            z-index: 0;
        }

        .bubble-small-2 {
            position: absolute;
            top: -25px;
            right: 20%;
            width: 60px;
            height: 60px;
            background-color: rgba(255, 82, 82, 0.3);
            border-radius: 50%;
            z-index: 0;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <h2 class="section-title">Kenapa Harus MDB Indonesia?</h2>
                <p class="section-subtitle">Beberapa alasan kenapa kamu harus pilih MDB Indonesia.</p>
            </div>
            <div class="col-md-8">
                <div class="card-container">
                    <!-- Materi Terupdate -->
                    <div class="card card-custom">
                        <div class="bubble"></div>
                        <div class="bubble-small"></div>
                        <div class="card-body text-center">
                            <i class="fas fa-book-open icon"></i>
                            <h5 class="card-title">Materi Terupdate</h5>
                            <p class="card-text">Materi-materi yang disajikan selalu terbaru sesuai perkembangan teknologi.</p>
                        </div>
                    </div>
                    <!-- Harga Terjangkau -->
                    <div class="card card-custom">
                        <div class="bubble"></div>
                        <div class="bubble-small-2"></div>
                        <div class="card-body text-center">
                            <i class="fas fa-tags icon"></i>
                            <h5 class="card-title">Harga Terjangkau</h5>
                            <p class="card-text">Harga yang kompetitif dan terjangkau untuk semua kalangan.</p>
                        </div>
                    </div>
                    <!-- Jadwal Fleksibel -->
                    <div class="card card-custom">
                        <div class="bubble"></div>
                        <div class="bubble-small"></div>
                        <div class="card-body text-center">
                            <i class="fas fa-clock icon"></i>
                            <h5 class="card-title">Jadwal Fleksibel</h5>
                            <p class="card-text">Jadwal belajar yang fleksibel sesuai dengan kebutuhanmu.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>



  
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome for Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .section-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 50px;
                margin-top: 50px;
                background-color: #f9f9f9;
                border-radius: 15px;
            }

            .section-text {
                max-width: 50%;
            }

            .section-text h2 {
                font-weight: bold;
                font-size: 2.5rem;
                color: #2B2D42;
            }

            .highlight {
                color: #FFCA28;
            }

            .section-text p {
                color: #666;
                margin-top: 20px;
                font-size: 1.1rem;
            }

            .btn-custom {
                background-color: #FF0000; /* Red color */
                color: white;
                font-weight: bold;
                padding: 10px 20px;
                border-radius: 5px;
                margin-top: 20px;
                text-align: center;
                text-decoration: none; /* Remove underline */
            }

            .icon-container {
                font-size: 6rem;
                color: #FF5252;
            }

            @media (max-width: 768px) {
                .section-container {
                    flex-direction: column;
                    text-align: center;
                }

                .section-text {
                    max-width: 100%;
                    margin-top: 20px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="section-container">
                <div class="icon-container">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <div class="section-text">
                    <h2>Belajar sesuai kurikulum kuliah dan <span class="highlight">standar industri global</span></h2>
                    <p>MDB Indonesia tersedia bagi kamu yang masih kuliah dan ingin menjadi seorang web developer.</p>
                    <a href="#" class="btn btn-custom">Hubungi Kami</a>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</div>



        <!-- Main Content Section -->
    <div class="content container my-5">
        <!-- Your content goes here -->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .mentor-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 0;
        }

        .mentor-text {
            max-width: 50%;
        }

        .mentor-text h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #001F54;
        }

        .mentor-text span {
            color: #F9C74F;
        }

        .mentor-text p {
            font-size: 1.1rem;
            color: #666;
        }

        .mentor-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .mentor-icons .icon {
            font-size: 4rem;
            color: #F9C74F;
            background-color: #F0F0F0;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .mentor-button {
            margin-top: 20px;
        }

        .mentor-button a {
            background-color: #FF5252;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .mentor-button a:hover {
            background-color: #E63946;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mentor-section">
            <div class="mentor-text">
                <h1>Dibimbing oleh mentor yang <span>Profesional</span></h1>
                <p>Sebagai platform edukasi, MDB Indonesia bekerja sama dengan mitra yang sudah expert di bidangnya.</p>
                <div class="mentor-button">
                <a href="#" class="btn btn-custom">Hubungi Kami</a>
                </div>
            </div>
            <div class="mentor-icons">
                <!-- Ikon 1 -->
                <div class="icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <!-- Ikon 2 -->
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <!-- Ikon 3 -->
                <div class="icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>

         </div>

         
    <!-- Main Content Section -->
<div class="content container my-5">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <style>
            .carousel-caption {
                position: static;
                text-align: left;
            }
            .carousel-item {
                background-color: #FEE135;
                border-radius: 20px;
                padding: 20px;
            }
            /* Setting consistent height for all slides */
            .carousel-item {
                min-height: 250px; /* Adjust height as needed */
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <div id="textCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <h2><i class="bi bi-flag"></i> SLIDE 1</h2>
                                <p>Selamat datang di website kami! Temukan berbagai informasi menarik dan berguna untuk Anda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h2><i class="bi bi-info-circle"></i> SLIDE 2</h2>
                                <p>Kami menawarkan berbagai fitur yang akan membantu Anda dalam pengelolaan data sekolah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h2><i class="bi bi-star"></i> SLIDE 3</h2>
                                <p>Bergabunglah dengan kami dan nikmati pengalaman belajar yang luar biasa!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation buttons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#textCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#textCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
</div>




            <!-- Main Content Section -->
    <div class="content container my-5">
        <!-- Your content goes here -->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .section-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .section-title h1 {
            font-size: 2.5rem;
            color: #000066;
            font-weight: bold;
        }
        .section-title p {
            color: #7f7f7f;
            font-size: 1rem;
        }
        .toggle-section {
            text-align: center;
            margin-top: 20px;
        }
        .form-check-label {
            font-size: 1.2rem;
            font-weight: bold;
            color: #000066;
        }
        .form-check-input {
            background-color: #000066;
            border-color: #000066;
        }
        .form-switch {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px; /* Atur jarak di antara elemen agar switch berada di tengah */
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Title and Description -->
    <div class="section-title">
        <h1>Beberapa kelas yang dapat kamu pilih</h1>
        <p>Kamu bebas memilih kelas yang ingin kamu ikuti</p>
    </div>

    <!-- Toggle Switch -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .pricing-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }

        .pricing-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #000066;
        }

        .pricing-desc {
            color: #7f7f7f;
            font-size: 1rem;
        }

        .pricing-price {
            font-size: 2rem;
            color: #ff0000;
            font-weight: bold;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .pricing-features li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .pricing-features li:before {
            content: "•";
            color: #FFD700; /* Warna bulatan (kuning) */
            font-weight: bold;
            display: inline-block;
            width: 20px;
            margin-right: 10px;
        }

        .btn-contact {
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
        }

        .btn-contact:hover {
            background-color: #cc0000;
        }

        .price-container {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center my-5">Daftar Harga Bulanan</h1>

    <div class="row price-container">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="pricing-card">
                <div class="pricing-title">Coolyeah</div>
                <div class="pricing-desc">PHP / Java / C / Android / Python / JavaScript</div>
                <div class="pricing-price">Rp.340.000/bulan</div>
                <ul class="pricing-features">
                    <li>Durasi 120 menit</li>
                    <li>Reguler Senin - Jumat</li>
                    <li>Reguler Pagi/Siang</li>
                    <li>Tersedia Non-Reguler</li>
                    <li>Free Konsultasi</li>
                    <li>Free Komunitas</li>
                    <li>Mentor Berpengalaman</li>
                    <li>Private Full Belajar</li>
                    <li>Instan dan Belajar</li>
                </ul>
                <button class="btn-contact">Hubungi Kami</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="pricing-card">
                <div class="pricing-title">Private</div>
                <div class="pricing-desc">PHP / Java / C / Android / Python / JavaScript</div>
                <div class="pricing-price">Rp.1.150.000/bulan</div>
                <ul class="pricing-features">
                    <li>Durasi 120 menit</li>
                    <li>Reguler Senin - Jumat</li>
                    <li>Reguler Pagi/Siang</li>
                    <li>Tersedia Non-Reguler</li>
                    <li>Free Konsultasi</li>
                    <li>Free Komunitas</li>
                    <li>Mentor Berpengalaman</li>
                    <li>Private Full Belajar</li>
                    <li>Instan dan Belajar</li>
                </ul>
                <button class="btn-contact">Hubungi Kami</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="pricing-card">
                <div class="pricing-title">Live Coding</div>
                <div class="pricing-desc">PHP / Java / C / Android / Python / JavaScript</div>
                <div class="pricing-price">Rp.1.550.000/bulan</div>
                <ul class="pricing-features">
                    <li>Durasi 120 menit</li>
                    <li>Reguler Senin - Jumat</li>
                    <li>Reguler Pagi/Siang</li>
                    <li>Tersedia Non-Reguler</li>
                    <li>Free Konsultasi</li>
                    <li>Free Komunitas</li>
                    <li>Mentor Berpengalaman</li>
                    <li>Private Full Belajar</li>
                    <li>Instan dan Belajar</li>
                </ul>
                <button class="btn-contact">Hubungi Kami</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<div class="container">
    <h1 class="text-center my-5">Daftar Harga Complete</h1>

    <div class="row price-container">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="pricing-card">
                <div class="pricing-title">Coolyeah</div>
                <div class="pricing-desc">PHP / Java / C / Android / Python / JavaScript</div>
                <div class="pricing-price">Rp.1.232.000/bulan</div>
                <ul class="pricing-features">
                    <li>Durasi 120 menit</li>
                    <li>Reguler Senin - Jumat</li>
                    <li>Reguler Pagi/Siang</li>
                    <li>Tersedia Non-Reguler</li>
                    <li>Free Konsultasi</li>
                    <li>Free Komunitas</li>
                    <li>Mentor Berpengalaman</li>
                    <li>Private Full Belajar</li>
                    <li>Instan dan Belajar</li>
                </ul>
                <button class="btn-contact">Hubungi Kami</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="pricing-card">
                <div class="pricing-title">Private</div>
                <div class="pricing-desc">PHP / Java / C / Android / Python / JavaScript</div>
                <div class="pricing-price">Rp.2.950.000/bulan</div>
                <ul class="pricing-features">
                    <li>Durasi 120 menit</li>
                    <li>Reguler Senin - Jumat</li>
                    <li>Reguler Pagi/Siang</li>
                    <li>Tersedia Non-Reguler</li>
                    <li>Free Konsultasi</li>
                    <li>Free Komunitas</li>
                    <li>Mentor Berpengalaman</li>
                    <li>Private Full Belajar</li>
                    <li>Instan dan Belajar</li>
                </ul>
                <button class="btn-contact">Hubungi Kami</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="pricing-card">
                <div class="pricing-title">Live Coding</div>
                <div class="pricing-desc">PHP / Java / C / Android / Python / JavaScript</div>
                <div class="pricing-price">Rp.2.950.000/bulan</div>
                <ul class="pricing-features">
                    <li>Durasi 120 menit</li>
                    <li>Reguler Senin - Jumat</li>
                    <li>Reguler Pagi/Siang</li>
                    <li>Tersedia Non-Reguler</li>
                    <li>Free Konsultasi</li>
                    <li>Free Komunitas</li>
                    <li>Mentor Berpengalaman</li>
                    <li>Private Full Belajar</li>
                    <li>Instan dan Belajar</li>
                </ul>
                <button class="btn-contact">Hubungi Kami</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
          
         </div>
        </form>
    </div>
</div>




  
        <!-- Main Content Section -->
        <div class="content container my-5">
        <!-- Your content goes here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunggu Apalagi?</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #fff8e1;
        }
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px;
            background-color: #fdd835;
            border-radius: 10px;
        }
        .hero-text {
            max-width: 50%;
        }
        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-text p {
            font-size: 1.2rem;
            margin-top: 10px;
            color: #333;
        }
        .btn-custom {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2rem;
        }
        .btn-custom:hover {
            background-color: #d32f2f;
        }
        .hero-image img {
            max-width: 400px;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="hero-section">
        <div class="hero-text">
            <h1>Tunggu apalagi?</h1>
            <p>Belajar dengan kurikulum terupdate dan di mentori oleh expert.</p>
            <a href="#" class="btn btn-custom">Hubungi Kami</a>
        </div>
        <div class="hero-image">
            <!-- Ikon orang bermain hp bisa dimasukkan di sini -->
            <img src="https://img.icons8.com/cute-clipart/400/phone.png" alt="Orang Main HP">
        </div>
    </div>
</div>

</body>
</html>

        </div>







    <!-- Footer Section -->
    <footer>
        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce;">
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <div class="social-icons">
                <a href="" class="me-4"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="me-4"><i class="fab fa-twitter"></i></a>
                <a href="" class="me-4"><i class="fab fa-google"></i></a>
                <a href="" class="me-4"><i class="fab fa-instagram"></i></a>
                <a href="" class="me-4"><i class="fab fa-linkedin"></i></a>
                <a href="" class="me-4"><i class="fab fa-github"></i></a>
            </div>
        </section>

        <div class="container text-center text-md-start mt-5">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Company name</h6>
                    <hr class="mb-4 mt-0" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Products</h6>
                    <hr class="mb-4 mt-0" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><a href="#!" class="text-white">MDBootstrap</a></p>
                    <p><a href="#!" class="text-white">MDWordPress</a></p>
                    <p><a href="#!" class="text-white">BrandFlow</a></p>
                    <p><a href="#!" class="text-white">Bootstrap Angular</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr class="mb-4 mt-0" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><a href="#!" class="text-white">Your Account</a></p>
                    <p><a href="#!" class="text-white">Become an Affiliate</a></p>
                    <p><a href="#!" class="text-white">Shipping Rates</a></p>
                    <p><a href="#!" class="text-white">Help</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2020 Copyright: <a href="https://mdbootstrap.com/" class="text-white">MDBootstrap.com</a></p>
        </div>
    </footer>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
