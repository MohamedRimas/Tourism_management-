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
    background-color:#2A628F;
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

<script>
	<?php
	if (isset($_GET['success']) && $_GET['success'] == 'true') {
		echo "alert('Data added successfully!');";
	}
	?>
</script>

</head>

<body>
<form action="table.php">
            <button  id="cancelBtn" style="margin-top: 20px;"><b>Back</b></button></form>
	
	<div id="booking" class="section" style="margin-top: 40px;">
		<div class="section-center" >
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg"></div>
						<form action="insert.php" method="POST" enctype="multipart/form-data">
							<div class="form-header">
								<h2>Add New Ayurvedic Center</h2>
							</div>
							
								
								<div class="form-group">
								<span class="form-label">Ayurvedic Center Name: *</span>
								<input class="form-control" type="text" name= "name" placeholder="Enter center name" required>
							</div>
								
								
								<div class="form-group">
								<span class="form-label">Address: *</span>
								<input class="form-control" type="text" name= "address" placeholder="Enter address" required>
							</div>
								
							
								<div class="form-group">
								<span class="form-label">Description: *</span>
								<input class="form-control" type="text" name= "description" placeholder="Enter description"  required>
							</div>
								
								<div class="row">
								<div class="col-md-6">
								<div class="form-group">
								<span class="form-label">E-mail: * </span>
								<input class="form-control" type="email" name= "email" placeholder="Enter email" required>
							</div>
								</div>
								<div class="col-md-6">
							<div class="form-group">
								<span class="form-label">Web Address:</span>
								<input class="form-control" type="text" name= "web" placeholder="Enter web adress">
							</div></div></div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="tel" name="phone" placeholder="Enter phone number">
							</div>
							<div class="form-group">
								<span class="form-label">Packages: *</span>
								<input class="form-control" type="text" name= "package" placeholder="Enter package details" required>
							</div>
							<div class="form-group">
								<span class="form-label">Select a file:</span>
								<input class="form-control" type="file"  name= "image">
							</div>

							<div class="form-btn">
								<button class="submit-btn" name = "submit">Add Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>