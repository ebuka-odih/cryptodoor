<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cryptodoor</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
{{--    <link href="assets/img/favicon.png" rel="icon">--}}
{{--    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">--}}
    <base href="https://bootstrapmade.com/demo/templates/Bootslander/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
{{--    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">--}}
    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://bootstrapmade.com/demo/templates/Bootslander/assets/css/style.css" rel="stylesheet">
    <style>
        .word {
            display: flex;
            height: 100%;
            margin: auto;
            color: white;
        }

    </style>

</head>
<body>
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo"><h1><a href="{{ route('index') }}"><span>Cryptodoor</span></a></h1></div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#features">Features</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
{{--            <i class="fas fa-bars mobile-nav-toggle"></i>--}}
        </nav>
    </div>
</header>
<section id="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out"><h1>Welcome To The Biggest
                        <span>Crypto Organization</span></h1>
                    <h2>More crypto millionaires are made daily in this organization than in anywhere else.</h2>
                    <div class="text-center text-lg-start"><a href="{{ route('register') }}" class="btn-get-started scrollto">Get
                            Started</a></div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 order-2 order-lg-1 d-flex" >

                <div data-aos="zoom-out"><h1 class="word">
                      </h1>
                </div>
{{--                <h3 style="color: white">Best In <span class="word"></span></h3>--}}
{{--                <img src="https://bootstrapmade.com/demo/templates/Bootslander/assets/img/hero-img.png" class="img-fluid animated" alt="">--}}
            </div>
        </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 24 150 28 " preserveAspectRatio="none">
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
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                     data-aos="fade-right"><a href="https://www.youtube.com/watch?v=StpBR2W8G5A"
                                              class="glightbox play-btn mb-4"></a></div>
                <div
                    class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                    data-aos="fade-left"><h3>Everyone knows that Crypto Door has been best Organization in Crypto</h3>
                    <p>Enjoy non-stop growth in crypto with Crypto Door, the focus is on growing together , leaving no member of this community behind, Following Professional step, and learning how it’s done rightly , we focus on growth for each member of the community and also for the entire Crypto/web3 ecosystem.</p>
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-coins fa-2x"></i></div>
                        <h4 class="title"><a href="">Flourish in Crypto </a></h4>
                        <p class="description">
                            Get Knowledge from A-Z . Fully Understand the depth of crypto. Learn and Understand money is made in crypto .
                        </p>
                       </div>
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-globe fa-2x"></i></div>
                        <h4 class="title"><a href="">Access to Crypto events world-wide </a></h4>
                        <p class="description">
                            As a member of the Crypto Door Organization, you have access to meeting and crypto Events worldwide. The Fun is unlimited, make new connections and establish Growth.
                        </p>
                       </div>
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-gift fa-2x"></i></div>
                        <h4 class="title"><a href="">Be The First. </a></h4>
                        <p class="description">
                            Technical Analysis for all crypto charts, breakdown and Price actions, Get Full Data,  stay on track. Don’t miss out on vital opportunities, Learn from Crypto Leaders.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features">
        <div class="container">
            <div class="section-title" data-aos="fade-up"><h2>Features</h2>
                <p>Check The Features</p></div>
            <div class="row" data-aos="fade-left">
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <i class="bi bi-award"
                                                                                    style="color: #ffbb2c; margin-right: 5px"></i>
                        <h3 ><a  href=""> -Award Winning Crypto Community</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50"><i style="color: #ffbb2c;" class="bi bi-flower1"></i>
                        <h3><a href=""> -Growth is the Priority, No member here is left behind</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100"><i class="bi bi-bell"
                                                                                     style="color: #5578ff;"></i>
                        <h3><a href=""> - Be early on Updates , Be the first earner</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="150"><i class="bi bi-stack"
                                                                                     style="color: #e80368;"></i>
                        <h3><a href=""> - Understand the Blockchain immediately</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200"><i class="bi bi-cash-coin"
                                                                                     style="color: #e361ff;"></i>
                        <h3><a href="">How Millions are Made - Follow the Pro Team, Get early into the most profitable projects</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="250"><i class="bi bi-file-earmark-bar-graph"
                                                                                     style="color: #47aeff;"></i>
                        <h3><a href="">- Technical Analysis , Get the right data Daily</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300"><i class="bi bi-bar-chart-steps"
                                                                                     style="color: #ffa76e;"></i>
                        <h3><a href="">- Understand Futures Trading on Binance , Step by step </a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="350"><i class="bi bi-universal-access-circle"
                                                                                     style="color: #11dbcf;"></i>
                        <h3><a href="">- Access Crypto Events worldwide , Make the best memories</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="400"><i class="bi bi-shield-check"
                                                                                     style="color: #4233ff;"></i>
                        <h3><a href="">- Protect your self from Losses and hacks , be a step ahead.</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="450"><i class="bi bi-align-start"
                                                                                     style="color: #b2904f;"></i>
                        <h3><a href=""> - Beginner Friendly , Get from Noob to Mastery</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="500"><i class="bi bi-link-45deg"
                                                                                     style="color: #b20969;"></i>
                        <h3><a href=""> - Get your own step to Growth according to your Level</a></h3></div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="550"><i class="bi bi-telephone-fill"
                                                                                     style="color: #ff5828;"></i>
                        <h3><a href="">- Get Help 24/7 on any Crypto Challenges</a></h3></div>
                </div>
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="600"><i class="ri-fingerprint-line"--}}
{{--                                                                                     style="color: #29cc61;"></i>--}}
{{--                        <h3><a href="">Flavor Nivelanda</a></h3></div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
    <section id="counts" class="counts">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 col-md-6">

                    <div class="count-box"><i class="bi bi-emoji-smile"></i>
                        <span class="pureounter">121,020 +</span>

                        <p>Happy Members</p>

                </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box"><i class="bi bi-journal-richtext"></i>
                        <span class="pureounter">1653 +</span>

                        <p>Projects Generating Income for Each Member</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box"><i class="bi bi-cash-coin"></i>
                        <span class="pureounter">24,683 </span>
                        <p>Millionaires Made so far (Over $1.6 Billion in Transactions)</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box"><i class="bi bi-people"></i>

                        <span data-purecounter-start="0"
                                                                              data-purecounter-end="265"
                                                                              data-purecounter-duration="1"
                                                                              class="purecounter"></span>
                        <p>Crypto Methods to Learn And Start with</p></div>
                </div>
            </div>
        </div>
    </section>
    <section id="details" class="details">
        <div class="container">
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right"><img src="https://bootstrapmade.com/demo/templates/Bootslander/assets/img/details-1.png" class="img-fluid"
                                                                 alt=""></div>
                <div class="col-md-8 pt-4" data-aos="fade-up">
                    <h3>Why Has The Cryptodoor Organization been the Leading wealth creation Path for new comers and experienced individuals in crypto?</h3>
                    <p class="fst-italic"> Crypto Door has been focusing on Individual Development per Member within the community , this has lead to Growth Of everyone in the Chain, there by not leaving anyone behind . We follow simple steps:</p>
                    <ul>
                        <li><i class="bi bi-check"></i> - Teaching and Enlightening of New Member.</li>
                        <li><i class="bi bi-check"></i>- Following Proven steps and taking up Profitable Projects as a Team.</li>
                        <li><i class="bi bi-check"></i> - Making known newest and Available means of profits Generation to all members , through Our Research Team.
                        </li>
                        <li><i class="bi bi-check"></i> - Connect with professionals who are 24/7 a big part of the Team to show you how it’s done.
                        </li>
                    </ul>
                    <p> By Joining the Community , You have a 100% chance of elevation and Growth , It’s important to know that following the right and proven steps in all that is really important.
                    </p></div>
            </div>
            <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left"><img src="https://bootstrapmade.com/demo/templates/Bootslander/assets/img/details-2.png"
                                                                                   class="img-fluid" alt=""></div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                    <h3>Is It Late to get into Crypto and Understand the Blockchain?</h3>
                    <p > Statistics show that we are in the very early phase of crypto and their is far more to be made , Crypto has Generated over $1.6 Billion for members of the organization, and statistically we are not started yet. It up to your perception of Time and Events, but it’s really way too early for everyone in Crypto.</p>

                </div>
            </div>
            <div class="row content">
                <div class="col-md-4" data-aos="fade-right"><img src="https://bootstrapmade.com/demo/templates/Bootslander/assets/img/details-3.png" class="img-fluid"
                                                                 alt=""></div>
                <div class="col-md-8 pt-5" data-aos="fade-up"><h3>The Membership Status of cryptodoor.org , What to Understand</h3>
                    <p>It’s been a great time welcoming members from all over the world as they Join The Crypto Door, currently one of the Biggest as we produce the most millionaires.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Joining however can’t be free as we have to maintain value , by attracting individuals who are really serious and into really Building with the Team. </li>
                        <li><i class="bi bi-check"></i> Check the Membership Pricing Below to see the one that suits you.</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="section-title" data-aos="fade-up"><h2>Gallery</h2>
                <p>Check our Gallery</p></div>
            <div class="row g-0" data-aos="fade-left">
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100"><a
                            href="{{ asset('img2/1.jpeg') }}" class="gallery-lightbox"> <img
                                src="{{ asset('img2/1.jpeg') }}" height="250" alt="" class="img-fluid"> </a></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                        <a href="{{ asset('img2/2.jpeg') }}"
                            class="gallery-lightbox"> <img
                                src="{{ asset('img2/2.jpeg') }}" height="250" alt="" class="img-fluid"> </a></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200"><a
                            href="{{ asset('img2/3.jpeg') }}" class="gallery-lightbox"> <img
                                src="{{ asset('img2/3.jpeg') }}" alt="" class="img-fluid"> </a></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250"><a
                            href="{{ asset('img2/4.jpeg') }}" class="gallery-lightbox"> <img
                                src="{{ asset('img2/4.jpeg') }}" alt="" class="img-fluid"> </a></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300"><a
                            href="{{ asset('img2/5.jpeg') }}" class="gallery-lightbox"> <img
                                src="{{ asset('img2/5.jpeg') }}" alt="" class="img-fluid"> </a></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350"><a
                            href="{{ asset('img2/6.jpeg') }}" class="gallery-lightbox"> <img
                                src="{{ asset('img2/6.jpeg') }}" alt="" class="img-fluid"> </a></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400"><a
                            href="{{ asset('img2/7.jpeg') }}" class="gallery-lightbox"> <img
                                src="{{ asset('img2/7.jpeg') }}" alt="" class="img-fluid"> </a></div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450"><a
                            href="{{ asset('img2/8.jpeg') }}" class="gallery-lightbox"> <img
                                src="{{ asset('img2/8.jpeg') }}" alt="" class="img-fluid"> </a></div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-title" data-aos="fade-up"><h2>Pricing</h2>
                <p>Check our Pricing</p></div>
            <div class="row" data-aos="fade-left">

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box featured" data-aos="zoom-in" data-aos-delay="200"><h3>Business</h3><h4><sup>$</sup>35<span> </span>
                        </h4>
                        <ul>
                            <li>-Get Full Access ( Become a Member).</li>
                            <li>-Get Access to All Resources and also Professional Coaching</li>
                            <li>- Access to All Crypto Event Worldwide</li>
                            <li>- Hotel Reservation and Assistance</li>
                            <li>- Support and Assistance with all Crypto/Tech Needs</li>
                        </ul>
                        <div class="btn-wrap"><a href="{{ route('register') }}" class="btn-buy">Get Started</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300"><h3>Developer</h3><h4><sup>$</sup>145<span></span>
                        </h4>
                        <ul>
                            <li>-Get Full Access ( Become a Member).</li>
                            <li>-Get Access to All Resources and also Professional</li>
                            <li>-Get Crypto Jobs , Work with the Team.</li>
                            <li>-Easy Flight Reservations for Crypto Events Worldwide</li>
                            <li>-Exclusive Hotels Options and Support.</li>
                        </ul>
                        <div class="btn-wrap"><a href="{{ route('register') }}" class="btn-buy">Get Started</a></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="400"><span class="advanced">Advanced</span>
                        <h3>Ultimate</h3><h4><sup>$</sup>590<span> </span></h4>
                        <ul>
                            <li>-Get Full Access ( Become a Member).</li>
                            <li>-Get Access to All Resources and also Professional Coaching</li>
                            <li>-Access To Exclusive Crypto Jobs</li>
                            <li>-Access to VIPs Zooms and Meetings</li>
                            <li>-VIP Hotel and Flights Reservation Options for all Crypto Events.</li>
                            <li>-Top Priority Trading.</li>
                        </ul>
                        <div class="btn-wrap"><a href="{{ route('register') }}" class="btn-buy">Get Started</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="faq section-bg">
        <div class="container">
            <div class="section-title aos-init aos-animate" data-aos="fade-up"><h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p></div>
            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" class="aos-init aos-animate"><i class="fa fa-help icon-help"></i> <a
                            data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is The Main Goal Of Crypto Door ? <i class="fas fa-chevron-circle-down icon-show"></i><i
                                class="fas fa-chevron-circle-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list"><p> The aim of The Crypto Door Organisation is to unite all individuals of the crypto ecosystem to create and support a friendly environment to develop and Promote an Effective Mechanism of streamlined Growth for each member , And increase of Net-worth and Experience per Person. </p></div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate"><i
                            class="fa fa-help icon-help"></i>
                        <a data-bs-toggle="collapse"
                                                                        data-bs-target="#faq-list-2" class="collapsed">Is Crypto Hard To Understand and Follow Up in ?
                            <i class="fas fa-chevron-circle-down icon-show"></i><i
                                class="fas fa-chevron-circle-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list"><p> Understanding Crypto is quite the easiest Part of Crypto, We as a Team are focused on Creating easier methods to Learn and Earn with Crypto, For freshly new comers , we have a Beginner friendly approach to Ensure maximum efficacy and enable Growth in the Long Run.
                            </p></div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate"><i
                            class="fa fa-help icon-help"></i>
                        <a data-bs-toggle="collapse"
                                                                        data-bs-target="#faq-list-3" class="collapsed">
                            How do I get Exclusive Tickets to Crypto Event all Around the world?     <i class="fas fa-chevron-circle-down icon-show"></i><i
                                class="fas fa-chevron-circle-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list"><p> You have To be a Member Firstly , So After Registration and Completing your status you have everything you need inside.
                            </p></div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate"><i
                            class="fa fa-help icon-help"></i> <a data-bs-toggle="collapse"
                                                                        data-bs-target="#faq-list-4" class="collapsed">
                            How do I master Productivity in Crypto and NFTs?
                            <i
                                class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>Productivity is mastered , and here you have true coaches to ensure you have the Same Virtue , it’s easier when you have a guide to follow.

                            </p></div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate"><i
                            class="fa fa-help icon-help"></i>
                        <a data-bs-toggle="collapse"
                                                                        data-bs-target="#faq-list-5" class="collapsed">
                            What if I have no Money to Fully Start in Crypto?
                            <i
                                class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list"><p> Starting with no money in crypto can be Tricky especially when you don’t do it right, you can get the best jobs and learn the tricks you need to scale up quickly.
                            </p></div>
                    </li>
                    <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate"><i
                            class="fa fa-help icon-help"></i>
                        <a data-bs-toggle="collapse"
                                                                        data-bs-target="#faq-list-5" class="collapsed">
                            What Ways do Members interact , what is the medium used to Learn and Talk to others?
                            <i
                                class="fa fa-chevron-down icon-show"></i><i class="fa fa-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Everything is Done Exclusively, The way to find out is to get Registered
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title" data-aos="fade-up"><h2>Contact</h2>
                <p>Contact Us</p></div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                        <div class="address"><i class="bi bi-geo-alt"></i><h4>Location:</h4>
                            <p>17 Allée Saint Jean-Paul II, Monaco-Ville 98000</p></div>
                        <div class="email"><i class="bi bi-envelope"></i><h4>Email:</h4>
                            <p><a href="mailto:cryptodoor@cryptodoor.org" class="__cf_email__"
                                  data-cfemail="51383f373e113429303c213d347f323e3c">cryptodoor@cryptodoor.org</a></p></div>
                        <div class="phone"><i class="bi bi-phone"></i><h4>Call:</h4>
                            <p>Monaco Office: +377 97365363</p>
                            <p>Toll: +1(559)3158459</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group"><input type="text" name="name" class="form-control"
                                                                    id="name" placeholder="Your Name" required></div>
                            <div class="col-md-6 form-group mt-3 mt-md-0"><input type="email" class="form-control"
                                                                                 name="email" id="email"
                                                                                 placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3"><input type="text" class="form-control" name="subject" id="subject"
                                                            placeholder="Subject" required></div>
                        <div class="form-group mt-3"><textarea class="form-control" name="message" rows="5"
                                                               placeholder="Message" required></textarea></div>
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
                    <div class="footer-info"><h3><a href="CryptoDoor.org">CryptoDoor.Org</a></h3>
                        <p class="pb-3"><em>Crypto make life easier , Crypto makes dreams come true , all Everyone needs is the right Door.</em></p>
                        <p> 17 Allée Saint Jean-Paul II, Monaco-Ville 98000<br><br>
                            <strong>Phone: (Monaco Office)</strong> +377 97365363<br>
                            <strong>Phone: (Toll)</strong> +1(559)3158459<br>
                            <strong>Email:</strong> <a href="mailto:cryptodoor@cryptodoor.org" >cryptodoor@cryptodoor.org</a><br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/cryptodoororg" class="twitter">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="https://facebook.com/cryptodoor" class="facebook">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com/cryptodoororg" class="instagram">
                                <i class="bx bxl-instagram"></i>
                            </a>
                            <a href="https://www.tiktok.com/@cryptodoor.org" class="linkedin">
                                <i class="bx bxl-tiktok"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright"> &copy; Copyright <strong><span>Cryptodoor.org</span></strong>. All Rights Reserved</div>
    </div>
</footer>
<a href="https://cryptodoor.org/#home" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i>
</a>
{{--<div id="preloader"></div>--}}
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/aos/aos.js"></script>
<script src="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://bootstrapmade.com/demo/templates/Bootslander/assets/vendor/php-email-form/validate.js"></script>
<script src="https://bootstrapmade.com/demo/templates/Bootslander/assets/js/main.js"></script>
<script async src='https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP'></script>
<script>if (window.self == window.top) {
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-P7JSYB1CSP');
    }</script>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<script>
    var words = ['Best in Crypto Trading','Learn Skills From Professionals', 'Interact With Community','Experience Growth', 'Travel', 'Build Network Net-worth'],
        part,
        i = 0,
        offset = 0,
        len = words.length,
        forwards = true,
        skip_count = 0,
        skip_delay = 15,
        speed = 70;
    var wordflick = function () {
        setInterval(function () {
            if (forwards) {
                if (offset >= words[i].length) {
                    ++skip_count;
                    if (skip_count == skip_delay) {
                        forwards = false;
                        skip_count = 0;
                    }
                }
            }
            else {
                if (offset == 0) {
                    forwards = true;
                    i++;
                    offset = 0;
                    if (i >= len) {
                        i = 0;
                    }
                }
            }
            part = words[i].substr(0, offset);
            if (skip_count == 0) {
                if (forwards) {
                    offset++;
                }
                else {
                    offset--;
                }
            }
            $('.word').text(part);
        },speed);
    };

    $(document).ready(function () {
        wordflick();
    });
</script>
</body>
</html>
