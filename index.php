<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>ONT - Office National du Tourisme</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png">
<!-- Place favicon.ico in the root directory -->

<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/svg-with-js.min.css">
<link rel="stylesheet" href="assets/css/flaticon.css">
<link rel="stylesheet" href="assets/css/odometer.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.css">
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<link rel="stylesheet" href="assets/css/aos.css">
<link rel="stylesheet" href="assets/css/default.css">
<link rel="stylesheet" href="assets/css/default-icons.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/custom.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css'>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<style type="text/css">
    /* Couleur quand le scroll dépasse 50px */
    .text-white{
        color: #212121;  /* Couleur active */
    }

    .tg-header__top-three{
        background: rgba(0, 0, 0, .1);
    }

    .tg-header__top-info{
        color: #ffffff!important;
    }
    .header-info a{
        color: #ffffff!important;
    }
    
    .header-info li{
        color: #ffffff!important;
    }

    .bg__video video {
        object-fit: cover; /* Permet à la vidéo de remplir l'écran */
        width: 100%;
        height: 110%;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
    }

    .bg__video::before {
        content: ""; /* Nécessaire pour créer un pseudo-élément */
        position: absolute;
        top: 0;
        left: 0;
        bottom:0;
        width: 100%;
        height: 110%;
        background: rgba(0, 0, 0, 1);
        background-size: cover;
        z-index: 5;
        opacity: .4;
    }

    .overlay__slide::before {
        content: ""; /* Nécessaire pour créer un pseudo-élément */
        position: absolute;
        top: 0;
        left: 0;
        bottom:0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 1);
        background-size: cover;
        z-index: 5;
        opacity: .4;
    }

    /* Style pour le bouton de contrôle du son */
    .mute-btn {
        position: absolute;
        bottom: 50px;
        right: 20px;
        background: none;
        border: none;
        cursor: pointer;
        z-index: 10; /* Assurez-vous que le bouton soit au-dessus de la vidéo */
    }

    .mute-btn img {
        width: 30px;
        height: 30px;
    }

    /* Style pour la pagination */
    .swiper-pagination {
        position: absolute;
        bottom: 10px;
        right: 30px;
        z-index: 10;
    }

    /* Personnalisation des bullets */
    .swiper-pagination-bullet {
        background-color: #fff;
        margin: 0 4px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        opacity: .5;
    }

    /* Pour le bullet actif */
    .swiper-pagination-bullet-active {
        background-color: #fff;
        width: 20px;
        height: 8px;
        border-radius: 6px;
        opacity: 1;
    }


    /* Style de base pour les icônes */
    .offCanvas__social-icon a {
    display: inline-block;
    background-color: #ffffff;  /* Couleur de fond */
    border-radius: 50%;  /* Rendre l'arrière-plan circulaire */
    padding: 11px;  /* Espacement autour de l'icône */
    margin: 0 5px;  /* Espacement entre les icônes */
    width: 40px;  /* Largeur du cercle */
    height: 40px;  /* Hauteur du cercle */
    text-align: center;
    line-height: 10px;  /* Centrer l'icône verticalement */
    transition: background-color 0.3s ease, transform 0.3s ease, color 0.3s ease;  /* Transition fluide */
    }

    /* Effet au survol */
    .offCanvas__social-icon a:hover {
    background-color: #009e96;  /* Couleur de fond au survol */
    transform: scale(1.1);  /* Agrandir l'icône au survol */
    }

    /* Style des icônes */
    .offCanvas__social-icon i {
    color: #0a80b5;  /* Couleur des icônes */
    font-size: 1.1em;  /* Taille des icônes */
    transition: color 0.3s ease, transform 0.3s ease;  /* Transition fluide pour les icônes */
    }

    /* Effet au survol sur les icônes */
    .offCanvas__social-icon a:hover i {
    color: #ffffff;  /* Couleur de l'icône au survol */
    transform: scale(1.1);  /* Agrandir légèrement l'icône au survol */
    }

    .active{
    color: #00ccff!important;
    }


     .equal-height {
    display: flex;
    flex-wrap: wrap;
    height: 560px;
  }

  .equal-height-2 {
    display: flex;
    flex-wrap: wrap;
    height: 630px;
  }

  .equal-height > [class*='col-'] {
    display: flex;
    flex-direction: column;
  }

  .image-container {
    min-height: ; /* Hauteur minimale pour l'image */
  }

  .object-fit-cover {
    object-fit: cover;

  }

  .position-details{
    position: absolute;
    top: 120px;
  }

  /* Gestion de l'ordre sur mobile */
  @media (max-width: 767px) {
    .equal-height {
      flex-direction: column;
    }

    /* Si l'image est en premier, on garde l'ordre */
    .image-first {
      order: 1 !important;
    }

    /* Si l'image est en second, on inverse l'ordre */
    .image-first + .image-container {
      order: 2 !important;
    }

    .position-details{
      position: absolute;
      top: 350px;
    }
  }

  @media (max-width: 767px) {
    .equal-height {
      flex-direction: column-reverse;
    }
    
    .image-container {
      min-height: 250px; /* Hauteur minimale réduite sur mobile */
    }
  }

  /* Ajustements pour le texte */
  .h2 {
    font-size: 2.5rem;
  }

  @media (max-width: 767px) {
    .h2 {
      font-size: 2rem;
    }
    .p-md-5 {
      padding: 2rem !important;
    }
  }

  .no-padding{
    padding:0px!important
  }



