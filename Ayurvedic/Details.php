<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Center Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Jade website template">
    <meta name="keywords" content="apollo, jade, template, html, sass, jquery">
    <meta name="author" content="Bucky Maler">
    <link rel="stylesheet" href="assetsAyurvedic/css/main.css">
  </head>
  <body>
<!-- update php fetchstart -->


<?php 
include 'config.php';

$ID = $_GET['id'];
$Record = mysqli_query($con,"SELECT * FROM `ayurveda` WHERE id ='$ID'");
$data= mysqli_fetch_array($Record);

?>



    <section id="hero"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 163.5" style="enable-background:new 0 0 100 163.5;" xml:space="preserve">
<!--  -->
</svg>
      <!-- <header>
        <div class="nav-toggle">
          <p>Menu</p><span></span>
        </div>
        <ul class="nav">
          <li><a href="#about">About</a></li>
          <li><a href="#full-slide">Work</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </header> -->
    
      <div class='wrapper'>
        <div class='welcome'>
          <h1 ><strong > <?php echo $data['name']?></strong></h1>
          <p ><strong >Email Adress: </strong><span ><?php echo $data['email']?></span></p>
          <p ><strong >Our website: </strong><span ><?php echo $data['web']?></span></p>
          <p ><strong >Contact Number: </strong><span ><?php echo $data['phone']?></span> </p>
          <p ><strong >Location: </strong><span ><?php echo $data['location']?></span></p>
        </div> 
        <div class="photographer" value= "<?php echo $data['image']?>" name= "image"><img class="photographer" src="<?php echo $data['image']?>" ></div>
      </div>
    </section>
    <section id="about"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 203.6" style="enable-background:new 0 0 100 203.6;" xml:space="preserve">
<!--  -->
</svg>
      <div class="wrapper">
        <div class="camera"><img src="./img/testimage.jpg" alt="Camera"></div>
        <div class="blurb">
          <h2>About <strong>Us</strong></h2>
          <p><span><?php echo $data['special']?></span><br><br></p>
           </div>
      </div>
    </section>
    
</svg>
      
    <section id="featured"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 248.8" style="enable-background:new 0 0 100 248.8;" xml:space="preserve">

</svg>
      <div class="wrapper">
        <div class="blurb">
          <h2><strong>Our Packages </strong>And Services</h2>
          <p><?php echo $data['package']?></p>
        </div>
        <div class="featured"><img src="./img/mediplantsnew.jpg" alt="Featured"></div>
      </div>
    </section>
    
    <section id="contact"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 171.2" style="enable-background:new 0 0 100 171.2;" xml:space="preserve">
<!--  -->
</svg>
      <div class="wrapper">
        <div class="blurb">
          <h2><strong>How To</strong> Contact Us</h2>
          <p>Send us your inquiry via our mail address or You can contact our center and reserve our services.</p>
          <p>Our Mail Address</p>
          <p><strong><?php echo $data['email']?></strong></p>
        </div>
       
      </div>
      
    </section> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assetsAyurvedic/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="assetsAyurvedic/js/functions-min.js"></script>
  </body>
</html>