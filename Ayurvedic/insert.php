




<?php
//include db connection
include 'config.php';
if(isset($_POST['submit'])){
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

//insert data

mysqli_query($con,"INSERT INTO `ayurveda`( `image`, `name`, `location`, `special`, `email`, `web`, `phone`, `package`)
 VALUES ('$img_des','$NAME','$ADDRESS','$DESCRIPTION','$EMAIL','$WEB','$PHONE','$PACKAGES')");



header('location:table.php?success=true');
exit();





}





?>