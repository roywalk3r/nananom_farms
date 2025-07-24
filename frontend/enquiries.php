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
    <link rel="stylesheet" href="assets/css/enquiries.css">
    <link rel="stylesheet" href="assests/css/location.css">
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
                <img src="assets/images/OPTIONS_1.jpg" alt="Hero Image">
            </div>

            <div class="hero-content">
                <h2>General Enquiries</h2>
                <p>Have questions or need information? Reach out to us , we’re here to help.</p>
            </div>
        </div>
        <!-----general enquiries form----->
        <div class="form-container">
            <h1>Send Us a Message</h1>
            <p class="subtitle">Have a question? We’ll be glad to assist you.</p>

            <form>
                <div class="row">
                    <div class="input-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" name="full_name" placeholder="Enter your full name" />
                    </div>
                    <div class="input-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" placeholder="Enter your email address" />
                    </div>
                </div>

                <div class="row">
                    <div class="input-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" placeholder="Enter your phone number" />
                    </div>
                    <div class="input-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" placeholder="Enter the subject of your enquiry" />
                    </div>
                </div>

                <div class="input-group full-width">
                    <label for="message">Your Message</label>
                    <textarea placeholder="Write your message here" name="message"></textarea>
                </div>

                <div class="submit-section">
                    <button type="submit">Submit Enquiry</button>
                </div>



                <div class="thank-you">
                    <svg width="34" height="26" viewBox="0 0 34 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.62..." fill="#31610D" />
                    </svg>
                    <p>Thank you! We’ve received your enquiry and will get back to you shortly</p>
                </div>
            </form>
        </div>
        <!-----locaction section----->
        <div class="contact-card">
          
                <div class="title">Contact Information</div>
            

            <div class="text location">Location: Nananom Farms, Accra, Ghana</div>
            <div class="text phone">Phone: +233 546 666 123</div>
            <div class="text email">Email: info@nananomfarms.com</div>
            <div class="text whatsapp">WhatsApp: +233 546 666 123</div>

        </div>


    </main>
    <?php
    include_once __DIR__ . '/partials/footer.php';
    ?>
</body>

</html>