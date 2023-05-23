<!DOCTYPE html>
<html lang="en">

<head>


<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
    --primary:#0077b6;
    --secondary:#48cae4;
    --black:#333;
    --white:#fff;
    --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
}

*{
    font-family: 'Poppins', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 75.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: var(--primary);
    border-radius: .5rem;
}

section{
    padding: 5rem 7%;
}

.heading{
    font-size: 4rem;
    color: var(--primary);
    text-align: center;
    text-transform: uppercase;
    font-weight: bolder;
    margin-bottom: 3rem;
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    padding: 1rem 3rem;
    background: var(--primary);
    border-radius: .5rem;
    color: var(--white);
    font-size: 1.7rem;
    cursor: pointer;
}

.btn:hover{
    background: var(--secondary);
}

/* header */





#menu-btn{
    display: none;
    font-size: 2.5rem;
    margin-left: 1.7rem;
    cursor: pointer;
    color: var(--black);
}

#menu-btn:hover{
    color: var(--primary);
}

/* end */

/* home */

.home{
    padding: 0;
}

.home .slide{
    min-height: 100vh;
    background-size: cover !important;
    background-position: center !important;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: -1;
}

.home .slide .content{
    width: 80rem;
    text-align: center;
}

.home .slide .content h3{
    font-size: 4rem;
    text-transform: uppercase;
    color: var(--white);
    line-height: 1.1;
    padding: 2rem 0;
}

.swiper-button-next,
.swiper-button-prev{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    background: var(--white);
    color: var(--black);
}

.swiper-button-next:hover,
.swiper-button-prev:hover{
    background: var(--primary);
    color: var(--white);
}

.swiper-button-next::after,
.swiper-button-prev::after{
    font-size: 2rem;
}

/* end */

/* availability */

.availability form{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    background: #eee;
    padding: 2rem;
    border-radius: .5rem;
}

.availability form .box{
    flex: 1 1 20rem;
}

.availability form .box p{
    font-size: 2rem;
    color: var(--primary);
}

.availability form .box .input{
    width: 100%;
    padding: 1rem;
    font-size: 1.8rem;
    color: var(--black);
    margin: 1rem 0;
    border-radius: .5rem;
}

/* end */

/* about */


/* end */

/* rooms */

.room .slide{
    background: var(--white);
    border: .1rem solid rgba(0, 0, 0, 0.2);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    margin-bottom: 4rem;
}

.room .slide .image{
    height: 25rem;
    width: 100%;
    padding: 1.5rem;
    overflow: hidden;
    position: relative;
}

.room .slide .image img{
    width: 100%;
    height: 100%;
    border-radius: .5rem;
    object-fit: cover;
}

.room .slide .image .price{
    position: absolute;
    top: 2.5rem; left: 2.5rem;
    background: var(--primary);
    color: var(--white);
    font-size: 1.7rem;
    padding: .5rem 1rem;
    border-radius: .5rem;
    text-transform: lowercase;
}

.room .slide .image .fa-shopping-cart{
    position: absolute;
    top: 2.5rem; right: 2.5rem;
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    text-align: center;
    font-size: 2rem;
    background: var(--white);
    color: var(--black);
    border-radius: 50%;
}

.room .slide .image .fa-shopping-cart:hover{
    background: var(--secondary);
    color: var(--white);
}

.room .slide .content{
    padding: 2rem;
    padding-top: 0;
}

.room .slide .content h3{
    font-size: 2.5rem;
    color: var(--black);
}

.room .slide .content p{
    font-size: 1.6rem;
    color: #666;
    padding: .5rem 0;
    line-height: 1.5;
}

.room .slide .content .stars{
    padding: 1rem 0;
}

.room .slide .content .stars i{
    font-size: 1.7rem;
    color: var(--primary);
}

/* end */

/* services */

.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(16rem,1fr));
    gap: 2rem;
}

.services .box-container .box{
    text-align: center;
}

.services .box-container .box img{
    height: 10rem;
    margin-bottom: .7rem;
}

.services .box-container .box h3{
    font-size: 1.7rem;
    color: var(--black);
    padding: .5rem 0;
}

/* end */

/* gallery */

.gallery .slide{
    height: 30rem;
    position: relative;
    overflow: hidden;
}

