<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="Addstyle.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style>
            .cancelBtn:hover {
    background-color: grey
    
}

#cancelBtn {
    background-color: grey;
    padding: 15px;
          width: 150px;
          margin-left: 5px;
          margin-right: 5px;
          border-radius: 30px;
          border: 0px;
          color: white;
          transition: all 0.3s;
          cursor: pointer;
          box-shadow: 0px 0px 0px #989898;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
            'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
            sans-serif;
}
        </style>
</head>

<body>

<!-- update php fetchstart -->
<?php 
include 'config.php';

$ID = $_GET['id'];
$Record = mysqli_query($con,"SELECT * FROM `ayurveda` WHERE id ='$ID'");
$data= mysqli_fetch_array($Record);



?>

<!-- update php fetch end -->
<form action="table.php">
            <button  id="cancelBtn" style="margin-top: 20px;"><b>Cancel</b></button></form>
	
	<div id="booking" class="section" style="margin-top: 120px;">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="update.php" method="POST" enctype="multipart/form-data">
							<div class="form-header">
								<h2>Update Ayurvedic Details</h2>
							</div>
							
								
								<div class="form-group">
								<span class="form-label">Ayurvedic Center Name: *</span>
								<input class="form-control" type="text" placeholder="Enter center name" value= "<?php echo $data['name']?>"  name= "name" >
							</div>
								
								
								<div class="form-group">
								<span class="form-label">Address: *</span>
								<input class="form-control" type="text"  placeholder="Enter address" name= "address" value= "<?php echo $data['location']?>">
							</div>
								
							
								<div class="form-group">
								<span class="form-label">Description: *</span>
								<input class="form-control" type="text"  placeholder="Enter description"  name= "description" value= "<?php echo $data['special']?>">
							</div>
								
								<div class="row">
								<div class="col-md-6">
								<div class="form-group">
								<span class="form-label">E-mail: * </span>
								<input class="form-control" type="email"  placeholder="Enter email" name= "email" value= "<?php echo $data['email']?>" >
							</div>
								</div>
								<div class="col-md-6">
							<div class="form-group">
								<span class="form-label">Web Address:</span>
								<input class="form-control" type="text"  placeholder="Enter web adress" name= "web" value= "<?php echo $data['web']?>">
							</div></div></div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel"  placeholder="Enter phone number" name="phone" value= "<?php echo $data['phone']?>">
							</div>
							<div class="form-group">
								<span class="form-label">Packages: *</span>
								<input class="form-control" type="text"  placeholder="Enter package details" name= "package" value= "<?php echo $data['package']?>">
							</div>
							<div class="form-group">
								<span class="form-label">Select a file:</span>
								<!-- <input class="form-control" type="file"  name= "image"> -->
                                <td><input type="file" class="form-control"   value= "<?php echo $data['image']?>" name= "image"> <br><img  src="<?php echo $data['image']?>" width="100px" height="100px" ></td>
<br><br>
							</div>
                            <input type="hidden" id="packages" class="packages" name = "id" placeholder='Packge Prices' value= "<?php echo $data['id']?>"/>

							<div class="form-btn">
								<button class="submit-btn" type="submit" name ="update">Update Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>