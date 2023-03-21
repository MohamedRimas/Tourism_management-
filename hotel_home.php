<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

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
<link href="css/style1.css" rel="stylesheet">

<link href="css/style3.css" rel="stylesheet">

<style>

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #fd7e14;
  color: white;
}

.round {
  border-radius: 100%;
}

</style>
</head>
<body>

<?php require('inc/header.php'); ?>

<!--<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">HOTEL MANAGEMENT</h2>

  <div class="h-line bg-dark"></div>
 
</div>-->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="image/hotel1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Hotel & Other Accomadations</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Sri Lanka Hotels</h3>
                            <p class="mx-md-5 px-5">Find your best hotel form here </p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="image/gallery4.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Spa & Beauty Center</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3"></h3>
                            <p class="mx-md-5 px-5"></p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#"></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"></h6>
                            <h3 class="display-3 text-capitalize text-white mb-3"></h3>
                            <p class="mx-md-5 px-5"></p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


<div class="container">
  <div class="row">
   <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">

   <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">HOTEL AVAILABILITY</h5>
        <label class="form-label">Hotel Name or Place</label>
        <input type="text" class="form-control shadow-none"><br>
        <label class="form-label">Accomadation Type</label>
        <select name="acc" class="form-control shadow-none">
          <option value="Hotel">Hotel</option>
          <option value="Resort">Resort</option>
          <option value="Bungalow">Bungalow</option>
          </select><br>
          <label class="form-label">Location</label>
        <select name="loc" class="form-control shadow-none">
          <option value="Kandy">Kandy</option>
          <option value="Mathale">Mathale</option>
          <option value="Colombo">Colombo</option>
          <option value="Negambo">Negambo</option>
          </select><br>
          <button class="form-control shadow-none">Search</button>
    </div>
  </div>
</nav>

<br><br>

     <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
        <label class="form-label">Check-in</label>
        <input type="date" class="form-control shadow-none mb-3">
        <label class="form-label">Check-in</label>
        <input type="date" class="form-control shadow-none">
      </div>
      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">Adults</h5>
        <div class="d-flex">
          <div class="me-2">
          <label class="form-label">Adults</label>
          <input type="number" class="form-control shadow-none">
        </div>
        <div>
          <label class="form-label">Children</label>
          <input type="number" class="form-control shadow-none">
        </div>
        </div>
</div>
      <div class="border bg-light p-4 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">FACILITIES FOR CHILDREN</h5>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f1">Indoor Play Areas</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f2">Outdoor Play Areas</label>
        </div>
        <div class="mb-2">
          <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
          <label class="form-check-label" for="f3">Others</label>
        </div>
      </div>
      </div>
  </div>
</nav>
</div>

<div class="col-lg-9 col-md-12 px-4">
  <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="image/gallery4.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h3 class="mb-3"><b>The Radh Hotel</b></h3>
      <div class="features mb-4">
        <h6 class="mb-1">Category : Hotel</h6><br>
        <h6 class="mb-1">Available Rooms : 50</h6><br>
        <h6 class="mb-1">Web: www.radh.com</h6><br>
        <h6 class="mb-1">Email : radh123@gmail.com</h6><br>
        <h6 class="mb-1">Reg No : SLTDA/SQA/HC/00117</h6><br>
        <h6 class="mb-1">Tel : 077-8437423</h6>
      </div>
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <a href="" class="btn btn-primary d-none d-lg-block">Book</a><br>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>

<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="image/h2.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h3 class="mb-3"><b>The Grand Kandyan Hotel</b></h3>
      <div class="features mb-4">
        <h6 class="mb-1">Category : Hotel</h6><br>
        <h6 class="mb-1">Available Rooms : 100</h6><br>
        <h6 class="mb-1">Web: www.grandkandyan.com</h6><br>
        <h6 class="mb-1">Email : info@grandkandyan.com</h6><br>
        <h6 class="mb-1">Reg No : SLTDA/SQA/HC/00167</h6><br>
        <h6 class="mb-1">Tel : 081-2030400</h6>
      </div>
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <a href="" class="btn btn-primary d-none d-lg-block">Book</a><br>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>


<div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <img src="image/kabana.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 px-lg-3 px-md-3 px-0">
      <h3 class="mb-3"><b>Kandy Cabana Eco Resort</b></h3>
      <div class="features mb-4">
        <h6 class="mb-1">Category : Bungalow</h6><br>
        <h6 class="mb-1">Available Rooms : 4</h6><br>
        <h6 class="mb-1">Web: www.kandycabana.com</h6><br>
        <h6 class="mb-1">Email : kandycabana@gmail.com</h6><br>
        <h6 class="mb-1">Reg No : SLTDA/SQA/BUN/00991</h6><br>
        <h6 class="mb-1">Tel : 071-1772227</h6>
      </div>
    </div>
    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
      <a href="" class="btn btn-primary d-none d-lg-block">Book</a><br>
      <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
</div>


  </div>
</div>

<br><br>
<center><a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a></center>

<?php require('inc/footer.php'); ?>
</body>
</html>