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

<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg" data-background="img/sas8.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <br>
                    <br>
                    <br>
                    <h1 class="title">Nous Contacter</h1>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="home">Accueil</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                        <span property="itemListElement" typeof="ListItem">Contact</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->




<!-- contact-area -->
<section class="contact__area section-py-120" style="background:#f1F1F1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-map contact-map-two">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.5779151744377!2d15.301260475669622!3d-4.301838146359461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a338ca0a87a23%3A0x5ef8f81c84fb395!2sOffice%20National%20du%20Tourisme%20%2F%20RDC!5e0!3m2!1sfr!2scd!4v1742995507542!5m2!1sfr!2scd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="contact__info-item">
                    <h4 class="title">Nos Bureaux</h4>
                    <p class="info-one">
                        16 Ave Lt. Colonel Lukusa 
                        <br> Kinshasa-Gombe
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact__info-item">
                    <h4 class="title">Nos coordonnées</h4>
                    <h6>Téléphone</h6>
                    <p>
                        <a href="tel:+243970175857">+243 970 175 857</a>
                    </p>
                    <h6>Adresse e-mail</h6>
                    <p>contact@officetourisme.cd</p>
                    <p>info@officetourisme.cd</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact__info-item">
                    <h4 class="title">Rejoignez nous</h4>
                    <div class="offCanvas__social-icon mt-30">
                        <a href="#!">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#!">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="#!">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact__form-wrap">
                    <h2 class="title AvenirBlack" style="text-transform:none;">Laisser nous un message
                        <br>
                        <span style="font-size:.78em" class="AvenirLight">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        </span>
                    </h2>
                    <form action="https://themeadapt.com/tf/logistex/assets/mail.php" class="contact__form" method="POST" id="contact-form">
                        <div class="row gutter-20">
                            <div class="col-lg-4">
                                <div class="form-grp">
                                    <input type="text" name="name" placeholder="Nom complet">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-grp">
                                    <input type="email" name="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-grp">
                                    <input type="tel" name="phone" placeholder="Téléphone">
                                </div>
                            </div>
                        </div>
                        <div class="form-grp">
                            <input type="text" name="subject" placeholder="Objet">
                        </div>
                        <div class="form-grp">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <button class="btn red-btn">Envoyer <img src="assets/img/icon/right_arrow.svg" alt="" class="injectable"></button>
                    </form>
                    <p class="ajax-response mb-0"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->







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

    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function() {
        //console.log("DOM entièrement chargé et analysé");
        
        var path = window.location.pathname;
        //console.log("Chemin actuel :", path);

        var links = document.querySelectorAll("#mainNavigation a");
        //console.log("Liens trouvés :", links.length);

        links.forEach(function(link, index) {
            //console.log("Traitement du lien ", index, " avec le href ", link.getAttribute("href"));
            var linkPath = '/' + link.getAttribute("href");

            if(path === linkPath) {
                //console.log("Ajout de la classe active au lien ", index);
                link.classList.add("active");
            } else {
                //console.log("Retrait de la classe active du lien ", index);
                link.classList.remove("active");
            }
        });
      });
  </script>

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