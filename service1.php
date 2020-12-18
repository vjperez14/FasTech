<?php
  session_start();
  $isActive = isset($_SESSION['email']);
  if($isActive){
    $user = $_SESSION['email'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Troubleshooting & Networking Installlation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="images/iconft.png">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/fastech1.png" width="125" height="120"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="index.php" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="index.php" class="nav-link">Clients</a></li>
          <li class="nav-item"><a href="index.php" class="nav-link">Our Company</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <?php
              switch ($isActive) {
                case 'value':{
                  echo "<li class='nav-item cta'><a href='myaccount.php' class='nav-link'><span>My Account</span></a></li>&nbsp &nbsp
                    <li class='nav-item cta'><a href='logout.php' class='nav-link'><span>Logout</span></a></li> ";
                  break;
                }
                  
                
                default:{
                  echo "<li class='nav-item cta'><a href='login.php' class='nav-link'><span>Log In</span></a></li> &nbsp &nbsp
                  <li class='nav-item cta'><a href='register.php' class='nav-link'><span>Register</span></a></li>";
                  break;
                }
                  
              }
            ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <div class="hero-wrap js-fullheight">
    <div class="overlay"></div>
    <div class="container-fluid px-0">
      <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
        <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="images/1.png" alt="">
        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
          <div class="text mt-5">
            <span class="subheading">SERVICES</span>
            <h1 class="mb-3"><span>Troubleshooting</span> <span>& Networking</span> <span> Installation</span></h1>
            <p>These are the two most common types of computer repair services for businesses. These include network
              setup, training, network fixes, and related problems.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section bg-light" id="tech">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <br><br><br>
          <h2 class="mb-4" style="margin-top:5px;">Security Posture Assessment (SPA)</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 nav-link-wrap mb-1 pb-md-5 pb-sm-1 ftco-animate">
          <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-nextgen-tab" data-toggle="pill" href="#v-pills-nextgen" role="tab"
              aria-controls="v-pills-nextgen" aria-selected="true">Performance & Stress Test</a>
            <a class="nav-link" id="v-pills-performance-tab" data-toggle="pill" href="#v-pills-performance" role="tab"
              aria-controls="v-pills-performance" aria-selected="false">Web Application VA</a>
            <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect" role="tab"
              aria-controls="v-pills-effect" aria-selected="false">Network VA</a>
            <a class="nav-link" id="v-pills-effect-tab" data-toggle="pill" href="#v-pills-effect1" role="tab"
              aria-controls="v-pills-effect1" aria-selected="false">Server VA</a>
          </div>
        </div>
        <div class="col-md-12 align-items-center ftco-animate">
          <div class="tab-content ftco-animate" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-nextgen" role="tabpanel"
              aria-labelledby="v-pills-nextgen-tab">
              <div class="d-md-flex">
                <center>
                  <br>
                  <p>To perform simulated load testing to identify the crash point or the point where the perceptible
                    slowdown is noticed in the request processing.</p>
                  <br><br>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-performance" role="tabpanel"
              aria-labelledby="v-pills-performance-tab">
              <div class="d-md-flex">
                <br>
                <p>To address OWASP Top 10 Vulnerability:<br><br>
                  1. Injection<br>
                  2.Broken Authentication and Session Management (XSS)<br>
                  3. Cross Site Scripting (XSS)<br>
                  4. Insecure Direct Object References<br>
                  5. Security Misconfiguration<br>
                  6. Sensitive Data Exposure<br>
                  7. Missing Function Level Access Control<br>
                  8. Cross Site Request Forgery (CSRF)<br>
                  9. Using Components with Known Vulnerabilities<br>
                  10. Unvalidated Redirects and Forwards<br><br>

                  Penetration Test <br>

                  To identify: <br><br>
                  1. Common Holes in Web<br>
                  2. Bad Password<br>
                  3. Directory Traversal<br>
                  4. Old Directory/Folder<br>
                  5. SQL/MySQL injection<br>
                  6. Blind SQL/ MySQL injection – Cross site scripting<br>
                  7. Cross site forgery<br>
                  8. Bad Configuration<br>
                  10. CGI-BIN Exploit & etc.</p>
                <br><br>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-effect" role="tabpanel" aria-labelledby="v-pills-effect-tab">
              <div class="d-md-flex">
                <br>
                <p>To identify:<br><br>
                  1. Network Mis-configuration<br>
                  2. Open Port In Client Network – Unknown Port<br>
                  3. Weird Connections<br>
                  4. Firewall Configurations & etc.</p>
                <br><br>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-effect1" role="tabpanel" aria-labelledby="v-pills-effect1-tab">
              <div class="d-md-flex">
                <br>
                <p>Server Security Assessment <br>
                  To identify:<br><br>
                  1. Weak Server Configuration<br>
                  2. Weak Password Implementation<br>
                  3. Unpatched services<br>
                  4. Old Account<br>
                  5. Unused account<br>
                  6. Possible Denial of Service (DOS/DDOS) & etc.<br><br>
                  Database Security Assessment<br>
                  To identify:<br><br>
                  1. SQL/MySQL/Oracle/MS Access/Postgres<br>
                  2. Default configuration (setting & setup)<br>
                  3. Connection settings<br>
                  4. Database settings<br>
                  5. User Account settings & etc.</p>
                <br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5 pb-5 align-items-center d-flex">
        <div class="col-md-6">
          <div class="heading-section heading-section-white ftco-animate">
            <span class="subheading">Let us help you</span>
            <h2 style="font-size: 30px;">We are ready to cater your technical concerns</h2>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="price">
            <h3><img src="images/work.png" width="150px" height="170px"></h3>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <p class="mb-0"><a href="appointment.php" class="btn btn-primary py-3 px-4">Set An Appointment</a></p>
        </div>
      </div>
      <br>
      <hr style="color: white;">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 bg-primary p-4">
            <h2 class="ftco-heading-2">FasTech</h2>
            <p>FasTech is an award-winning computer repair & service shop that offers cutting the edge digital
              solutions.</p>
            <ul class="ftco-footer-social list-unstyled mb-0">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Our Services</h2>
            <ul class="list-unstyled">
              <li><a href="service1.php" class="py-2 d-block">Troubleshooting & Networking Installation</a></li>
              <li><a href="service2.php" class="py-2 d-block">Website and Portal Development</a></li>
              <li><a href="service3.php" class="py-2 d-block">Hardware & Software Repair and Installation</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"></h2>
            <ul class="list-unstyled">
              <br>
              <li><a href="service4.php" class="py-2 d-block">Virus and Malware Removal</a></li>
              <li><a href="service5.php" class="py-2 d-block">Data Recovery and Backup Services</a></li>
              <li><a href="service6.php" class="py-2 d-block">Maintenance Services, Systems Setup and Configuration</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Office</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Unit 12 One Corporate Center, San
                    Antonio, Pasig, Philippines</span></li>
                <li><span class="icon icon-phone"></span><span class="text">+02 639 7848</span></li>
                <li><span class="icon icon-envelope"></span><span class="text">inquiries@fastech.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with
            <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">CompuPartners</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>