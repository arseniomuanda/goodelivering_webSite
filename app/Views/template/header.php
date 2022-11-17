<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GOODELIVERING - <?= ucfirst($page) ?></title>
    <meta content="" name="description" content="THE GOODELIVERING, LDA has as its core business General Procurement, Logistic
                                Manpower Sourcing & Visa Application performed in high-quality and international
                                professional standard. These segments formed the initial approach of our business as we realized
                                that it formed a major component of the procurement needs of our clients. We created a database of
    related specialists in the procurement / Logistic and Manpower sourcing">
    <meta content="" name="keywords" content="genaral,procurement,manpower">


    <link rel="canonical" href="https://goodelivering.com/">
    <meta property="og:locale" content="pt_PT">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Goodelivering">
    <meta property="og:url" content="https://goodelivering.com/">
    <meta property="og:site_name" content="Goodelivering">
    <meta property="article:modified_time" content="2022-11-12T20:54:09+00:00">
    <meta property="og:image" content="https://goodelivering.com/public/logo1.png">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:image:type" content="image/png">
    <!-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:label1" content="Est. reading time">
    <meta name="twitter:data1" content="9 minutos"> -->

    <!-- Favicons -->
    <link href="<?= base_url()?>/favImage.jpeg" rel="icon">
    <link href="<?= base_url()?>/favImage.jpeg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url()?>/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Nova - v1.2.1
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="./logo1.png" alt="">
                <img src="./logo2.png" alt="">
                <link href="<?= base_url()?>/logo1.png" rel="icon">
                <link href="<?= base_url()?>/logo2.png" rel="apple-touch-icon">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/" class="<?= $page == 'home' ? 'active' : '' ?>">Home</a></li>
                    <li><a href="/public/about" class="<?= $page == 'about' ? 'active' : '' ?>">About</a></li>
                    <li><a href="/public/#products">Products</a></li>
                    <li><a href="/public/#brands">Brands</a></li>
                    <li class="dropdown"><a href="#" class="<?= $page == 'services' ? 'active' : '' ?>"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="/public/generalprocurement">General Procurement</a></li>
                            <li><a href="/public/manpower">Manpower Supply Company</a></li>
                            <li><a href="/public/logisticsservices">Logistics Services</a></li>
                            <li><a href="/public/technicalengineering">Technical and Engineering Services</a></li>
                            <li><a href="/public/visaapplication">VISA Application</a></li>
                        </ul>
                    </li>
                    <li><a href="/public/team" class="<?= $page == 'team' ? 'active' : '' ?>">Team</a></li>
                    <li><a href="/public/contact" class="<?= $page == 'contact' ? 'active' : '' ?>">Contact</a></li>
                </ul>



                <div class="language-picker js-language-picker mx-5">
                    <form action="" class="language-picker__form">
                        <label for="language-picker-select"> </label>

                        <select onchange="changeLang(this);event.preventDefault()" name="language-picker-select" id="language-picker-select">
                            <option lang="en" value="en" selected>En</option>
                            <option lang="pt" value="pt">Pt</option>
                            <!-- other language options -->
                        </select>
                    </form>
                </div>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    </div>
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 data-aos="fade-up">OIL AND GAS, GENERAL PROCUREMENT, LOGISTIC SERVICES, MANPOWER, AND VISA SERVICES.</h2>
                    <br><br><br><br><br>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <a href="/public/about" class="btn-get-started">See more</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section-->


    <div class="modal hidden" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #F0F0F0;">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <img src="./logo1.png" width="140" alt="">
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <h5 class="modal-title mb-2 mt-4" style="color:#1b2f45;">News? We warn!</h5>
                            <p style="color:#1b2f45;">Do you want to receive news in your email? Sign up for our newsletter.</p>
                        </div>
                    </div>


                    <div class="contact mt-5">
                        <div class="row gy-4 d-flex justify-content-end position-relative">
                            <form id="emailForm" action="/public/email" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input hidden type="text" class="form-control" name="subject" id="subject" value="Subscribe to Newsletter" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea hidden class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                            </form>
                        </div>
                    </div><!-- End Contact Section -->



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" form="emailForm" type="submit">Send Message</button>
                </div>
            </div>
        </div>
    </div>
    </div>