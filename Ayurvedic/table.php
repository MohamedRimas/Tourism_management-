<!DOCTYPE html>
<head>
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="style.css">
<style>

.surgeryContainer{
    border-radius: 8px;
    padding: 8px;
      margin-top: 30px;
      width: 100%;
      margin-left: auto;
      margin-right: auto;
       padding: 50px 0;
      background-color: rgb(255, 255, 255);
      box-shadow: 0px 8px 15px 5px rgba(0, 0, 0, 0.082);
      
  }






.deletebutton{
    padding: 9px;
          width: 150px;
          margin-left: 45px;
          margin-right: 10px;
          border-radius: 10px;
          border: 0px;
          color: white;
          background-color:#d42940;
          transition: all 0.3s;
          cursor: pointer;
          box-shadow: 0px 0px 0px #989898;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
            'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
            sans-serif;
  }
  #columnwidth{
    height: 100px;
  }

</style>
<script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this item?");
        }
    </script>





</head>
<body>
   
    <!-- details table -->
    <form action="AddCenter.php">

    <button class="button1" style="margin-top: 30px;" ><span>Add New Center +</a></span></button>
</form>
<?php 
   include 'config.php';

  if (isset($_POST['search'])){
    $searchkey = $_POST['search'];
    $sql = "SELECT * FROM `ayurveda` WHERE (name LIKE '%{$searchkey}%' OR location LIKE '%{$searchkey}%')";

  }else
   $sql = "SELECT * FROM `ayurveda` WHERE 1";
   $result = mysqli_query($con,$sql);


   


?>


<div class="surgeryContainer">
    <form action="" method="POST">
        <input class="MYsearchbar" type="text" name="search" placeholder="Search.." /></form>
    <h2 style="margin-left: 20px;"  class="h2my">Ayurvedic Treatment Details </h2>
    
    
     <table class="table_table-striped1">
       <thead class="theadtable">
         <tr>
           <th class="Stableheader" >ID</th>
           <th class="Stableheader">Image</th>
           <th class="Stableheader">Ayurvedic Name</th>
           <th class="Stableheader">Location</th>
           <th class="Stableheader">Specialities</th>
           <th class="Stableheader">E-mail</th>
           <th class="Stableheader">Web Address</th> 
           <th class="Stableheader">Phone Number</th> 
           <th class="Stableheader">Packages</th>
           <th class="Stableheader">Action</th>
           
         </tr>
       </thead>
       <tbody class="design" >
       <?php 
    //    include 'config.php';
       while ($row = mysqli_fetch_object($result)){ ?>
      
        <tr>

        <td id= "columnwidth"> <?php echo $row ->id ?></td>
        <td id= "columnwidth"><img src= <?php echo $row -> image ?> width= "100px" height="70px"></td>
        <td id= "columnwidth"><?php echo $row -> name ?></td>
        <td id= "columnwidth"><?php echo $row ->location ?></td>
        <td id= "columnwidth"><?php echo $row -> special ?></td>
        <td id= "columnwidth"><?php echo $row -> email ?></td>
        <td id= "columnwidth"><?php echo $row -> web ?></td>
        <td id= "columnwidth"><?php echo $row -> phone ?></td>
        <td id= "columnwidth"><?php echo $row -> package ?></td>
        <td id= "columnwidth"><a style="color: black;" class="btnLink" href="UpdateAyurveda.php? id= <?php echo $row -> id?>"><b>Update</b></a><br/><br/>
        <a style="color: black;" class="deletebutton" href="delete.php? id=<?php echo $row -> id ?>" onclick="return confirmDelete()"><b>Delete</b></a></td>
        
        
        </tr>
    
  <?php } ?>





        
       </tbody>

     </table>
     <br/>
     
     
   </div>
</body>
   </html>