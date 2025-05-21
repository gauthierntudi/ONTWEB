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

    .horizontal-section {
      position: relative;
      height: 100%;
      overflow: hidden;
    }

    .horizontal-wrapper {
      display: flex;
      height: 100%;
      width: max-content;
      position: sticky;
      top: 0;
      left: 0;

      will-change: transform;
      transition: transform 0.2s ease-out;
    }


    .item {
      flex: 0 0 100vw;
      height: 100%;
      overflow-y: auto; /* important pour permettre scroll vertical */
      scroll-snap-align: start;
      padding: 20px;
      box-sizing: border-box;
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
<section class="breadcrumb__area breadcrumb__bg" data-background="img/ab006.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h1 class="title">Qui sommes-nous?</h1>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="accueil">accueil</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                        <span property="itemListElement" typeof="ListItem">Qui sommes-nous?</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->



<!-- about-area -->
<section class="about__area-two section-py-120" style="background:#F1F1F1">
    <div class="container">
        <div class="row align-items-center justify-content-center gutter-24">
            
            <div class="col-lg-6">
                <div class="about__content-two">
                    <div class="section__title section__title-two mb-20">
                        <span class="sub-title">Office National du Tourisme (ONT)</span>
                        <h2 class="title" style="text-transform: none;">Qui sommes-nous<span style="color:#ff0000">?</span></h2>
                    </div>
                    <p class="AvenirLight" style="line-height: 1.37em;font-size: 1.1em;">
                        L'ONT existe depuis 1986. Son objet social consiste à assurer le plus largement possible, et par tous les moyens, le développement et la promotion du tourisme national et provincial.
                        <br>
                        L'ONT met en œuvre la politique du gouvernement en matière de tourisme. Le tourisme est un secteur économique majeur et il est primordial de faire connaître la diversité du Congo RDC et par la même occasion d'attirer des investissements indispensables au développement du pays.
                    </p>
                    <br>
                    <p class="AvenirLight" style="line-height: 1.37em;font-size: 1.1em;">
                        Modeniscing elit. Aliquam vulputate, tortor nec com ultri viverra Suspen disse faucibus sed dolor eget Sed id urna. hiftler Group irepresentatilve loisticsti operator providings.Modeniscing elit. Aliquam vulputate, tortor nec com ultri viverra Suspen disse faucibus sed dolor eget.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 col-md-9">
                <div class="about__img-two">
                    <img src="img/ab004.jpg" alt="img" data-aos="fade-right" data-aos-delay="400" style="border-radius:30px">
                    <img src="img/ab003.jpg" alt="img" data-aos="fade-up" data-aos-delay="600" style="border-radius:30px">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- about-area-end -->


<section class="horizontal-section">
  <div class="horizontal-wrapper">
    <div class="item" style="background:#ff0000">
        <h2>Slide 2</h2>
      <p style="height: 150vh;">Contenu item</p>
    </div>
    <div class="item" style="background:#ff8800">
      <h2>Slide 2</h2>
      <p style="height: 150vh;">Contenu très long qui dépasse la hauteur de l’écran</p>
    </div>
    <div class="item" style="background:#212121">
      <h2>Slide 3</h2>
      <p>Fin du slide</p>
    </div>
  </div>
</section>


<!-- about-area -->
<section class="about__area pt-120 pb-120">
<div class="container">
    <div class="row align-items-center justify-content-center">
        
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

        <div class="col-lg-6 col-md-8">
            <div class="about__img">
                <img src="img/about.png" alt="img">
                <img src="img/about01.png" alt="img" data-aos="fade-right" data-aos-delay="200">
                <img src="assets/img/about04.png" alt="img" data-aos="fade-down" data-aos-delay="400">
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








<!-- blog-post-area -->
<section class="blog__post-area" style="background:#F1F1F1">
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
      document.addEventListener("DOMContentLoaded", function() {
        //console.log("DOM entièrement chargé et analysé");
        
        var path = window.location.pathname;
        const allAbout = document.querySelector('.allAbout');
        //console.log("Chemin actuel :", path);

        var links = document.querySelectorAll("#mainNavigation a");
        //console.log("Liens trouvés :", links.length);

        links.forEach(function(link, index) {
            //console.log("Traitement du lien ", index, " avec le href ", link.getAttribute("href"));
            var linkPath = '/' + link.getAttribute("href");

            if(path === linkPath) {
                //console.log("Ajout de la classe active au lien ", index);
                link.classList.add("active");
                allAbout.classList.add('active');

            } else {
                //console.log("Retrait de la classe active du lien ", index);
                link.classList.remove("active");
            }
        });
      });
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
<script type="text/javascript">
const section = document.querySelector('.horizontal-section');
const wrapper = section.querySelector('.horizontal-wrapper');
const items = wrapper.querySelectorAll('.item');

let scrollLeft = 0;
let sectionTop = 0;
let sectionBottom = 0;
let isInSection = false;

function updateMetrics() {
  sectionTop = section.offsetTop;
  sectionBottom = sectionTop + wrapper.scrollWidth;
  section.style.height = `${wrapper.scrollWidth}px`;
}

function wheelHandler(e) {
  if (!isInSection) return;

  const activeItem = Array.from(items).find(
    item => {
      const rect = item.getBoundingClientRect();
      return rect.left >= 0 && rect.left < window.innerWidth;
    }
  );

  const isItemScrollable = activeItem && activeItem.scrollHeight > window.innerHeight;
  const atTop = activeItem.scrollTop === 0;
  const atBottom = activeItem.scrollTop + activeItem.clientHeight >= activeItem.scrollHeight;

  // Si l'item est scrollable ET qu'on n'est pas bloqué aux extrémités, on autorise le scroll
  if (isItemScrollable && !((e.deltaY < 0 && atTop) || (e.deltaY > 0 && atBottom))) {
    return; // Laisse faire le scroll vertical dans l'item
  }

  e.preventDefault();
  scrollLeft += e.deltaY;
  scrollLeft = Math.max(0, Math.min(scrollLeft, wrapper.scrollWidth - window.innerWidth));
  wrapper.style.transform = `translateX(-${scrollLeft}px)`;
}

function onScroll() {
  const scrollY = window.scrollY;
  isInSection = scrollY >= sectionTop && scrollY < sectionBottom;

  if (!isInSection) {
    wrapper.style.transform = ''; // reset transform en dehors
    scrollLeft = 0;
  }
}

updateMetrics();
window.addEventListener('resize', updateMetrics);
window.addEventListener('scroll', onScroll);
window.addEventListener('wheel', wheelHandler, { passive: false });



</script>
</body>
</html>