.item {
  
}

/* Mobile Styles (portrait) */
@media (max-width: 599px) {
  
  .item-1 {
    order: 1;
  }
  .item-2 {
    order: 2;
  }
  .item-3 {
    order: 3;
  }

  .object-fit-cover {
    object-fit: cover;
    height: 350px!important;
    width: 100%!important;

  }
}

/* Mobile Styles (landscape) */
@media (min-width: 600px) and (max-width: 899px) {
  
  .item-1 {
    order: 2;
  }
  .item-2 {
    order: 1;
  }
  .item-3 {
    order: 3;
  }
}

/* Tablet Styles */
@media (min-width: 900px) and (max-width: 1199px) {
  
  .item-1 {
    order: 3;
  }
  .item-2 {
    order: 1;
  }
  .item-3 {
    order: 2;
  }
}

/* Desktop Styles */
@media (min-width: 1200px) {
  
  .item-1 {
    order: 3;
  }
  .item-2 {
    order: 1;
  }
  .item-3 {
    order: 2;
  }
}

</style>
</head>

<body class="theme-red">

<!--Preloader-->
<?php include('includes/loader.php'); ?>
<!--Preloader-end -->

<!-- header-area -->
<?php include('includes/header.php'); ?>
<!-- header-area-end -->

<!-- main-area -->
<main class="fix">

