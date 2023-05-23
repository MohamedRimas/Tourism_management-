<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>packages</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="stylesheet" href="assetsss3/css/style.css">

<!-- 
  - google font link
--> <link rel="icon" href="assets/images/flight.png" type="image/x-icon">

<link
href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
  rel="stylesheet">



   
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
img{width: 100%}

body{
    font-family: 'Poppins', sans-serif;
    line-height: 1.5;
}

/****************/
.main-container{
    width: 90vw;
    margin: 0 auto;
    padding: 40px 0;
}
.main-container > h2{
    text-align: center;
    padding: 10px 0;
    font-size: 32px;
}
.main-container > p{
    font-weight: 300;
    padding: 10px 0;
    opacity: 0.7;
    text-align: center;
}
.category-head{
    margin: 30px 0;
}
.category-head ul{
    list-style-type: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
}
.category-title{
    flex: 0 0 calc(16.6667% - 10px);
    display: flex;
    justify-content:center;
    background: #a8a8a8;
    padding: 12px;
    color: #fff;
    margin: 5px;
    cursor: pointer;
    transition: all 0.4s ease;
}
.category-title:hover{
    opacity: 0.7;
}
.category-title li{
    padding: 0 10px;
}
.category-title span{
    color: #222;
}

/** single post **/
.posts-main-container{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 40px;
}
.posts-main-container > div{
    box-shadow: 0px 8px 22px -12px rgba(0, 0, 0, 0.64);
}
.post-img{
    position: relative;
}
.category-name{
    position: absolute;
    top: 20px;
    left: 20px;
    text-transform: uppercase;
    font-size: 13px;
    color: #fff;
    padding: 4px 10px;
    border-radius: 2px;
}
.business .category-name{
    background: #00a7ea;
}
.culture .category-name{
    background: #f03250;
}
.politics .category-name{
    background: #f0544f;
}
.finance .category-name{
    background: #2c2a4a;
}
.sports .category-name{
    background: #a1e44d;
}


.post-content{
    padding: 25px;
}
.post-content-top{
    background: #80ced7;
    color: #fff;
    opacity: 0.8;
    padding: 5px 0 5px 15px;
}
.post-content-top span{
    padding-right: 20px;
}
.post-content-top .fa-comment, .post-content-top .fa-calendar{
    padding-right: 5px;
}
.post-content h2{
    font-size: 22px;
    padding: 12px 0;
    font-weight: 400;
}
.post-content p{
    opacity: 0.7;
    font-size: 15px;
    line-height: 1.8;
}
.read-btn{
    border: none;
    padding: 8px 15px;
    display: block;
    margin: 5px auto;
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    cursor: pointer;
    border: 1px solid #292929;
    background: transparent;
    margin-bottom: 40px;
}

.read-btn:hover{
    background: #f6f6f6;
}



/***************/
@media(max-width: 1170px){
    .posts-main-container{
        grid-template-columns: repeat(2, 1fr);
    }
}
@media(max-width: 768px){
    .posts-main-container{
        grid-template-columns: 1fr;
    }
}


/***********/

.activees{
    background: #f0544f;
}