.gallery .slide img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.gallery .slide .icon{
    display: none;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0; left: 0;
    z-index: 10;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.gallery .slide .icon i{
    font-size: 6rem;
    color: var(--white);
}

.gallery .slide:hover .icon{
    display: flex;
}

/* end */

/* review */

/* end */

/* faq */

.faqs .row{
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    align-items: center;
}

.faqs .row .image{
    flex: 1 1 40rem;
}

.faqs .row .image img{
    width: 100%;
}

.faqs .row .content{
    flex: 1 1 40rem;
}

.faqs .row .content .box{
    margin-top: 2rem;
}

.faqs .row .content .box h3{
    font-size: 2rem;
    color: var(--primary);
    padding: 1.5rem;
    cursor: pointer;
}

.faqs .row .content .box p{
    font-size: 1.6rem;
    padding: 1.5rem 2rem;
    line-height: 2;
    color: var(--secondary);
    box-shadow: var(--box-shadow);
    display: none;
}

.faqs .row .content .box.active p{
    display: inline-block;
}

/* end */

/* reservation */

.reservation form{
    padding: 2rem;
    border: .2rem solid rgba(0, 0, 0, 0.1);
    border-radius: 1.5rem;
}

.reservation form .container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.reservation form .container .box{
    flex: 1 1 40rem;
}

.reservation form .container .box p{
    font-size: 1.8rem;
    color: var(--primary);
}

.reservation form .container .box .input{
    font-size: 1.8rem;
    width: 100%;
    padding: 1rem 0;
    margin: 1rem 0;
    border-bottom: .2rem solid rgba(0, 0, 0, 0.1);
    color: var(--black);
}

/* end */

/* footer */



















/* media queries */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding: 2rem 3rem;
    }

}

@media (max-width: 768px){

    #menu-btn{
        display: inline-block;
    }

    .header .navbar{
        position: absolute;
        top: 110%; right: -110%;
        width: 30rem;
        box-shadow: var(--box-shadow);
        background: var(--white);
        border-radius: .5rem;
    }

    .header .navbar.active{
        right: 2rem;
        transition: .4s linear;
    }

    .header .navbar a{
        font-size: 2rem;
        margin: 2rem 2.5rem;
        display: block;
    }

    .home .slide .content{
        width: 50rem;
    }

    .review .review-slider{
        width: 100%;
        padding: 1rem;
        padding-top: 15%;
    }

}

@media (max-width: 450px){

    html{
        font-size: 50%;
    }

    .home .slide .content{
        width: 30rem;
    }

    .home .slide .content h3{
        font-size: 3rem;
    }

}


.MYsearchbar{
    background-color: black;
    margin-left: 800px;
}



</style>


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

    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
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
    <!-- Navbar & Hero End -->

   <!-- header -->

   <header class="header">

      

    

      <div id="menu-btn" class="fas fa-bars"></div>

   </header>

   <!-- end -->

   <!-- home -->

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-slide1.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide2.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide3.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide4.jpg) no-repeat;">
               <div class="content">
                  <h3>it's where dreams come true</h3>
                  <a href="#" class="btn"> visit our offer</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- end -->

   

   <!-- about -->

   <section class="services">

      <div class="box-container">

         <div class="box">
            <img src="images/service1.png" alt="">
            <h3>swimming pool</h3>
         </div>

         <div class="box">
            <img src="images/service2.png" alt="">
            <h3>food & drink</h3>
         </div>

         <div class="box">
            <img src="images/service3.png" alt="">
            <h3>restaurant</h3>
         </div>

         <div class="box">
            <img src="images/service4.png" alt="">
            <h3>fitness</h3>
         </div>

         <div class="box">
            <img src="images/service5.png" alt="">
            <h3>beauty spa</h3>
         </div>

         <div class="box">
            <img src="images/service6.png" alt="">
            <h3>resort beach</h3>
         </div>

      </div>

   </section>

   <!-- end -->



   <section class="gallery" id="gallery">

      <h1 class="heading">our gallery</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/gallery1.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery2.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery3.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery4.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery5.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery6.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>
<br>
<!--search-->
   <?php 
   include 'admin/connect.php';

  if (isset($_POST['search'])){
    $searchkey = $_POST['search'];
    $sql = "SELECT photo,hotel_name,room_type,price FROM `room` WHERE (room_type LIKE '%{$searchkey}%')";

  }else
   $sql = "SELECT * FROM `room` WHERE 1";
   $result = mysqli_query($conn,$sql);
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
        <input  class="MYsearchbar" type="text" name="search" placeholder="Search......"/></form>

    <!-- search end -->
<br>
        <!--start-->
        <section>
        <div style = "margin-left:0;" class = "container">
		    <div class = "panel panel-default">
			<div class = "panel-body">
				<?php
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					//while($fetch = $query->fetch_array()){
                    while ($row = mysqli_fetch_object($result)){
				?>
					<div class = "well" style = "height:300px; width:100%;">
						<div style = "float:left;">
							<img src = "photo/<?php echo $row -> photo ?>" height = "250" width = "350"/>
						</div>
						<div style = "float:left; margin-left:10px;">
							<h3 style = "font-weight: bold;"><?php echo $row ->hotel_name?></h3>
                            <h4><?php echo $row ->room_type?></h4>
							<h4 style = "color:#00ff00;"><?php echo "Price: Rs. ". $row ->price.".00"?></h4>
							<br />
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $row ->room_id?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
    </section>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
   <!-- end -->

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <script src="hotel/script.js"></script>

    




    
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