<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Album STAIMA AL-Hikam Malang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">



    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- =======================================================
  * Template Name: EstateAgency
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Search Album</h3>
        </div>
        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <div class="box-collapse-wrap form">
            <form class="form-a" action="{{ route('search4') }}" method="GET">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label class="pb-2" for="Type">Keyword</label>
                            <input type="text" name="query4" class="form-control form-control-lg form-control-a"
                                placeholder="Keyword" value="{{ request()->query('query4') }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- End Property Search Section -->

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{ route('index') }}">Album <span class="color-b">STAIMA</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('Admin.album.album') }}">Album</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('Admin.wisudawan.wisudawan') }}">Wisudawan Terbaik</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('Admin.video.video') }}">Video</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}">Login</a>
                    </li> --}}
                    @auth
                    <!-- Jika pengguna sudah login -->
                    <li class="scroll-to-section">
                        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary">Logout</button>
                        </form>
                    </li>
                @else
                    <!-- Jika pengguna belum login -->
                    <li class="scroll-to-section"><a class="nav-link " href="{{ route('login') }}"
                            class="btn btn-primary">Login</a></li>
                @endauth

                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
                data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </nav><!-- End Header/Navbar -->

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">

            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-1.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Album Ke -
                                            <br> 17
                                        </p>
                                        <h1 class="intro-title mb-6 ">
                                            <span class="color-b">Album </span> STAIMA AL-HIKAM
                                            <br> MALANG
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">View</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-2.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Album Ke -
                                            <br> 18
                                        </p>
                                        <h1 class="intro-title mb-6 ">
                                            <span class="color-b">Album </span> STAIMA AL-HIKAM
                                            <br> MALANG
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">View</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image"
                style="background-image: url(assets/img/slide-3.jpg)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="intro-body">
                                        <p class="intro-title-top">Album Ke -
                                            <br> 19
                                        </p>
                                        <h1 class="intro-title mb-6 ">
                                            <span class="color-b">Album </span> STAIMA AL-HIKAM
                                            <br> MALANG
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">View</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Album</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ route('Admin.album.album') }}">All Album
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($albumTerbaru as $album)
                            <div class="carousel-item-b swiper-slide">
                                <div class="card-box-a card-shadow">
                                    <div class="img-box-a">
                                        <img src="{{ asset($album->cover) }}" alt=""
                                            class="img-a img-fluid">
                                    </div>
                                    <div class="card-overlay">
                                        <div class="card-overlay-a-content">
                                            <div class="card-header-a">
                                                <h2 class="card-title-a">
                                                    <a href="property-single.html">{{ $album->judul }}</a>
                                                </h2>
                                            </div>
                                            <div class="card-body-a">
                                                <div class="price-box d-flex">
                                                    <span class="price-a">{{ $album->tahun }}</span>
                                                </div>
                                                <a href="{{ route('album.show', $album->id) }}" class="link-a">Click
                                                    here to view
                                                    <span class="bi bi-chevron-right"></span>
                                                </a>
                                            </div>
                                            <div class="card-footer-a">
                                                <ul class="card-info d-flex justify-content-around">
                                                    <li>
                                                        <h4 class="card-info-title">Jumlah Lulusan</h4>
                                                        <span>{{ $album->total }}</span>
                                                    </li>
                                                    <li>
                                                        <h4 class="card-info-title">PAI-S1</h4>
                                                        <span>{{ $album->s1_pai }}</span>
                                                    </li>
                                                    <li>
                                                        <h4 class="card-info-title">PGMI-S1</h4>
                                                        <span>{{ $album->s1_pgmi }}</span>
                                                    </li>
                                                    <li>
                                                        <h4 class="card-info-title">MPI-S1</h4>
                                                        <span>{{ $album->s1_mpi }}</span>
                                                    </li>
                                                    <li>
                                                        <h4 class="card-info-title">PAI-S2</h4>
                                                        <span>{{ $album->s2_pai }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End carousel item -->
                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>
            </div>
        </section><!-- End Latest Properties Section -->

        <!-- ======= Agents Section ======= -->
        <section class="section-agents section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Best Graduates</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ route('Admin.wisudawan.wisudawan') }}">All Best Graduates
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($wisudawanTerbaru as $wisudawan)
                        <div class="col-md-3">
                            <div class="card-box-d">
                                <div class="card-img-d">
                                    <img src="{{ asset($wisudawan->foto) }}" alt="" class="img-d img-fluid">
                                </div>
                                <div class="card-overlay card-overlay-hover">
                                    <div class="card-header-d">
                                        <div class="card-title-d align-self-center">
                                            <h3 class="title-d">
                                                <a href="#" class="link-two">{{ $wisudawan->nama }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="card-body-d">
                                        <p class="content-d color-a">
                                        <p class="content-d color-text-a">
                                            {{ Str::of($wisudawan->jurusan)->replace('_', ' ')->title() }}
                                        </p>
                                        </p>
                                        <div class="info-agents color-text-a">
                                            <p>
                                                <strong>Judul Skripsi / Tesis: </strong> {{ $wisudawan->judul }}
                                            </p>
                                            <p>
                                                <strong>IPK: </strong> {{ $wisudawan->ipk }}
                                            </p>
                                        </div>
                                        <div class="card-footer-d">
                                            <div class="socials-footer d-flex justify-content-center">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" class="link-one"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section><!-- End Agents Section -->

        <!-- ======= Testimonials Section ======= -->
        <section class="section-testimonials section-t8 nav-arrow-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Video Graduates</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="testimonial-carousel" class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($videoTerbaru as $video)
                            <div class="carousel-item-a swiper-slide">
                                <div class="testimonials-box">

                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-img">
                                                <iframe width="560" height="315" src="{{ $video->link }}"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="testimonial-ico">
                                                <i class="bi bi-chat-quote-fill"></i>
                                            </div>
                                            <div class="testimonials-content">
                                                <p class="testimonial-text">
                                                    {{ $video->tanggal }}
                                                </p>
                                            </div>
                                            <div class="testimonial-author-box">
                                                <h5 class="testimonial-author">
                                                    <a href="{{ $video->link }}"
                                                        target="_blank">{{ $video->judul }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End carousel item -->
                        @endforeach
                    </div>
                </div>
                <div class="testimonial-carousel-pagination carousel-pagination"></div>
            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">About</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Video</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Album</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/staimaalhikam?mibextid=zLoPMf">
                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://x.com/staima_alhikam?t=gzQUE1KUkkYDiwhKFR1f4Q&s=08">
                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/staima_alhikam/">
                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/@STAIMahadAlyAlHikamMalang">
                                    <i class="bi bi-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">Staima Al-Hikam Malang</span> All Rights Reserved.
                        </p>
                    </div>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
                        Designed by <a href="https://bootstrapmade.com/">me</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