<!-- slider-area -->
<section class="slider__area">
    <div class="swiper-container swiper-main-container slider__active">
        <div class="swiper-wrapper">
            <!-- Premier slide image -->
            <div class="swiper-slide slider__single">
                <div class="slider__bg overlay__slide" data-background="img/102.jpeg"></div>
                <div class="container">
                    <div class="slider__content">
                        <div class="row">
                            <div class="col-lg-6 mt-50">
                                <h2 class="title AvenirBlack" style="text-transform: none;">
                                    Création
                                </h2>
                                <p class="AvenirLight text-white">
                                    L'Office National du Tourisme (ONT) a été créé par l'ordonnance n° 86-210 du 12 juillet 1986 et transformé en établissement public en 2009 pour renforcer son efficacité.
                                </p>
                                <a href="#!" class="btn border-btn AvenirBold" style="border-radius: 100px;">
                                    En savoir plus
                                    <img src="assets/img/icon/right_arrow.svg" alt="" class="injectable">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/slider/slider_shape.svg" alt="shape" class="shape">
            </div>

            <!-- Deuxième slide image -->
            <div class="swiper-slide slider__single">
                <div class="slider__bg overlay__slide" data-background="img/about04.jpg"></div>
                <div class="container">
                    <div class="slider__content">
                        <div class="row">
                            <div class="col-lg-6 mt-50">
                                <h2 class="title AvenirBlack" style="text-transform: none;">
                                    Objectifs
                                </h2>
                                <p class="AvenirLight text-white">
                                    L'ONT vise à promouvoir et développer le tourisme en République Démocratique du Congo, en attirant les investissements et valorisant la richesse culturelle et naturelle du pays.
                                </p>
                                <a href="#!" class="btn border-btn AvenirBold" style="border-radius: 100px;">
                                    En Savoir plus
                                    <img src="assets/img/icon/right_arrow.svg" alt="" class="injectable">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/slider/slider_shape.svg" alt="shape" class="shape">
            </div>

            <!-- Slide vidéo -->
            <div class="swiper-slide slider__single">
                <div class="slider__bg bg__video">
                    <video autoplay loop muted id="video-slide">
                        <source src="assets/videos/reels.mp4" type="video/mp4">
                        Votre navigateur ne supporte pas la balise vidéo.
                    </video>
                </div>
                <div class="container">
                    <div class="slider__content">
                        <div class="row">
                            <div class="col-lg-6 mt-50">
                                <h2 class="title AvenirBlack" style="text-transform: none;">
                                    Missions clés
                                </h2>
                                <p class="AvenirLight text-white">
                                    Développer des stratégies pour encourager le tourisme, encadrer le secteur et améliorer les infrastructures touristiques adaptées aux besoins nationaux et internationaux.
                                </p>
                                <a href="#!" class="btn border-btn AvenirBold" style="border-radius: 100px;">
                                    En savoir plus 
                                    <img src="assets/img/icon/right_arrow.svg" class="injectable">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/slider/slider_shape.svg" alt="shape" class="shape">
                
                <!-- Bouton de contrôle du son -->
                <button class="mute-btn" onclick="toggleMute()">
                    <img src="assets/img/icon/icon-muted.svg" alt="Sound Icon" id="sound-icon">
                </button>
            </div>

        </div>

        <!-- Pagination en bas à droite -->
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- slider-area-end -->



<!-- newsletter-area -->
<section class="newsletter__area">
<div class="container">
<div class="newsletter__wrap">
    <div class="row gx-0">
        <div class="col-lg-6">
            <div class="newsletter__content-left">
                <div class="experiences__wrap" style="border-radius:20px">
                    <h2 class="count">38</h2>
                    <span style="text-transform:none!important;">Années <strong style="text-transform:none!important;">d'Existence</strong></span>
                </div>
                <h4 class="AvenirBlack" style="line-height:normal;">38 ans <span class="AvenirLight">à redorer l'image du <span class="AvenirBlack">pays</span> et à faire de la <span class="AvenirBlack">RDC</span> une <span class="AvenirBlack">destination</span> de choix.</span></h4>
                <img src="assets/img/iconn01.png" class="shape" style="width:120px!important">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="newsletter__content">
                <h2 class="title">
                    <i class="fa-regular fa-envelope-open" style="font-size:.9em"></i>
                    Souscrivez Newsletter
                </h2>
                <form action="#" class="newsletter__form">
                    <input type="text" placeholder="Restez informé à temps réels" style="border-radius:50px!important">
                    <button type="submit" style="border-radius:50px!important">Souscrire</button>
                </form>
                <img src="assets/img/iconn03.png" alt="" class="shape" style="width:170px">
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- newsletter-area-end -->


