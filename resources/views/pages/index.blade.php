<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CryptoDoor</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('assets2/css/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/style.css') }}" rel="stylesheet">
</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1>
                <a href="{{ route('index') }}">
                    <span>CryptoDoor</span>
                </a>
            </h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="#hero">Home</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#about">About</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#features">Features</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#gallery">Gallery</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#team">Team</a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#pricing">Pricing</a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>Drop Down</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="#">Drop Down 1</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">
                                <span>Deep Drop Down</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Deep Drop Down 1</a>
                                </li>
                                <li>
                                    <a href="#">Deep Drop Down 2</a>
                                </li>
                                <li>
                                    <a href="#">Deep Drop Down 3</a>
                                </li>
                                <li>
                                    <a href="#">Deep Drop Down 4</a>
                                </li>
                                <li>
                                    <a href="#">Deep Drop Down 5</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Drop Down 2</a>
                        </li>
                        <li>
                            <a href="#">Drop Down 3</a>
                        </li>
                        <li>
                            <a href="#">Drop Down 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#contact">Contact</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<section id="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h1>Build Your Landing Page With <span>Bootstlander</span>
                    </h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="img/bg.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>
</section>
<main id="main">
    <section id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
{{--                    <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>--}}
                    <img src="img/bg2.png" class="img-fluid mb-4" alt="">
                </div>
                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                    <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                    <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon">
                            <i class="bx bx-fingerprint"></i>
                        </div>
                        <h4 class="title">
                            <a href="">Lorem Ipsum</a>
                        </h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon">
                            <i class="bx bx-gift"></i>
                        </div>
                        <h4 class="title">
                            <a href="">Nemo Enim</a>
                        </h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon">
                            <i class="bx bx-atom"></i>
                        </div>
                        <h4 class="title">
                            <a href="">Dine Pad</a>
                        </h4>
                        <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Features</h2>
                <p>Check The Features</p>
            </div>
            <div class="row" data-aos="fade-left">
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <i class="ri-store-line" style="color: #ffbb2c;"></i>
                        <h3>
                            <a href="">Lorem Ipsum</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                        <h3>
                            <a href="">Dolor Sitema</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                        <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                        <h3>
                            <a href="">Sed perspiciatis</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                        <h3>
                            <a href="">Magni Dolores</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
                        <i class="ri-database-2-line" style="color: #47aeff;"></i>
                        <h3>
                            <a href="">Nemo Enim</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                        <h3>
                            <a href="">Eiusmod Tempor</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
                        <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                        <h3>
                            <a href="">Midela Teren</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                        <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                        <h3>
                            <a href="">Pira Neve</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
                        <i class="ri-anchor-line" style="color: #b2904f;"></i>
                        <h3>
                            <a href="">Dirada Pack</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
                        <i class="ri-disc-line" style="color: #b20969;"></i>
                        <h3>
                            <a href="">Moton Ideal</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
                        <i class="ri-base-station-line" style="color: #ff5828;"></i>
                        <h3>
                            <a href="">Verdo Park</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
                        <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                        <h3>
                            <a href="">Flavor Nivelanda</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="counts" class="counts">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="details" class="details">
        <div class="container">
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="img/bg2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </li>
                        <li>
                            <i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                        </li>
                        <li>
                            <i class="bi bi-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.
                        </li>
                        <li>
                            <i class="bi bi-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.
                        </li>
                    </ul>
                    <p> Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia</p>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/details-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p class="fst-italic"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p> Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.</p>
                </div>
            </div>
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right">
                    <img src="assets/img/details-3.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5" data-aos="fade-up">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li>
                            <i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </li>
                        <li>
                            <i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                        </li>
                        <li>
                            <i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.
                        </li>
                    </ul>
                    <p> Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.</p>
                    <p> Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.</p>
                </div>
            </div>
           
        </div>
    </section>
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Gallery</h2>
                <p>Check our Gallery</p>
            </div>
            <div class="row g-0" data-aos="fade-left">
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                        <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                        <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                        <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                        <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                        <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                        <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                        <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                        <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
                            <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">

            </div>
        </div>
    </section>
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Check our Pricing</p>
            </div>
            <div class="row" data-aos="fade-left">
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                        <h3>Business</h3>
                        <h4>
                            <sup>$</sup>35 <span> / month</span>
                        </h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <h3>Developer</h3>
                        <h4>
                            <sup>$</sup>145 <span> / month</span>
                        </h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="400">
                        <span class="advanced">Advanced</span>
                        <h3>Ultimate</h3>
                        <h4>
                            <sup>$</sup>590 <span> / month</span>
                        </h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="51383f373e113429303c213d347f323e3c">[email&#160;protected]</a>
                            </p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Bootslander</h3>
                        <p class="pb-3">
                            <em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em>
                        </p>
                        <p> A108 Adam Street <br> NY 535022, USA <br>
                            <br>
                            <strong>Phone:</strong> +1 5589 55488 55 <br>
                            <strong>Email:</strong>
                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c0c7cfc6e9ccd1c8c4d9c5cc87cac6c4">[email&#160;protected]</a>
                            <br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="facebook">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="instagram">
                                <i class="bx bxl-instagram"></i>
                            </a>
                            <a href="#" class="google-plus">
                                <i class="bx bxl-skype"></i>
                            </a>
                            <a href="#" class="linkedin">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright"> &copy; Copyright <strong>
                <span>Bootslander</span>
            </strong>. All Rights Reserved </div>
        <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
<div id="preloader"></div>
{{--<script data-cfasync="false" src="https://bootstrapmade.com/demo/templates/Bootslander/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
<script src="{{ asset('assets2/js/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets2/js/aos/aos.js') }}"></script>
<script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets2/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets2/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets2/js/validate.js') }}"></script>
<script src="{{ asset('assets2/js/main.js') }}"></script>

</body>
</html>
