<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GOODELIVERING - <?= ucfirst($page) ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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

<body class="page-about">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="./logo1.jpeg" alt=""> -->
                <img src="./logo1.png" alt="">
                <img src="./logo2.png" height="40" alt="">
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
                    <li><a href="/public/contact#main" class="<?= $page == 'contact' ? 'active' : '' ?>">Contact</a></li>
                </ul>

                <div class="language-picker js-language-picker mx-5 dropdown">
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


    <div class="modal hidden1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #F0F0F0;">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="./logo1.png" width="140" alt="">
                        </div>
                        <div class="col-8" style="color:#1b2f45;">
                            <h5 class="modal-title mb-2 mt-4">Do you want to talk?</h5>
                            <p style="color: #1b2f45;">Get in touch by WhatsApp.<a target="_black" onclick="setHidden1()" href="https://web.whatsapp.com/send?phone=+244912135116&text=Hi!"><b> Click Here!</a></b></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>