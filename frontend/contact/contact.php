<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
      <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
     
    <?php

    ?>

    <class="main">
      <div class="navbar">
        <div class="icon">
          <h2 class="logo">Nananom</h2>
        </div>
  
        <div class="menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Service Booking</a></li>
          <li><a href="#">Enquiries</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
        </ul>
        </div>
      </div>

      <div class="img">
        <div class="text">
          <h1>Contact Us</h1>
          <p>We'd love to here from you. Get in touch with us for enquiries, orders, or <br>feedback</p>
        </div>
      </div>

      <div class="wrapper">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="title">
            <h1>Do you have any Question?</h1>
            <p>Feel free to contact us!</p>
        </div>
        <section class="contact">
          <div class="image">
            <p>Image</p>
          </div>
          <form name="contact-form" id="contact-form" action="#" method="post">
            <div class="form-row">

                <div class="inputbox">
                    <ion-icon name=""></ion-icon>
                    <input type="text" name="name" required />
                    <label class="label">Your Name</label>
    
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email " name="email" required />
                    <label class="label">Email</label>  
                </div>
            </div>
            <div class="subject">
                <input type="text" name="subject" required />
                <label class="label">Subject</label>
            </div>
            <div class="Message">
                <textarea type="text" name="Message" required></textarea>
                <label class="label">Message</label>
            </div>

            <button class="btn">Submit</button>

          </form>
        </section>
      </div>
    
      <div class="contact-ctn">
        <h1>Get in Touch</h1>
        <div class="ctn">

          <div class="contact-info">            
            
            <div class="info">
              <ion-icon name="location"></ion-icon>
              <span class="primary">Address</span>
              <span class="secondary">Accra, Ghana</span>
            </div>          
            
            <div class="info">
              <ion-icon name="call"></ion-icon>
              <span class="primary">Phone</span>
              <span class="secondary">+233 123 456 789</span>
            </div>

            <div class="info">
              <ion-icon name="mail"></ion-icon>
              <span class="primary">Email</span>
              <span class="secondary">nananom@gmail.com</span>
            </div>
          </div>

          <div id="map-container">
            <div id="leaflet-map"></div>
            
          </div>
        </div>    
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
     <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="contact.js"></script>

</body>
</html>