</style>
    
  <link rel="stylesheet" href="assets2/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">



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

    <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Popular Packeges</p>

          

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="assetsss3/images/packege-1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Experience The Great Holiday On Beach</h3>

                  <p class="card-text">
                    Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est aliquet porttitor! Eaque,
                    cras, aspernatur.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Malaysia</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $750
                    <span>/ per person</span>
                  </p>

               <a  href="book.php"> <button class="btn btn-secondary">Book Now</button></a>  

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="assetsss3/images/packege-2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Summer Holiday To The Oxolotan River</h3>

                  <p class="card-text">
                    Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est aliquet porttitor! Eaque,
                    cras, aspernatur.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Malaysia</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $520
                    <span>/ per person</span>
                  </p>

                  <a  href="book.php"> <button class="btn btn-secondary">Book Now</button></a>

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="assetsss3/images/packege-3.jpg" alt="Santorini Island's Weekend Vacation" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Santorini Island's Weekend Vacation</h3>

                  <p class="card-text">
                    Laoreet, voluptatum nihil dolor esse quaerat mattis explicabo maiores, est aliquet porttitor! Eaque,
                    cras, aspernatur.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Malaysia</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    $660
                    <span>/ per person</span>
                  </p>

                  <button class="btn btn-secondary">Book Now</button>

                </div>

              </div>
            </li>

          </ul>

          <button class="btn btn-primary">View All Packages</button>

        </div>
      </section>


  <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="book.php">Discover amazing places of the world with us</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-2.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="book.php">Discover amazing places of the world with us</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/package-3.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Thailand</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="book.php">Discover amazing places of the world with us</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$350</h5>
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
    </div>


    <div class="overlay" data-overlay></div>


    <div class = "main-container">
            <h2>packages Categories</h2>
         
            <div class = "filter-container">
                <div class = "category-head">
                    <ul>
                        <div class = "category-title activees" id = "all">
                            <li>All</li>
                            <span><i class = "fas fa-border-all"></i></span>
                        </div>
                        <div class = "category-title" id = "culture">
                            <li>Family</li>
                            <span><i class = "fas fa-theater-masks"></i></span>
                        </div>
                        <div class = "category-title" id = "politics">
                            <li>Holiday packages</li>
                            <span><i class = "fas fa-landmark"></i></span>
                        </div>
                        <div class = "category-title" id = "finance">
                            <li>With frinds</li>
                            <span><i class = "fas fa-chart-area"></i></span>
                        </div>
                        <div class = "category-title" id = "business">
                            <li>Honeymoon plan </li>
                            <span><i class = "fas fa-coins"></i></span>
                        </div>
                        <div class = "category-title" id = "sports">
                            <li>luxury</li>
                            <span><i class = "fas fa-running"></i></span>
                        </div>
                    </ul>
                </div>

                <div class = "posts-collect">
                    <div class = "posts-main-container">
                        <!-- single post -->
                        <div class = "all business">
                            <div class = "post-img">
                                <img src = "img/package-3.jpg" alt = "post">
                                <span class = "category-name">Honeymoon plan</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i></i>January 01, 2XXX</span>
                                   
                                </div>
                                <h2>EXPERIENCE THE GREAT HOLIDAY ON BEACH</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                          <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all business">
                            <div class = "post-img">
                                <img src = "img/elephant-new.png" alt = "post">
                                <span class = "category-name">Honeymoon plan</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all business">
                            <div class = "post-img">
                                <img src = "img/destination-4.jpg" alt = "post">
                                <span class = "category-name">Honeymoon plan</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all culture">
                            <div class = "post-img">
                                <img src = "img/destination-2.jpg" alt = "post">
                                <span class = "category-name">Family</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all culture">
                            <div class = "post-img">
                                <img src = "img/pic-6.jpg" alt = "post">
                                <span class = "category-name">Family</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all culture">
                            <div class = "post-img">
                                <img src = "img/pic-3.jpg" alt = "post">
                                <span class = "category-name">Family</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all culture">
                            <div class = "post-img">
                                <img src = "img/pic-2.jpg" alt = "post">
                                <span class = "category-name">Family</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all finance">
                            <div class = "post-img">
                                <img src = "img/pic-4.jpg" alt = "post">
                                <span class = "category-name">With frinds</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <a href="book.php"> <button type = "button" class = "read-btn">BOOKING</button></a> 
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all finance">
                            <div class = "post-img">
                                <img src = "img/hero-1.jpg" alt = "post">
                                <span class = "category-name">With frinds</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all finance">
                            <div class = "post-img">
                                <img src = "img/destination-4.jpg" alt = "post">
                                <span class = "category-name">With frinds</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all politics">
                            <div class = "post-img">
                                <img src = "img/destination-4.jpg" alt = "post">
                                <span class = "category-name">Holiday packages</span>
                            </div>

                            <div class = "post-content">
                                <div class = "post-content-top">
                                    <span><i class = "fas fa-calendar"></i>January 01, 2XXX</span>
                                    <span>
                                        <i class = "fas fa-comment"></i>34
                                    </span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus recusandae aspernatur possimus illum, repellat ad quasi earum, illo voluptatibus minima fugiat saepe magni corporis vero eius accusantium quidem, consectetur nesciunt!</p>
                            </div>
                            <button type = "button" class = "read-btn">Read All</button>
                        </div>
                        <!-- end of single post -->
                        <!-- single post -->
                        <div class = "all politics">
                            <div class = "post-img">
                                <img src = "img/destination-4.jpg" alt = "post">
                                <span class = "category-name">Holiday packages</span>
                            </div>

                            
                           

                           
                        <!-- end of single post -->
                    </div>
                </div>
            </div>
        </div>
        

        <!-- JS file -->
        <script src = "script.js"></script>




      







 




  <!--
    - PRODUCT
  -->

























    
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

    <script src="./assets2/js/script.js"></script>

<!--
  - ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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


    
  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="assetsss3/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</body>

</html>