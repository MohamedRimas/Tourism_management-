<!DOCTYPE html>
<html lang="en">

<head>

<style>
.MYsearchbar{
    background-color: black;
    margin-left: 920px;
}


</style>
    
    <meta charset="utf-8">
    <title>SPA Center - Beauty & Spa HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/Homestyle.css" rel="stylesheet">

    <!--search bar css-->
    <!-- <link href="searchbar.css" rel="stylesheet"> -->

    <!-- containers css -->
    <link href="css/container.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->
   <!-- Navbar & Hero Start -->
   <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Trevelflix</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="http://localhost/Tourisam%20management/Tourism_management-/index.php" class="nav-item nav-link active">Home</a>
                    <a href="package.php" class="nav-item nav-link">Packages</a>
                    <a href="hotel_main.php" class="nav-item nav-link ">Hotel</a>
                    
                 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.html" class="dropdown-item">Ayurvedic</a>
                            <a href="booking.html" class="dropdown-item">Transport Service</a>
                            <a href="team.html" class="dropdown-item">Travel Guides</a>
                        </div>
                    </div>
                   
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu m-0">
                            
                            <li><a href="reset_password.php" class="dropdown-item"><i class="feather icon-lock"></i> Change Password</a></li>
                            <a href="welcome.php" class="dropdown-item">Dashboard</a>
                            
                            <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <a href="register.php" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                

                
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
           
                </div>
            </div>
        </div>
    </div>
   


    <!-- Navbar Start -->

 <!-- header -->
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">

        
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            
            <!-- <a href="Home.html"class="nav-item nav-link ac tive" style="color: black;">Home >> <i>Ayurvedic and Wellness</i> </a> -->
            
            
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 60vh;">
                    <img class="position-absolute w-100 h-100" src="img/ayurveda.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <a href="Home.html" class="nav-item nav-link active" style="float: left;">Home</a> -->
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Ayurvedic and Wellness Centers</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3"> Sri Lankan Ayurvedic Treatment Centers</h3>
                            <p class="mx-md-5 px-5">Find your best ayurvedic center from here</p>
                            
                        </div>
                    </div>
                </div>
                
    <!-- Carousel End -->
    <?php 
   include 'config.php';

  if (isset($_POST['search'])){
    $searchkey = $_POST['search'];
    $sql = "SELECT * FROM `ayurveda` WHERE (name LIKE '%{$searchkey}%' OR location LIKE '%{$searchkey}%')";

  }else
   $sql = "SELECT * FROM `ayurveda` WHERE 1";
   $result = mysqli_query($con,$sql);


   


?>
    <!-- <div style="margin-top: 100px;">
    <form action="" method="POST">
        <input class="MYsearchbar" type="text" name="search" placeholder="Search.." /></form>  </div> -->

<div class="articledes"  id="ariscleid" >
    <section class="room top" id="room" >
        <div class="container" >
          <div class="heading_top flex1">
            <div class="heading" style="width: 500px;">
            <!-- search start -->
            <form action="" method="POST">
        <input  class="MYsearchbar" type="text" name="search" placeholder="Enter Location Or Name......" /></form>

    <!-- search end -->
    
              <h5>All centers around Sri Lanka</h5>
              <h2>Ayurveda and Wellness</h2>
            </div>
            
          </div>
          
    
          <div class="content grid">
            
          
          <?php 
    //    include 'config.php';
    
       while ($row = mysqli_fetch_object($result)){ ?>
        
  
        <div class="box" id="sectionwidth" style="background-color: rgb(255, 255, 255)">
            <div class="img">
            <img src=<?php echo $row -> image ?> >
              </div>
              <div class="text">
                <h3><?php echo $row -> name ?></h3>
                <p> <span><strong>Location: <?php echo $row -> location ?></strong> </span>  </p>
                <h6>E-mail : <?php echo $row -> email ?></h6>
                  <h6>Contact Info :<?php echo $row -> phone ?> </h6><br/>
                  <a id="anchortag"  href="Details.php? id=<?php echo $row -> id ?>"> More Details </a> 
              </div>
        </div>
               <?php } ?> 
               </div>
           
              
            </div>
          </div>
        </section>
    











</div>                                
                                


   
    <!-- About End -->


    <!-- Service Start -->

    
    <!--  -->
    <!-- Service End -->


    <!-- Open Hours Start -->
    <div >
        <div >
            <div >
                
                        <!-- <img class="position-absolute w-100 h-100" src="img/opening.jpg" style="object-fit: cover;"> -->
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Open Hours End -->


    <!-- Pricing Start -->
    
    <!-- Pricing End -->


    <!-- Team Start -->
    
    <!-- Team End -->


    <!-- Testimonial Start -->
   
    <!-- Testimonial End -->


    <!-- Footer Start -->
    
   
    <!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>




    <meta charset="utf-8">
    <title>packages</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="css/hover-style.css" rel="stylesheet">
        <link href="css/style111.css" rel="stylesheet">

    <link href="img/favicon.ico" rel="icon">
        <link href="img/apple-favicon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 

        <!-- Vendor CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/slick/slick.css" rel="stylesheet">
        <link href="vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- custom css link -->
   
<!-- 
  - google font link
--> <link rel="icon" href="assets/images/flight.png" type="image/x-icon">

<link
href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
  rel="stylesheet">



   
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    
  



    <!-- Favicon -->
   
    <link rel="icon" href="assets2/images/flight.png" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets2/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css_home/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css_home/style.css" rel="stylesheet">
</head>

<body>
 


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            
            </div>
           
            </div>
        </div>
    </div>
    <!-- Topbar End -->


 
   

   




    
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    
                        Designed By <a class="border-bottom" href="#">Coding Home</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
  
</body>

</html>