<?php
include 'config.php';
echo $ID = $_GET['id'];

mysqli_query($con,"DELETE FROM `ayurveda` WHERE id =$ID");

header('location:table.php');



?>