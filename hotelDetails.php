

<html>
	<head>
		<!-- add a title (a)-->
		<title>PharmacyMS</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="Styles/home.css">
		<!--<script src="js1/script1.js"> </script>-->
		<meta charset = "UTF-8">
		<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	   <style>
	   
	 body {
        font-family: Arial, Helvetica, sans-serif;
   min-height: 100vh;
  position: relative;
  background: linear-gradient(rgba(33, 30, 28, 0.7), rgba(33, 40, 28, 0.7)), url("image/h.jpg") no-repeat right center;
  background-size: cover;
  
  
}


img {
  max-width: 100%; }


			.container{
	width : 700px;
	background-color:rgb(0,0,0,0.8);
	margin: auto;
	color: #FFFFFF;
	padding: 0.5px 0px 0.5px 0px;
	text-align: center;
	border-radius: 10px 10px 0px 0px;
}
			
.container{
	background-color:#e5e9e6;
	width : 1500px;
	height :600px;
	padding:50px 50px 50px 50px;
	margin: auto ;
	border-radius: 20px 20px 20px 20px;
}
			
form{
	padding: 10px
	width: 150%;
}
.fromadd{
	color: black;
	font-size: 15px;
}
.formnijustify{
	display: flex;
	justify-content: space-between;
}

.maindiv{
	padding:1px;
	position:relative;
	background:#f2e8e6;
	width:1500px;
	height:800px;
	text-align:center;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,2);
}



h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    padding: 30px 0;
}


/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size:15px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 80%;
    max-width: 120%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 25px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 10px;
}

.fl-table thead th {
    color: #ffffff;
    background: #2A628F;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #17a2b8;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #424242;
  border: none;
  border-radius: 2px;

}

.button:hover {background-color: #0072fd}

.button:active {
  background-color: #0072fd;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

input[type=text] {
  width: 400px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 5px 12px 8px 20px;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 40%;
}



div[class*=box] {
  height: 28%;
  width: 100%; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.box-1 { background-color:#A6ACAF}

.btn {
  line-height: 50px;
  height: 50px;
  text-align: center;
  width: 250px;
  cursor: pointer;
}

/* 
========================
      BUTTON ONE
========================
*/
.btn-one {
  color: #FFF;
  transition: all 0.3s;
  position: relative;
}
.btn-one span {
  transition: all 0.3s;
}
.btn-one::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s;
  border-top-width: 1px;
  border-bottom-width: 1px;
  border-top-style: solid;
  border-bottom-style: solid;
  border-top-color: rgba(255,255,255,0.5);
  border-bottom-color: rgba(255,255,255,0.5);
  transform: scale(0.1, 1);
}
.btn-one:hover span {
  letter-spacing: 2px;
}
.btn-one:hover::before {
  opacity: 1; 
  transform: scale(1, 1); 
}
.btn-one::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.3s;
  background-color: rgba(255,255,255,0.1);
}
.btn-one:hover::after {
  opacity: 0; 
  transform: scale(0.1, 1);
}
.rightdiv{
	
	left:3px;
	float:right;
	display:inline-block;
	height:400px;
	width:600px;
	background:whitesmoke;
}
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}


.sbutton {
  background-color:#737CA1;
  border: none;
  color: black;
  padding: 5px 5px;
  <!--padding: 15px 32px;-->
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  
  cursor: pointer;
}

.sbutton1 {
  background-color:#D30000;
  border: none;
  color: black;
  padding: 5px 5px;
  <!--padding: 15px 32px;-->
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  
  cursor: pointer;
}

@import url('https://fonts.googleapis.com/css?family=Poppins:900i');

.butt{
	float:right;
	
	height:50px;
	width:150px;
	background:#BDC3C7 ;
}




.cta {
    display: flex;
    padding: 2px 10px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    color: black;
    font-weight:bold;
    background: #2980B9;
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
}

.cta:focus {
   outline: none; 
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #AED6F1;
}

.cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover  span:nth-child(2) {
    transition: 0.5s;
    margin-right: 45px;
}

  span {
    transform: skewX(15deg) 
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }
  
/**************SVG****************/

path.one {
    transition: 0.4s;
    transform: translateX(-60%);
}

path.two {
    transition: 0.5s;
    transform: translateX(-30%);
}

.cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
}

.cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
}

.cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
}

/* SVG animations */

@keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #2980B9 ;
    }
    100% {
        fill: white;
    }
}
	 
	 </style>

    
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

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/flight.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">


	 </head>
	 <body>

         <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span> Flix</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link active"></a>
                    <a href="about.html" class="nav-item nav-link"></a>
                    <a href="planning.html" class="nav-item nav-link"></a>
                    <a href="destinations.html" class="nav-item nav-link"></a>
					<a href="experience.html" class="nav-item nav-link"></a>
					<a href="journal.html" class="nav-item nav-link"></a>
					<a href="media.html" class="nav-item nav-link"></a>
					<a href="contact.html" class="nav-item nav-link"></a>
                </div>


            </div>
			
        </nav>
    </div>
    <!-- Navbar End -->
	
	
	<br><br>

<center>
		<div class="maindiv">
        <center><h2 style="color:black; text-decoration: underline;">HOTEL DETAILS</h2></center>


		
		<form method="POST" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>

		<div class="contain1">
		<input type="text" name="txtname" >
		<input type="submit" class= "button" value="SEARCH EMAIL" name="btnsubmit" class="button">
		</div>
		</form>
			
		
	
	<br>
	
	
	<center>
	<table id='medi' border='1' class='fl-table'>
	<thead>
		<tr>
			<th> Image </th> 
			<th> Hotel Name </th> 
			<th> Category </th>
			<th> Available Rooms</th> 
			<th> Web </th>
			<th> Email </th>
			<th> Reg No </th>
			<th>Telephone</th>
			<th>More Details</th>
			<th>Update</th>
            <th>Delete</th>
</tr>
	</thead>
    <tr>
			<td><img src="image/h.jpg"> </td> 
			<td>The Radh Hotel </td> 
			<td>Hotels </td> 
			<td> 50</td> 
			<td> www.radh.com</td> 
			<td> radh123@gmailcom</td> 
			<td>SLTDA/SQA/HC/00117 </td> 
			<td>077-8437423 </td> 
			<td> <p>The Radh Hotel is    </p></td>
            <td><a href="updateForm.php"> <input type="submit" class= "sbutton" value="UPDATE" name="btnsubmit" ></a> </td> 
            <td><a href="deleteForm.php"> <input type="submit" class= "sbutton" value="DELETE" name="btnsubmit" ></a> </td>
</tr>
<tr>
            <td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td><a href="updateForm.php"> <input type="submit" class= "sbutton" value="UPDATE" name="btnsubmit" ></a> </td> 
            <td><a href="deleteForm.php"> <input type="submit" class= "sbutton" value="DELETE" name="btnsubmit" ></a> </td>
</tr>
<tr>
            <td></td>  
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td> </td> 
			<td><a href="updateForm.php"> <input type="submit" class= "sbutton" value="UPDATE" name="btnsubmit" ></a> </td> 
            <td><a href="deleteForm.php"> <input type="submit" class= "sbutton" value="DELETE" name="btnsubmit" ></a> </td> 
</tr>

	
	
	</table>
	</center>



	<br><br><br>
    <div class="box-1" onclick="window.location='addForm.php';">
					  <div class="btn btn-one">
						<span>ADD HOTEL DETAILS</span>
					
					  </div>
	</div>
	

</center>
		
<br><br><br>
	
   </body>	
</head>
</html>