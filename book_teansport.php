

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>transport booking</title>
   <script> $("#contact-form").submit(_=> alert("You have successfully submitted"));</script>
   
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="icon" href="assets/images/flight.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


   <link rel="stylesheet" href="css/style1.css">


   <script type="text/javascript">
            function Warning() {
            alert ("Warning danger you have not filled everything");
            document.write ("Warning danger you have not filled everything");
            }
    </script>

</head>
<body>
   






<section class="booking">

   <h1 class="heading-title">transport booking </h1>

   <form action="book_form1.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Full Name :</span>
            <input type="text" placeholder="enter your name" name="name" required autofocus>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="enter your email" name="email" required autofocus>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input  type="number" placeholder="enter your number" name="phone" required autofocus>
         
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required autofocus>
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location" required autofocus>
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required autofocus>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals"required autofocus>
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required autofocus>
         </div>
      </div>
      
     <input type="submit"   value="Booking" class="btn" name="send" >
      <a href="transport_main.php"><input type="view" value="Back" class="btn" ></a>

      

 


   </form>
  
</section>






















<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>