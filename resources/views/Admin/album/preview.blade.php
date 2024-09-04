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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ipages.min.css') }}">

    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/pdf.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.ipages.min.js') }}"></script>


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
            <form class="form-a">
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="form-group">
                            <label class="pb-2" for="Type">Keyword</label>
                            <input type="text" class="form-control form-control-lg form-control-a"
                                placeholder="Keyword">
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="Type">Type</label>
                            <select class="form-control form-select form-control-a" id="Type">
                                <option>All Type</option>
                                <option>For Rent</option>
                                <option>For Sale</option>
                                <option>Open House</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="city">City</label>
                            <select class="form-control form-select form-control-a" id="city">
                                <option>All City</option>
                                <option>Alabama</option>
                                <option>Arizona</option>
                                <option>California</option>
                                <option>Colorado</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="bedrooms">Bedrooms</label>
                            <select class="form-control form-select form-control-a" id="bedrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="garages">Garages</label>
                            <select class="form-control form-select form-control-a" id="garages">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="bathrooms">Bathrooms</label>
                            <select class="form-control form-select form-control-a" id="bathrooms">
                                <option>Any</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="price">Min Price</label>
                            <select class="form-control form-select form-control-a" id="price">
                                <option>Unlimite</option>
                                <option>$50,000</option>
                                <option>$100,000</option>
                                <option>$150,000</option>
                                <option>$200,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-b">Search Album</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- End Property Search Section -->>

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
                        <a class="nav-link " href="{{ route('index') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active " href="{{ route('Admin.album.album') }}">Album</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('Admin.wisudawan.wisudawan') }}">Wisudawan Terbaik</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('Admin.video.video') }}">Video</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse"
                data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </nav><!-- End Header/Navbar -->

    <main id="main">

        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <h1 class="title-single">{{ $album->judul }}</h1>
                            <span class="color-text-a">Tahun {{ $album->tahun }}<span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('Admin.album.album') }}">Album</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Judul Album
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

        <!-- ======= Property Single ======= -->
        <section class="property-single nav-arrow-b">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div id="property-single-carousel" class="swiper">
                            <div class="swiper-wrapper">
                                <div class="carousel-item-b swiper-slide">
                                    <div id="flipbook" data-pdf-disable-range-requests="false">
                                        {{-- @php
                                            $albumFile = ltrim($album->file, 'assets/album/');
                                            $albumPath = asset('assets/album/' . $albumFile);
                                        @endphp --}}
                                        {{-- <iframe src="{{ $albumPath }}" width="100%" height="650px"></iframe> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-single-carousel-pagination carousel-pagination"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="row justify-content-center">
                            <div class="col-md-7 col-lg-7 section-md-t3">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Wisuda Description</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-description">
                                    <p class="description color-text-a">
                                        {{ $album->deskripsi }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill"
                                    href="#pills-video" role="tab" aria-controls="pills-video"
                                    aria-selected="true">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans"
                                    role="tab" aria-controls="pills-plans" aria-selected="false">Undangan
                                    Wisuda</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                                aria-labelledby="pills-video-tab">
                                <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/RycTW2hJ87E?si=ltJqvYGCe0iIVDcR"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane fade" id="pills-plans" role="tabpanel"
                                aria-labelledby="pills-plans-tab">
                                @php
                                    $undanganFile = ltrim($album->undangan, 'assets/undangan/');
                                    $undanganPath = asset('assets/undangan/' . $undanganFile);
                                @endphp
                                <iframe src="{{ $undanganPath }}" width="100%" height="650px"></iframe>
                            </div>
                            <div class="tab-pane fade" id="pills-map" role="tabpanel"
                                aria-labelledby="pills-map-tab">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                                    width="100%" height="460" frameborder="0" style="border:0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section><!-- End Property Single-->

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
                            <span class="color-a">EstateAgency</span> All Rights Reserved.
                        </p>
                    </div>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    {{-- <script type="text/css" src="{{ asset('assets/js/ipages.min.js') }}s" rel="stylesheet" media="all"></script> --}}

    <script>
        $(document).ready(function() {
            var options = {
                responsive: true,
                autoFit: false,

                containerHeight: '100%',
                padding: {
                    top: 50,
                    left: 50,
                    right: 50,
                    bottom: 50
                },

                pdfUrl: '{{ asset($album->file) }}',
                pdfAutoCreatePages: true,
                pdfBookSizeFromDocument: true,

                zoom: 1,
                zoomMin: 0.5,

                toolbarControls: [{
                        type: 'share',
                        active: false
                    },
                    {
                        type: 'outline',
                        active: true
                    },
                    {
                        type: 'thumbnails',
                        active: true
                    },
                    {
                        type: 'sound',
                        active: true,
                        optional: false
                    },
                    {
                        type: 'gotofirst',
                        active: true
                    },
                    {
                        type: 'prev',
                        active: true
                    },
                    {
                        type: 'pagenumber',
                        active: true
                    },
                    {
                        type: 'next',
                        active: true
                    },
                    {
                        type: 'gotolast',
                        active: true
                    },
                    {
                        type: 'zoom-in',
                        active: false
                    },
                    {
                        type: 'zoom-out',
                        active: false
                    },
                    {
                        type: 'zoom-default',
                        active: true,
                        optional: false
                    },
                    {
                        type: 'optional',
                        active: false
                    },
                    {
                        type: 'download',
                        active: true,
                        optional: false
                    },
                    {
                        type: 'fullscreen',
                        active: true,
                        optional: false
                    },
                ],

                bookmarks: [{
                        text: 'Profile List',
                        link: '',
                        folded: false,
                        bookmarks: [{
                                text: 'Avirtum',
                                link: 'http://avirtum.com',
                                target: 'blank'
                            },
                            {
                                text: 'Twitter',
                                link: 'https://twitter.com/avirtumcom',
                                target: 'blank'
                            },
                            {
                                text: 'YouTube',
                                link: 'https://www.youtube.com/channel/UCvENmD-ml85Lie9KFjbusnw',
                                target: 'blank'
                            },
                            {
                                text: 'CodeCanyon',
                                link: 'https://codecanyon.net/user/avirtum/portfolio?ref=avirtum',
                                target: 'blank'
                            }, // target: self, blank, page
                        ]
                    },
                    {
                        text: 'The page 1 from begin',
                        link: '1'
                    },
                    {
                        text: 'The page 2 from begin',
                        link: '2'
                    },
                    {
                        text: 'The page 3 from begin',
                        link: '2'
                    },
                    {
                        text: 'The page 1 from end',
                        link: '-1'
                    },
                    {
                        text: 'The page 2 from end',
                        link: '-2'
                    },
                    {
                        text: 'The page 3 from end',
                        link: '-3'
                    }
                ],
            };

            $('#flipbook').ipages(options);

            // Events
            $('#flipbook').on('ipages:ready', function(e, plugin) {
                console.log('event:ready');
            });

            $('#flipbook').on('ipages:showpage', function(e, plugin, page) {
                console.log('event:showpage [' + page + ']');
            });

            $('#flipbook').on('ipages:hidepage', function(e, plugin, page) {
                console.log('event:hidepage [' + page + ']');
            });
        });
    </script>

    {{-- <script>
        $(document).ready(function() {
           var options = {
              responsive:true,
              autoFit:true,
         
              padding:10,
         
              pdfUrl: '{{ asset($album->file) }}';
              pdfAutoCreatePages: true,
              pdfBookSizeFromDocument: true,
         
              zoom:1.5,
         
              bookmarks: [
                 {text:'Profile List', link:'', folded: false, bookmarks:[
                    {text:'Avirtum', link:'http://avirtum.com', target:'blank'},
                    {text:'Twitter', link:'https://twitter.com/avirtumcom', target:'blank'},
                 ]},
                 {text:'The first page', link:'1'},
                 {text:'The last page', link:'-1'}
              ],
           };
         
           $('#flipbook').ipages(options);
        });
        </script> --}}

    {{-- <script>
        $(document).ready(function() {
            const pdfUrl = "{{ asset($album->file) }}";
            const flipbook = document.getElementById('flipbook');

            pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
                let promises = [];

                for (let i = 1; i <= pdf.numPages; i++) {
                    promises.push(pdf.getPage(i).then(function(page) {
                        let canvas = document.createElement('canvas');
                        canvas.classList.add('page');
                        flipbook.appendChild(canvas);

                        let viewport = page.getViewport({
                            scale: 1
                        });
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        let context = canvas.getContext('2d');
                        let renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };
                        return page.render(renderContext).promise;
                    }));
                }

                // Tunggu semua halaman selesai dirender
                Promise.all(promises).then(function() {
                    $(flipbook).turn({
                        width: 400, // atau viewport.width jika ingin mengikuti ukuran halaman
                        height: 300, // atau viewport.height jika ingin mengikuti ukuran halaman
                        autoCenter: true
                    });
                });
            });
        });
    </script> --}}

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
