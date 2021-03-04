<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <!-- Page Title -->
  <title>Clínica Dental Le Dents | Contacto</title>
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.png" />
  <!-- Stylesheets -->
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/lightgallery.min.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/jQueryUi.min.css" />
  <link rel="stylesheet" href="assets/css/textRotate.css" />
  <link rel="stylesheet" href="assets/css/select2.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="st-perloader">
    <div class="st-perloader-in">
        <img src="assets/img/logo.png" alt="Clínica Dental Le Dents">
    </div>
  </div> 

  <!-- Start Header Section-->
  <?php
    include('estructura/menu.php');
  ?>
  <!-- End Header Section -->

  <div class="st-content">
    
  <section class="st-shape-wrap" id="contact">
      <div class="st-shape1"><img src="assets/img/shape/contact-shape1.svg" alt="shape1"></div>
      <div class="st-shape2"><img src="assets/img/shape/contact-shape2.svg" alt="shape2"></div>
      <div class="st-height-b120 st-height-lg-b80"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">Contáctanos</h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
          </div>
          <div class="st-section-heading-subtitle">Tu opinión es importante para nosotros</div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div id="st-alert" style="display: none;"></div>
            <form action="http://devhtml.laralink.com/nischinto-html/nischinto/assets/php/mail.php" class="row st-contact-form st-type1" method="post" id="contact-form">
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Nombre</label>
                  <input type="text" id="name" name="name"  required="">
                </div>
              </div><!-- .col -->
              <div class="col-lg-6">
                <div class="st-form-field st-style1">
                  <label>Email</label>
                  <input type="text" id="email" name="email"  required="">
                </div>
              </div><!-- .col -->
              
              <div class="col-lg-12">
                <div class="st-form-field st-style1">
                  <label>Su Mensaje</label>
                  <textarea cols="30" rows="10" id="msg" name="msg"  required=""></textarea>
                </div>
              </div><!-- .col -->
              <div class="col-lg-12">
                <div class="text-center">
                  <div class="st-height-b10 st-height-lg-b10"></div>
                  <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="submit" name="submit">Enviar Mensaje</button>
                </div>
              </div><!-- .col -->
            </form>
          </div><!-- .col -->
        </div>
      </div>
      <div class="st-height-b120 st-height-lg-b80"></div>
    </section>
    


    <div class="st-google-map">
    <?php 
        include('estructura/mapa.php')
      ?>
    </div>
  </div>

  <?php 
    include('estructura/footer.php')
  ?>


  <!-- Scripts -->
  <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.pkg.min.js"></script>
  <script src="assets/js/jquery.slick.min.js"></script>
  <script src="assets/js/mailchimp.min.js"></script>
  <script src="assets/js/counter.min.js"></script>
  <script src="assets/js/lightgallery.min.js"></script>
  <script src="assets/js/ripples.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jQueryUi.js"></script>
  <script src="assets/js/textRotate.min.js"></script>
  <script src="assets/js/select2.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script>
    $('.carousel').carousel({
      interval: 9000
    })
  </script>

   <!-- The core Firebase JS SDK is always required and must be listed first -->
   <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.4/firebase-firestore.js"></script>
  <script src="assets/js/firebase.js"></script>
  <script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>

</body>

</html>