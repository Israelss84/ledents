<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">
  <!-- Page Title -->
  <title>Clínica Dental Le Dents | Acerca</title>
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
    
  
  <section id="about">      
  <div class="st-height-b100 st-height-lg-b30"></div>
      <div class="container">
        <div class="st-section-heading st-style1">
          <h2 class="st-section-heading-title">Acerca de Le Dents</h2>
          <div class="st-seperator">
            <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
            <div class="st-seperator-center"><img src="assets/img/icons/4.png" alt="icon"></div>
            <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
          </div>          
        </div>

        <div class="col">
              
                  <ul>
                    <li>En el año del 2003 se estableció la idea de un consultorio dental que satisficiera las necesidades de la población de San Cristóbal Ecatepec que cumpliera con servicio, calidad y profesionalismo.</li>
                    <li>En 2015 se establece como clínica dental Le Dents con 2 sillones odontológicos y servicio de especialidades.</li>
                    <li>En 2019 Le Dents es una clínica dental con 3 unidades dentales ubicado en Av. Morelos No. 14 en San Cristóbal, Ecatepec, Edo. de México.</li>
                  
                  </ul>
              </div>

        <div class="mt-5">
          <div class="st-imagebox st-style2">
            <div class="row d-flex justify-content-center align-items-center">
              <div class="col-xl-6 col-lg-4 col-md-6 col-sm-8 col-12">
                <div class="st-imagebox-img"><img src="assets/img/crutches.png" alt="service"></div>
                <div class="st-height-b0 st-height-lg-b30"></div>
              </div>              
              <div class="col-xl-6 col-lg-8 col-md-12">
                <div class="st-vertical-middle">
                  <div class="st-vertical-middle-in">
                    <div class="st-imagebox-info">                      

                      <div class="row">
                        <div class="col">
                          <h2 class="st-imagebox-title mb-3">Misión</h2>
                          
                          <p>Le Dents, brinda servicios odontológicos integrales contribuyendo a resolver eficazmente los problemas de salud bucal de nuestros pacientes, aplicando para ello conceptos de atención de excelencia en el servicio, eficiencia y calidez personalizada en la atención.</p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <h2 class="st-imagebox-title mb-3">Visión</h2>
                          
                          <p>Ser la clínica odontológica líder en su área de influencia y ser autosustentable y proveerle a dentistas aledaños a la zona servicio de gabinete radiográfico con lo más avanzado en tecnología y con especialidades odontológicas que reúnan los requisitos máximos de profesionalismo y excelencia, para satisfacer las exigencias de nuestros pacientes y superar sus expectativas, deseando establecer una relación duradera con cada paciente.</p>
                        </div>
                      </div>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>      
      <div class="st-height-b100 st-height-lg-b30"></div>
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

</body>

</html>