<!-- about-area -->
<section class="about__area pt-120 pb-120">
<div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="about__img">
                <img src="img/about.png" alt="img">
                <img src="img/about01.png" alt="img" data-aos="fade-right" data-aos-delay="200">
                <img src="assets/img/about04.png" alt="img" data-aos="fade-down" data-aos-delay="400">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about__content">
                <div class="section__title mb-15">
                    <span class="sub-title DinProBold">
                        Office National du Tourisme (ONT)
                    </span>
                    <h2 class="title AvenirBlack" style="text-transform:;">
                        Brève présentation 
                    </h2>
                </div>
                <p class="AvenirLight" style="line-height: 1.37em;font-size: 1.1em;">
                    Créé par l'ordonnance n° 86-210 du 12 juillet 1986, l'ONT a été transformé en établissement public à caractère technique par le décret n° 09/65 du 3 décembre 2009, ce qui lui a conféré la personnalité juridique.
                    <br>
                    <br>
                    L'ONT a pour objectif de promouvoir et développer le tourisme en République Démocratique du Congo. Depuis sa création, il met en œuvre la politique touristique nationale pour attirer les investissements et accroître la visibilité du pays. Le secteur touristique est reconnu comme crucial pour l'économie congolaise et joue un rôle dans la valorisation de la diversité culturelle et naturelle du pays.
                    <br>
                    En 2010, les statuts de l'ONT ont été confirmés pour lui permettre de s'acquitter de sa mission avec efficacité et modernité.
                    <br>
                    <br>
                    
                    La Direction Générale (DG) de l'ONT est actuellement dirigée par <span class="DinProBold">Mme Jolie YOMBO</span>, qui supervise la mise en œuvre des stratégies et objectifs visant à renforcer l'attractivité touristique de la République Démocratique du Congo.
                    
                </p>
                
            </div>
        </div>
    </div>
</div>
</section>
<!-- about-area-end -->

        <!-- brand-area -->
        <div class="brand__area">
            <div class="container">
                <div class="swiper brand-active fix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand_img01.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand_img02.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand_img03.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand_img04.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand_img05.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand_img06.png" alt="img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand__item">
                                <img src="assets/img/brand/brand_img04.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->


<!-- choose-area -->
<section class="choose__area choose__bg" data-background="assets/img/bg/vector_bg.svg" style="background: #0f478d;">
<div class="container">
<div class="row align-items-center justify-content-center">
<div class="col-lg-5 col-md-10">
    <div class="choose__img wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
        <img src="assets/img/jolie01.jpg" alt="img">
    </div>

    <h4 class="text-white mt-4 wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.4s" style="text-align: right;line-height: .8em;">
       <span class="AvenirLight">Jolie</span> <span class="AvenirBlack">Yombo Mukendi</span>
       <br>
       <span class="AvenirLight" style="font-size: .7em;">
        Directrice Générale ONT
        </span>
    </h4>
</div>
<div class="col-lg-7">
    <div class="choose__content">
        <div class="section__title white-title mb-25">
            <span class="sub-title">OFFICE NATIONAL DU TOURISME</span>
            <h2 class="DinProBold text-white">
               <span style="color:#04afff;" class="AvenirBlack">Piloter l’excellence,</span> bâtir l’avenir du tourisme.
            </h2>
        </div>
        <div class="choose__content-bottom">
            <div class="left-side">
                <p class="text-white AvenirLight" style="line-height:1.3em;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
                <a href="#!" class="btn white-btn AvenirBold" style="border-radius:50px;color: #0f478d;">
                En savoir plus <img src="assets/img/icon/right_arrow.svg" alt="" class="injectable"></a>
            </div>
            <div class="counter__wrap">
                <div class="counter__item">
                    <div class="counter__icon">
                        <i class="fa-solid fa-route text-white"></i>
                    </div>
                    <div class="counter__content">
                        <h2 class="count"><span class="counter-number">9.5</span>KM</h2>
                        <p class="DinProLight">Étendu à Explorer</p>
                    </div>
                </div>
                <div class="counter__item">
                    <div class="counter__icon">
                        <i class="fa-solid fa-masks-theater" style="color:#04afff"></i>
                    </div>
                    <div class="counter__content">
                        <h2 class="count"><span class="counter-number">15.9</span>M</h2>
                        <p class="DinProLight">Espèces à Découvrir</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!-- choose-area-end -->


