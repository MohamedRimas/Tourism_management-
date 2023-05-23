<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />

		<style>
			

			.hero-image {
  
 				background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../photo/hotel1.jpg");

  				height: 200%;
				width: 190%;

				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
			}


		</style>
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	
	<div style = "text-align:center;" class = "container">
		<div style = "text-align:center;" class = "panel panel-default">
			<div style = "text-align:center;" class = "panel-body">
				
				<br />
				<br style = "clear:both;" />
				
			<div class="hero-image">
				<div class="form-center">
				<div class = "well col-md-4">
					
					<form method = "POST" enctype = "multipart/form-data" style = "text-align:center">
					<strong><h3 style="font-weight: bold; text-size:20px; color:red;">MAKE A RESERVATION</h3></strong><br>
						<div class = "form-group">
							<label>Firstname</label>
							<input type = "text" class = "form-control" name = "firstname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Middlename</label>
							<input type = "text" class = "form-control" name = "middlename" required = "required" />
						</div>
						<div class = "form-group">
							<label>Lastname</label>
							<input type = "text" class = "form-control" name = "lastname" required = "required" />
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" class = "form-control" name = "address" required = "required" />
						</div>
						<div class = "form-group">
							<label>Contact No</label>
							<input type = "text" class = "form-control" name = "contactno" required = "required" />
						</div>
						<div class = "form-group">
							<label>Check in</label>
							<input type = "date" class = "form-control" name = "date" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Submit</button>
						</div>
					</form>
				</div>
				</div>
			</div>	
				<div class = "col-md-4"></div>
				<?php require_once 'add_query_reserve.php'?>
				</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>