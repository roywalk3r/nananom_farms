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
    <!-- <link rel="stylesheet" href="assets/css/booking.css">--->
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
                <img src="assets/images/Gemini_Generated_1.png" alt="Hero Image">
            </div>

            <div class="hero-content">
                <h2>General Enquiries</h2>
                <p>Have questions or need information? Reach out to us , we’re here to help.</p>
            </div>
        </div>
        <!-----service booking form----->
        <div class="form-container">
            <h1>Book a service</h1>
            <p class="subheading">We’re ready to serve you! Book a service appointment by providing your details below.</p>
            <form action="submit.php" method="POST">
                <div class="row">
                    <div class="input-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>

                    <div class="input-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>
                </div>
                <div class="row">
                     <div class="input-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                     <div class="input-group">
                        <label for="date">Preferred Date</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                </div>



                <div class="row">
                   

                    <div class="input-group">
                        <label for="time">Preferred Time</label>
                        <input type="time" id="time" name="time" required>
                    </div>

                    <div class="input-group">
                        <label for="type">Service Type</label>
                        <select id="type" name="type" required>
                            <option value="">-Select Type-</option>
                            <option value="Consultation">Consultation</option>
                            <option value="Site Visit">Site Visit</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="input-group full-width">
                    <label for="message">Additional Notes</label>
                    <textarea id="message" name="message" placeholder="Write your message or request"></textarea>
                </div>

                <div class="submit-section">
                    <button type="submit">Book now</button>
                </div>

                <div class="thank-you">
                    <p>Thank you! Your booking has been received</p>
                </div>
            </form>
        </div>
        </div>

        <div class="hero">
            <div class="overlay"></div>
            <div class="hero-image">
                <img src="assets/images/Gemini_Generated_Image.png" alt="Hero Image">
            </div>

            <div class="hero-content">
                <h2>Ready to Book Your Service?</h2>
                <p>Don’t miss out on our reliable service and top-quality products. Book with Nananom Farms now!</p>
                <a href="enquiries.php" class="ctaBtn ctaBt-main">Book now</a>
            </div>
        </div>


    </main>
    <?php
    include_once __DIR__ . '/partials/footer.php';
    ?>
</body>

</html>