<!-- features-area -->
<section class="features__area-two">
    <div class="container">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 order-0 order-lg-2">
                <div class="features__item-wrap">
                    <div class="features__item-two">
                        <div class="features__icon-two">
                            <i class="fi fi-bs-city" style="color: #b5b5b6;"></i>
                        </div>
                        <div class="features__content-two">
                            <h2 class="title" style="text-transform:none;font-family: Bebas Neue;">Promotion touristique</h2>
                            <p>There many variations passag esmery available the majore many variatis passages remery ailable.</p>
                        </div>
                    </div>
                    <div class="features__item-two">
                        <div class="features__icon-two">
                            <i class="fi fi-bs-chart-mixed-up-circle-dollar" style="color: #b5b5b6;"></i>
                        </div>
                        <div class="features__content-two">
                            <h2 class="title" style="text-transform:none;font-family: Bebas Neue;">Développement touristique</h2>
                            <p>There many variations passag esmery available the majore many variatis passages remery ailable.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="features__content-wrap" style="padding-top: 110px;padding-bottom: 120px;">
                    <div class="section__title white-title mb-35">
                        <span class="sub-title">NOS OBJECTIFS</span>
                        <h2 class="title" style="text-transform:none;font-family: Bebas Neue;">Faire rayonner le Congo, <br> une destination à vivre.</h2>
                    </div>
                    <img src="assets/img/iconn05.png" alt="shape" class="shape">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features-area-end -->

<!-- services-area -->
<section class="services__area fix" style="background:#efefef">
<div class="container">
<div class="row align-items-center">
<div class="col-md-5">
    <div class="section__title mb-40">
        <span class="sub-title">OFFICE NATIONAL DU TOURISME</span>
        <h2 class="title AvenirBlack" style="text-transform:none;">
            Faire rayonner le Congo, plus qu'une destination.
        </h2>
    </div>
</div>

</div>
<div class="row gutter-24 justify-content-center">
<div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="services__item">
        <div class="services__thumb-wrap">
            <div class="services__thumb">
                <img src="img/all4.jpg">
                <a href="#!" class="btn btn-two border-btn" style="border-radius:50px">En savoir plus 
                <img src="assets/img/icon/right_arrow.svg" class="injectable">
                </a>
            </div>
            <div class="services__icon" style="background:#ff0000">
                <i class="fi fi-rr-megaphone-sound-waves" style="font-size:.7em"></i>
            </div>
        </div>
        <div class="services__content">
            <h3 class="title DinProBold">
                <a href="#!">
                    Nos Events
                </a>
            </h3>
            <p class="AvenirLight" style="line-height:1.2em">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="services__item">
        <div class="services__thumb-wrap">
            <div class="services__thumb">
                <img src="img/about04.jpg">
                <a href="#!" class="btn btn-two border-btn" style="border-radius:50px">En savoir plus
                <img src="assets/img/icon/right_arrow.svg" class="injectable">
                </a>
            </div>
            <div class="services__icon" style="background:#ff0000">
                <i class="fi fi-rr-airplane-journey" style="font-size:.7em"></i>
            </div>
        </div>
        <div class="services__content">
            <h3 class="title DinProBold">
                <a href="#!">
                    Notre Equipe
                </a>
            </h3>
            <p class="AvenirLight" style="line-height:1.2em">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="services__item">
        <div class="services__thumb-wrap">
            <div class="services__thumb">
                <img src="img/echang.jpg" alt="img">
                <a href="#!" class="btn btn-two border-btn" style="border-radius:50px">En savoir plus
                <img src="assets/img/icon/right_arrow.svg" class="injectable">
                </a>
            </div>
            <div class="services__icon" style="background:#ff0000">
                <i class="fi fi-rr-island-tropical" style="font-size:.7em"></i>
            </div>
        </div>
        <div class="services__content">
            <h3 class="title DinProBold">
                <a href="#!">
                    Notre Mission
                </a>
            </h3>
            <p class="AvenirLight" style="line-height:1.2em">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-4 col-sm-6">
    <div class="services__item">
        <div class="services__thumb-wrap">
            <div class="services__thumb">
                <img src="img/img-06.jpg" alt="img">
                <a href="#!" class="btn btn-two border-btn" style="border-radius:50px">En savoir plus 
                <img src="assets/img/icon/right_arrow.svg" class="injectable"></a>
            </div>
            <div class="services__icon" style="background:#ff0000">
                <i class="fi fi-rr-lion-head" style="font-size:.7em"></i>
            </div>
        </div>
        <div class="services__content">
            <h3 class="title DinProBold">
                <a href="#!">
                    Qui sommes-nous?
                </a>
            </h3>
            <p class="AvenirLight" style="line-height:1.2em">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
            </p>
        </div>
    </div>
