<?php
// includes/site_header.php - en-tête du site visiteur (design "Espoir")
$pageTitle = $pageTitle ?? 'Clinique';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="shortcut icon" href="assets/site/images/logo/images.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/site/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/site/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/site/css/lightcase.css">
    <link rel="stylesheet" href="assets/site/css/meanmenu.css">
    <link rel="stylesheet" href="assets/site/css/nice-select.css">
    <link rel="stylesheet" href="assets/site/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/site/css/animate.min.css">
    <link rel="stylesheet" href="assets/site/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/site/css/main.css">
    <style>
        /* Connexion : simple icône, comme la loupe et le menu */
        .login-link { display:inline-flex; align-items:center; margin-left:25px; color:#1e91d1;
            font-size:22px; line-height:1; text-decoration:none; transition:color .3s; }
        .login-link:hover, .login-link:focus { color:#0f6a9e; }

        /* Réseaux sociaux : bleu au survol, au clic et au focus */
        .social-links.social-links__2 a { transition: all .25s; }
        .social-links.social-links__2 a:hover,
        .social-links.social-links__2 a:focus { border-color:#1e91d1; color:#1e91d1; outline:none; }
        .social-links.social-links__2 a:active { background:#1e91d1; border-color:#1e91d1; color:#fff; }
        .side-info .social-links a:active { background:#1e91d1; border-color:#1e91d1; color:#fff; }
    </style>
</head>
<body>
<!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                       I
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
        <header class="site-header">
        <div class="header-top header-top__2">
            <div class="container-fluid custom-width">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 align-self-center">
                        <div class="header-top__left d-flex align-items-center">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/site/images/logo/images.png" alt="img">
                                </a>
                            </div>
                            <ul class="header-top__infos pl-75 list-unstyled d-flex align-items-center mb-0">
                                <li><a href="tel:91800458568"><i class="fas fa-phone-square"></i>+235 66470622</a></li>
                                <li><i class="fa fa-map-marker-alt"></i> N'Djamena / Tchad</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12  align-self-center">
                        <div class="header-top__right header-top__right--2 d-flex justify-content-xl-end justify-content-center align-items-center">
                            <div class="social-links social-links__2 d-flex align-items-center justify-content-md-start justify-content-center">
                                <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                            <a href="index.php?page=contact" class="site-btn">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-area menu-area-2 custom-padding">
            <div class="container-fluid custom-width">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-6">
                        <div class="logo mm-only d-md-block d-lg-none">
                            <a href="index.php">
                                <img src="assets/site/images/logo/images.png" alt="img">
                            </a>
                        </div>
                        <div class="main-menu main-menu__2">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.php?page=accueil">Accueil</a></li>
                                    <li><a href="index.php?page=about">À propos</a></li>
                                    <li><a href="index.php?page=equipe">Équipe médicale</a></li>
                                    <li><a href="index.php?page=contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-6 align-self-center">
                        <div class="menu-area__right menu-area__right--2 d-flex justify-content-end align-items-center">
                            <div class="search">
                                <div class="search__trigger item">
                                    <span class="open"><i class="far fa-search"></i></span>
									<span class="close"><i class="fal fa-times"></i></span>
                                </div>
                                <div class="search__form">
                                    <form role="search" method="get" action="index.php">
                                        <input type="search" name="s" value="" placeholder="Search Keywords">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="hamburger-trigger item">
                                <i class="far fa-bars"></i>
                            </div>
                            <a href="login.php" class="login-link" title="Connexion" aria-label="Connexion"><i class="fas fa-user-lock"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- side info for mobile view -->
    <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab"
                    href="#menu-tab-1" role="tab" aria-controls="menu-tab-1"
                    aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2"
                    role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.php">
                    <img src="assets/site/images/logo/images.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
                aria-labelledby="menu-tab-1-tab">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel"
                aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="title mb-5">À propos</h4>
                        <p>Espoir de Vue est une clinique ophtalmologique qui offre des soins oculaires spécialisés, dirigée par des spécialistes en ophtalmologie.</p>
                        <a class="site-btn mt-20" href="index.php?page=contact">Contactez-nous</a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-10">Contactez-nous</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Avenue Maldoum Bada Abbass, 3e arrondissement, N’Djamena, Tchad</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+235 66543234 / 22527623</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>dickomht@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- side info for desktop view -->
<aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.php">
                    <img src="assets/site/images/logo/images.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-5">À propos</h4>
                <p>Espoir de Vue est une clinique ophtalmologique qui offre des soins oculaires spécialisés, dirigée par des spécialistes en ophtalmologie.</p>
                <a class="site-btn mt-20" href="index.php?page=contact">Contactez-nous</a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-10">Contactez-nous</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Avenue Maldoum Bada Abbass, 3e arrondissement, N’Djamena, Tchad</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+235 66543234 / 22527623</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>dickomht@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>

