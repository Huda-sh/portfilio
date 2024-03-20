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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Huda Shakir</h1>
            <p>
                I'm a
                <span class="typed"
                    data-typed-items="Backend Developer, Mobile Developer, Frontend Developer, Freelancer, Programming instructor"></span>
            </p>
            <p class="about" style="font-size: 18px">
                A skilled and passionate Laravel Developer with experience in
                developing web applications using the Laravel framework and PHP,
                creating RESTful APIs, and integrating them with web and mobile
                applications.
            </p>
            <div class="social-links">
                <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                <a href="https://www.facebook.com/hudashakir314" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/hudashakir14" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.github.com/Huda-sh" class="github"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/hudashakir" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Skills</h2>
                </div>
                <div class="skill-cards-container">
                    @foreach ($frameworks as $item)
                        <div class="div-card">
                            <div class="div-card-item" style="background-image: url('{{ asset($item->logo) }}')"></div>
                            <span>{{ $item->name }}</span>
                        </div>
                    @endforeach
                    @foreach ($tools as $item)
                        <div class="div-card">
                            <div class="div-card-item" style="background-image: url('{{ asset($item->logo) }}')"></div>
                            <span>{{ $item->name }}</span>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Milestones</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Education</h3>
                        @foreach ($educations as $item)
                        <div class="resume-item">
                            <h4>{{$item->name}}</h4>
                            <h5>{{$item->date}}</h5>
                            <p><em>{{$item->institution}} | {{$item->location}}</em></p>
                            <p><?php
                            echo $item->description
                            ?>
                        </p>
                        </div>
                        @endforeach

                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach ($experinces as $item)

                        <div class="resume-item">
                            <h4>{{$item->name}}</h4>
                            <h5>{{$item->date}}</h5>
                            <p><em>{{$item->company}} | {{$item->location}}</em></p>
                            <ul>
                                <li>
                                    {{$item->description}}
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>

                <div class="projects grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach ($projects as $item)
                        <div class="card">
                            <div class="header" style="  background-image: url('{{$item->files[0]->path}}'); background-size: cover;">
                                <!-- <img src="./assets/home/img/profile-img.jpg" alt="" style="ob"> -->
                            </div>
                            <div class="info">
                                <p class="title">{{ $item->name }}</p>
                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi. </p> -->
                                @foreach ($item->technologies as $tec)
                                    <span class="stack-badge">{{$tec->name}}</span>
                                @endforeach
                            </div>
                            <div class="footer">
                                <!-- <p class="tag">#HTML #CSS </p> -->
                                <a href="{{ route('project', ['id'=>$item->id]) }}" target="_blank" class="card-btn"
                                    style="float: right; height: 2.35rem; color: #fff; background-color: #613bb1; padding: .375rem .75rem; border-radius: .25rem;"><i
                                        class="fa-regular fas fa-external-link-alt"></i>View Project</a>
                                <a href="{srcURL}" target="_blank" class="card-btn"
                                    style="float: right; color: #fff; background-color: #613bb1; padding: .375rem .75rem; border-radius: .25rem;"><i
                                        class="fa-solid fa-display"></i>View Demo</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            </div>
        </section>
        <!-- End Portfolio Section -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

@foreach ($ratings as $item)

<div class="swiper-slide">
    <div class="testimonial-item">
        <img src="{{ asset($item->image) }}"
        class="testimonial-img" alt="" />
        <h3>{{$item->name}}</h3>
        <h4>{{$item->organization}}</h4>
        <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            {{$item->text}}
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
        </p>
    </div>
</div>
@endforeach
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required />
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required />
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required />
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Brandon Johnson</h3>
            <div class="social-links">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

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
    <script src="{{ asset('assets/home/js/main.js') }}"></script>
</body>

</html>