</div>
</div>
</div>

<div class="services__shape-wrap">
    <img src="assets/img/iconn01.png" alt="shape">
    <img src="assets/img/iconn02.png" alt="shape" data-aos="fade-right" data-aos-delay="400">
</div>

</section>
<!-- services-area-end -->


<!-- video-area -->
<section class="video__area">
<div class="video__bg" data-background="assets/img/kin2.jpg" style="z-index: -1;"></div>
<div class="container">
<div class="row align-items-center">
    <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
        <div class="video__play-btn">
            <a href="https://www.youtube.com/watch?v=Mcikz0u2asY" class="play-btn popup-video"><i class="fas fa-play"></i></a>
        </div>
    </div>
    <div class="col-xl-5 col-lg-6">
        <div class="video__content">
            <div class="section__title white-title">
                <span class="sub-title">
                    OFFICE NATIONAL DU TOURISME
                </span>
                <h2 class="title AvenirBlack" style="text-transform:none;">
                    Notre participation dans la politique nationale du tourisme<span style="color:#1a9dd9">.</span>
                </h2>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- video-area-end -->


<!-- area-bg -->
<div class="area__bg section-pt-130" data-background="assets/img/bg/vector_bg03.svg">

            <!-- project-area -->
            <section class="project__area-two section-pb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="section__title white-title mb-50">
                                <span class="sub-title">
                                    NOS EVENTS
                                </span>
                                <h2 class="title AvenirBlack" style="text-transform:none;">Les événements auxquels nous participons<span style="color:#fdc818">.</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4">
                            <div class="view-all-btn text-end mb-50">
                                <a href="#!" class="btn white-btn">En savoir plus<img src="assets/img/icon/right_arrow.svg" alt="" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container project-active-two">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="project__item-two wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <div class="project__thumb-two">
                                        <a href="project"><img src="assets/img/miss.jpeg" alt="img"></a>
                                    </div>
                                    <div class="project__content-two">
                                        <h2 class="title"><a href="#!">Miss Univers</a></h2>
                                        <span>Juillet 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project__item-two wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <div class="project__thumb-two">
                                        <a href="#!"><img src="assets/img/fest.jpg" alt="img"></a>
                                    </div>
                                    <div class="project__content-two">
                                        <h2 class="title"><a href="#!">Festival Amani</a></h2>
                                        <span>Août 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="project__item-two wow img-custom-anim-top" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <div class="project__thumb-two">
                                        <a href="#!"><img src="assets/img/sct2024.jpg" alt="img"></a>
                                    </div>
                                    <div class="project__content-two">
                                        <h2 class="title"><a href="#!">SCT 2024</a></h2>
                                        <span>Novembre 2024</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- project-area-end -->

        </div>
        <!-- area-bg-end -->

        <!-- blog-post-area -->
        <section class="blog__post-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section__title mb-40">
                            <span class="sub-title">NOS ACTUALITÉS</span>
                            <h2 class="title AvenirBlack" style="text-transform:none;">Découvrez nos articles</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="view-all-btn text-end mb-40">
                            <a href="#!" class="btn btn-two" style="border-radius:50px">Tout Explorer <img src="assets/img/icon/right_arrow.svg" alt="" class="injectable"></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">


                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="#!" class="shine__animate-link">
                                    <img src="assets/img/460966922_956809176483345_3343471286013160391_n.jpg">
                                </a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>25 Nov, 2024</li>
                                    </ul>
                                </div>
                                <h3 class="title AvenirBlack">
                                    <a href="#!">Découvrez la ville de Kinshasa By Night</a>
                                </h3>
                                <p class="AvenirLight">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore...
                                </p>
                                <a href="#!" class="btn btn-two" style="border-radius:50px">En savoir plus 
                                    <img src="assets/img/icon/right_arrow.svg" class="injectable">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="#!" class="shine__animate-link"><img src="assets/img/249871207_612218000131165_4623418266421449536_n.jpg" alt="img"></a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>25 Nov, 2024</li>
                                    </ul>
                                </div>
                                <h3 class="title AvenirBlack">
                                    <a href="#!">Découvrez la ville de Kinshasa By Night</a>
                                </h3>
                                <p class="AvenirLight">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore...
                                </p>
                                <a href="#!" class="btn btn-two" style="border-radius:50px">En savoir plus 
                                    <img src="assets/img/icon/right_arrow.svg" class="injectable">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="#!" class="shine__animate-link"><img src="assets/img/kin.jpg" alt="img"></a>
                            </div>
                            <div class="blog__post-content">
                                <div class="blog__meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>25 Nov, 2024</li>
                                    </ul>
                                </div>
                                <h3 class="title AvenirBlack">
                                    <a href="#!">Découvrez la ville de Kinshasa By Night</a>
                                </h3>
                                <p class="AvenirLight">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore...
                                </p>
                                <a href="#!" class="btn btn-two" style="border-radius:50px">En savoir plus 
                                    <img src="assets/img/icon/right_arrow.svg" class="injectable">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->

        

    </main>
    <!-- main-area-end -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer -->



    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/svg-inject.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        SVGInject(document.querySelectorAll("img.injectable"));
    </script>
    <script type="text/javascript">
    // Initialiser le Swiper avec la configuration des 3 slides
