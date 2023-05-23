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