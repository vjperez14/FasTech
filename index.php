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
  <title>FasTech</title>
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
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
          <li class="nav-item"><a href="#section-counter" class="nav-link">Clients</a></li>
          <li class="nav-item"><a href="#company" class="nav-link">Our Company</a></li>
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
        <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="images/main.png" alt="">
        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
          <div class="text mt-5"><br><br>
            <span class="subheading">WHO WE ARE</span>
            <h1 class="mb-3"><span>Safe,</span> <span>Secure,</span> <span>Reliable.</span></h1>
            <p>We are in the business of digital solutions. FasTech provides complete computer services and IT support
              to our customers in a friendly and helpful manner.
              Our team of experts offers a variety of services to local businesses and home.</p>
            <br>
            <p><a href="appointment.php" class="btn btn-primary px-4 py-3">Set An Appointment</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="ftco-section services-section bg-light" id="services">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <img src="images/undraw_podcast_q6p7.svg" width="450px" height="400px" alt=""><br>
          <span class="subheading1">WHAT WE DO</span>
          <h2 class="mb-4">Our Services</h2>
          <p>FasTech work together with you to turn your digital challenges into opportunities and develop cutting-edge
            solutions that are tailored to you.</p><br>
        </div>
      </div>
      <br><br>
      <div class="row">
        <p style="font-size: 12px;"><i>&nbsp &nbsp *Prices may still go below or beyond this range depending on the
            actual case diagnosis of the technician.</i></p>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-cloud"></span>
            </div>
            <div class="media-body pl-4">
              <a href="service1.php">
                <h3 class="heading">Troubleshooting & Networking Installation</h3>
              </a>
              <p class="mb-0"><i>Price Range: ₱1,500 - ₱4,000</i></p>
              <p class="mb-0">These are the two most common types of computer repair services for businesses. These
                include network setup, training, network fixes, and related problems.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center order-md-last">
              <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
              <a href="service3.php">
                <h3 class="heading">Hardware & Software Repair and Installation</h3>
              </a>
              <p class="mb-0"><i>Price Range: ₱1,200 - ₱5,500</i></p>
              <p>This is for physical damages that are incurred by the computer or its accessories. This includes
                installing new hardware, repair or updating hardware.Software repair services include Operating System
                and software installation that is based on the terms of MIT's license agreements with software vendors.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-life-insurance"></span>
            </div>
            <div class="media-body pl-4">
              <a href="service4.php">
                <h3 class="heading">Virus and Malware Removal</h3>
              </a>
              <p class="mb-0"><i>Price Range: ₱1,700 - ₱5,000</i></p>
              <p>In this service computer technicians ensure that the virus will be removed without risking the
                important data or information on your computer. You can also get virus removal services online, as well
                as complete services that include all the steps that are required to get your computer up and running
                problem-free.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center order-md-last">
              <span class="flaticon-cloud-computing"></span>
            </div>
            <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
              <a href="service5.php">
                <h3 class="heading">Data Recovery & Backup Services</h3>
              </a>
              <p class="mb-0"><i>Price Range: ₱2,000 - ₱4,500</i></p>
              <p>Sometimes, due to issues such as hardware crashes or a virus, your important data might get lost. It
                might not possible for you to recover the data, but professional computer technicians can recover the
                data by tracking information. </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-flex align-items-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-settings"></span>
            </div>
            <div class="media-body pl-4">
              <a href="service6.php">
                <h3 class="heading">Maintenance Services, Systems Setup and Configuration</h3>
              </a>
              <p class="mb-0"><i>Price Range: ₱1,000 - ₱3,500</i></p>
              <p>Your home and business computers require constant updating and tune-ups. This regular maintenance will
                not only enhance the working speed of your computer, but it will also increase its lifetime. Maintenance
                service includes file cleanup, upgrading and installing new windows or programs and general inspections.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section ftco-counter img" id="section-counter">
    <div class="container">
      <br><br>
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          <span class="subheading">Thousands of people and businesses trusted us</span>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <br><br>
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="1000">0</strong>
                  <span>Satisfied Customers</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="30">0</strong>
                  <span>Awards Won</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="200">0</strong>
                  <span>Registered Websites and Portals</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="16">0</strong>
                  <span>Cities Catered</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading1">WHY CHOOSE US</span>
          <h2 class="mb-4">Our Clients Say</h2>
          <p>Our team has been on a mission to help organizations of various sizes solve digital challenges.</p>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(images/person_3.png)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">I found that you guys performed the work very professionally and that your response
                    time, when issues were identified, was great. Overall, it has been great working together on this
                    and I believe that we will have more work that we can do together in a near future. I will surely
                    recommend you to my fellow architects who wants fast and reliable digital solutions.</p><br>
                  <p class="name">Eric Dela Cruz, Taguig</p>
                  <span class="position">Architect</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(images/person_2.png)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">I had a big problem when my business PCs had an issue and lots of our files were lost.
                    I am really hesitant to go outside due to the pandemic, that is why when I found out about FasTech,
                    I immediately booked a repair appointment with them. And I must say that FasTech really did a great
                    job. My files were retrieved in less than an hour. Thank you so much FasTech!</p><br>
                  <p class="name">Oliver Versoza, Quezon City</p>
                  <span class="position">Entrepreneur</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap p-4 text-center">
                <div class="user-img mb-4" style="background-image: url(images/persons_1.jpg)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4">Given the situation that we have right now wherein going outside is too risky for
                    anyone's health, I found FasTech's home service repair shop as a life-saver. I am currently working
                    from home as an ESL teacher and my computer suddenly stopped working. I contacted FasTech and I must
                    say that their company name speaks for itself, for they were able to fix my problem immedately.
                    Thank you FasTech!</p>
                  <p class="name">Georgia Santos, Makati</p>
                  <span class="position">ESL Teacher</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <section class="ftco-section bg-light" id="company">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3 ftco-animate">
        <div class="col-md-12 text-center heading-section ftco-animate">
          <br><br><br>
          <span class="subheading1">WHO WE ARE</span>
          <h2>Our Company</h2>
          <p>FasTech is the leading computer and laptop repair services partner for small businesses and home PC users
            in Metro Manila. We were able to delivered undoubtedly excellent service with competitive pricing to
            thousands of satisfied customers nationwide. FasTech is the local company you can count on for all your
            computer repair and maintenance needs.
            <br><br>
            We are a strong team of dedicated and trusted computer experts ready to undertake all the digital related
            tasks that help you meet your needs. We believe the best interactive experiences come from the sweet harmony
            of safety, reliability and innovative use of technology.
            <br><br>
            MCS provide hardware and software support and maintenance for the following laptop and desktop computer
            manufacturers Acer, Advent, Alienware, Apple Mac, Asus, Compaq, Dell, eMachines, Fujitsu, Gateway, HP, IBM,
            Lenovo, LG, Mesh, MSI, NEC, Packard Bell, Panasonic, Philips, Samsung, Sharp, Sony VAIO, Toshiba and Generic
            brands computers and laptop.
            Our business-driven approach separates us from typical computer service provider and IT support, we have
            built a reputation for creating a positive return on investment for our clients.
            <br><br>
            Our main focus is always on the client’s business model and plans. We have never believed that the right
            approach to every situation is “more hardware”. Instead, we spend as much time looking at the business goals
            of the clients as we do looking at the enterprise computing issues at hand. Our focus truly is on your
            business, and we believe that the more we know about how your company works, the more precise our solution
            will be.
        </div>
        </p>
        <div class="col-md-3 ftco-animate">
          <br>
          <p class="mb-0"><a href="developers.php" class="btn btn-primary py-3 px-4">Developers' Profile</a></p>
        </div>
      </div>
    </div>
    <br><br>
  </section>
  <section class="ftco-section ftco-partner">
    <div class="container">
      <div class="row">
        <div class="col-sm ftco-animate">
          <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
        </div>
        <div class="col-sm ftco-animate">
          <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
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
              <li><a href="service3.php" class="py-2 d-block">Hardware & Software Repair and Installation</a></li>
              <li><a href="service4.php" class="py-2 d-block">Virus and Malware Removal</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"></h2>
            <ul class="list-unstyled">
              <br>
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
<!-- BEGIN PHP Live! HTML Code [V3] -->
<span style="color: #0000FF; text-decoration: underline; line-height: 0px !important; cursor: pointer; position: fixed; bottom: 0px; right: 20px; z-index: 20000000;" id="phplive_btn_1600915952"></span>
<script data-cfasync="false" type="text/javascript">

(function() {
var phplive_e_1600915952 = document.createElement("script") ;
phplive_e_1600915952.type = "text/javascript" ;
phplive_e_1600915952.async = true ;
phplive_e_1600915952.src = "//pojects.com/phplive/js/phplive_v2.js.php?v=0%7C1600915952%7C0%7C&" ;
document.getElementById("phplive_btn_1600915952").appendChild( phplive_e_1600915952 ) ;
if ( [].filter ) { document.getElementById("phplive_btn_1600915952").addEventListener( "click", function(){ phplive_launch_chat_0() } ) ; } else { document.getElementById("phplive_btn_1600915952").attachEvent( "onclick", function(){ phplive_launch_chat_0() } ) ; }
})() ;

</script>
<!-- END PHP Live! HTML Code [V3] -->
</body>
</html>