var swiper = new Swiper('.swiper-main-container', {
    loop: true,  // Active la boucle infinie
    slidesPerView: 1,  // Affiche un slide à la fois
    spaceBetween: 0,  // Espacement entre les slides
    navigation: {
        nextEl: '.swiper-button-next',  // Bouton suivant
        prevEl: '.swiper-button-prev',  // Bouton précédent
    },
    pagination: {
        el: '.swiper-pagination',  // Pagination en bas à droite
        clickable: true,
    },
    autoplay: {
        delay: 10000,  // Délai entre les transitions (en ms)
    },
});

// Fonction pour activer/désactiver le son
function toggleMute() {
    var video = document.getElementById("video-slide");
    var soundIcon = document.getElementById("sound-icon");

    // Toggle mute on the video
    if (video.muted) {
        video.muted = false;
        soundIcon.src = "assets/img/icon/icon-unmuted.svg";  // Icône du son activé
    } else {
        video.muted = true;
        soundIcon.src = "assets/img/icon/icon-muted.svg";  // Icône du son désactivé
    }
}


</script>
<script type="text/javascript">
// Sélectionner la navbar
const navbar = document.getElementById('barsInfo');
navbar.classList.add('text-white');
// Ajouter un événement de défilement
window.addEventListener('scroll', function() {
    if (window.scrollY <= 100) {
        navbar.classList.add('text-white'); 
    } else {
        navbar.classList.remove('text-white');
    }
});
</script>
</body>

</html>