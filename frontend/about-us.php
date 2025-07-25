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
    <link rel="stylesheet" href="assets/css/booking.css">
    <link rel="stylesheet" href="assets/css/enquiries.css">
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
                <img src="assets/images/aboutUsImg.png" alt="Hero Image">
            </div>

            <div class="hero-content">
                <h2>About Nananom Farms</h2>
                <p>Rooted in tradition, Grown with purpose.</p>
            </div>
        </div>
      

        <!---our story section--->
        <div class="about-us">
            <h3>About Us</h3>
            <div class="about-content">
                <div class="side-left">
                    <img src="assets/images/Gemini_Generated_Image_2.png" alt="About Us Image">
                    <p>Nananom Farms began with a simple vision to bring pure, natural
                         palm oil from our farm to every kitchen in Ghana.
                          What started as a small family venture has grown into
                           a trusted source of quality palm for homes, business, 
                           and communities. With deep respect for traditional farming
                            methods and a passion for supporting local livelihoods,
                             we work every day to deliver products you can trust.</p>
                </div>
                <div class="side-right">
                    <img src="assets/images/Gemini_Generated_Image_3.png" alt="About Us Image">
                    <p>
                        At Nananom Farms, we believe in preserving the authenticity of palm oil production. From carefully harvesting ripe palm fruits to using traditional processing methods we ensure every batch retains its rich flavor,
                        color, and natural goodness. Our story is one of hard work, community support, and a deep commitment to providing quality products that bring families together over delicious meals.
                    </p>
                </div>
            </div>
            
        </div>

        <!---reasons for booking with us section--->
        <div class="booking-reasons">
            <h2>Why Choose Us</h2>
            <p class="subtitle">We provide exceptional value, quality produce, and unmatched service.</p>
            <ul>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#31610D" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                    </svg>
                    Trusted Local Farm
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#31610D" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                    </svg>
                    Organic & Fresh Produce
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#31610D" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                    </svg>
                    Quick & Easy Booking
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#31610D" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                    </svg>
                    Nationwide Delivery
                </li>
            </ul>
        </div>

    </main>
    <?php
    include_once __DIR__ . '/partials/footer.php';
    ?>
</body>

</html>