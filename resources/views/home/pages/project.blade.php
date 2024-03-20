<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Huda Shakir</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/home/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('assets/home/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/home/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/home/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/home/css/project-details.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <x-embed-styles />
    <!-- =======================================================
  * Template Name: MyResume
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">
        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li>
                    <a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li>
                    <a href="#skills" class="nav-link scrollto"><i class="bx bx-code-alt"></i> <span>Skills</span></a>
                </li>
                <li>
                    <a href="#resume" class="nav-link scrollto"><i class="bx bx-diamond"></i>
                        <span>Milestones</span></a>
                </li>
                <li>
                    <a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a>
                </li>
                <!-- <li>
            <a href="#services" class="nav-link scrollto"
              ><i class="bx bx-server"></i> <span>Services</span></a
            >
          </li> -->
                <li>
                    <a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav>
        <!-- .nav-menu -->
    </header>
    <!-- End Header -->
    <div class="page-content">
        <h1 class="title" style="color: #594488">{{ $project->name }}</h1>
        <div class="demo-container">
            <div class="details">
                <div class="description">
                    <?php echo $project->description ?></div>
                <h2 class="h3 my-3">Technologies used</h2>
                <div class="tag">
                    @foreach ($project->technologies as $item)
                        <div class="div-card">
                            <div class="div-card-item" style="background-image: url('{{ asset($item->logo) }}')"></div>
                            <span>{{ $item->name }}</span>
                        </div>
                    @endforeach
                </div>
                @if ($project->web_link)
                    <a class="button" href="{{ $project->web_link }}" target="_blank" class="card-btn"
                        style="height: 2.35rem; color: #fff; background-color: #594488; padding: .375rem .75rem; border-radius: .25rem;"><i
                            class="fa-solid fa-globe"></i>View Demo</a>
                @endif
                @if ($project->app_link)
                    <a class="button" href="{{ $project->app_link }}" target="_blank" class="card-btn"
                        style="height: 2.35rem; color: #fff; background-color: #594488; padding: .375rem .75rem; border-radius: .25rem;"><i
                            class="fab fa-google-play"></i>Download App</a>
                @endif
            </div>
            @if ($project->demo_link)
                <div class="video"><x-embed url="{{ $project->demo_link }}" /></div>
            @endif
        </div>
        {{-- <img src="{{ asset('assets/home/img/huda.jpg') }}" class="preview" /> --}}
        <div class="gallery">
            <div class="swiper-container main-slider loading">
                <div class="swiper-wrapper">
                    @foreach ($project->files as $item)
                        <div class="swiper-slide">
                            <figure class="slide-bgimg" style="background-image:url({{ asset($item->path) }})">
                                <img src="{{ asset($item->path) }}" class="entity-img" />
                            </figure>
                            <div class="content">
                                <p class="title"></p>
                                <span class="caption"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev swiper-button-white"></div>
            <div class="swiper-button-next swiper-button-white"></div>
        </div>

        <!-- Thumbnail navigation -->
        <div class="swiper-container nav-slider loading">
            <div class="swiper-wrapper" role="navigation">
                @foreach ($project->files as $item)
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url({{ asset($item->path) }})">
                            <img src="{{ asset($item->path) }}" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="credits">
                Developed with ❤️ by Huda Shakir</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/home/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/home/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script>
    <script src="{{ asset('assets/home/js/main.js') }}"></script>
    <script src="{{ asset('assets/home/js/project-details.js') }}"></script>
    <script src="{{ asset('assets/home/js/swiper-bundle.min.js') }}"></script>
</body>

</html>
