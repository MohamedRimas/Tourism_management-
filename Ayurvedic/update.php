





<?php

include 'config.php';

if(isset($_POST['update'])){

    $ID= $_POST['id'];
    $NAME = $_POST['name'];
    $ADDRESS =$_POST['address'];
    $DESCRIPTION=$_POST['description'];
    $EMAIL=$_POST['email'];
    $WEB=$_POST['web'];
    $PHONE=$_POST['phone'];
    $PACKAGES=$_POST['package'];
    $IMAGE=$_FILES['image'];
    print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name= $_FILES['image']['name'];
    $img_des = "imageUpload/".$img_name;
    move_uploaded_file($img_loc,'imageUpload/'.$img_name);

  mysqli_query($con,"UPDATE `ayurveda` SET 
`image`='$img_des',`name`='$NAME',`location`='$ADDRESS',`special`='$DESCRIPTION',`email`='$EMAIL',`web`='$WEB',`phone`='$PHONE',`package`=' $PACKAGES' WHERE id = $ID ");
header("location:table.php");




}

?>