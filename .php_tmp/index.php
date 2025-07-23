<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Nananom Farms is a web-based palm oil management system for farmers, buyers, and other stakeholders to manage their palm oil business efficiently.">
    <meta name="keywords" content="palm oil, management, farmers, buyers, business, efficient">
    <meta name="author" content="Roy Walk">
    <meta name="copyright" content="Copyright 2022 Nananom Farms">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://kit.fontawesome.com/00a449879e.js" crossorigin="anonymous"></script>
    <title>Nananom Farms | Home</title>
</head>

<body>
    <?php
include_once __DIR__ . '/partials/header.php';
?>
    <main class="container">
        <div class="hero">
            <div class="overlay"></div>
            <div class="hero-image">
                <img src="assets/images/hero_hp_pic.jpeg" alt="Hero Image">
            </div>
            <div class="hero-welcome">
                <img src="assets/images/logo.png" alt="Welcome Image">
                <h3>Welcome!</h3>
            </div>
            <div class="hero-content">
                <h2>Your Trusted Palm Oil Partner</h2>
                <p>Delivering Premium palm oil and reliable farm services, experience,quality tradition, and trust with
                    Nananom Farms.</p>
                <a href="about.php" class="ctaBtn ctaBt-main">Book a Service</a>
            </div>
        </div>
        <div class="about-us">
            <h3>About Us</h3>
            <div class="about-content">
                <div class="side-left">
                    <img src="assets/images/about_us_pic.jpeg" alt="About Us Image">
                    <p>At Nananom Farms, we are passionate about producing 100% pure, locally-sourced palm oil using
                        natural and traditional methods. Nestled in the heart of Ghana, our farm is committed to
                        quality, sustainability, and supporting the local community,one bottle at a time.</p>
                </div>
                <div class="side-right">
                    <img src="assets/images/about_us_pic_on_hp.png" alt="About Us Image">
                    <p>
                        With a deep respect for tradition and nature, Nananom Farms blends time-tested farming practices
                        with modern care to deliver palm oil that’s pure, nutritious, and full of flavor. Every drop
                        reflects our commitment to quality, community, and sustainability from our farm to your table..
                    </p>
                </div>
            </div>
            <a href="about.php" class="ctaBtn">Learn More
                <i class="fa-solid fa-arrow-up-right-from-square showing-arrow"></i>
                <i class="fa-solid fa-arrow-right-from-bracket hidden-arrow"></i>
            </a>
        </div>
        <?php include_once __DIR__ . '/components/featured-section.php'; ?>
        <?php include_once __DIR__ . '/components/what-we-offer.php'; ?>
        <?php include_once __DIR__ . '/components/testimonials.php'; ?>
        <?php include_once __DIR__ . '/components/cta.php'; ?>

    </main>

    <?php
include_once __DIR__ . '/partials/footer.php';
?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".testimonials-carousel", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        }
    });
    </script>

    <!-- <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({

            slideSpeed: 200,
            paginationSpeed: 800,

            //Autoplay
            autoPlay: false,
            goToFirst: true,
            goToFirstSpeed: 1000,

            // Navigation
            navigation: false,
            navigationText: ["prev", "next"],
            pagination: true,
            paginationNumbers: true,

            // Responsive
            responsive: true,
            items: 3,
            itemsScaleUp: false,

            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsMobile: [479, 1]
        })
    });
    </script> -->

</body>

</html>