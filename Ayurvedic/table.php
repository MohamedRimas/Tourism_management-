<!DOCTYPE html>
<head>

<link rel="stylesheet" href="ayurvedicstyle.css">
<style>
.table_table-striped1 th{
    padding-top: 12px;
    padding-bottom: 12px;
    margin-left: auto;
      margin-right: auto;
    background-color: transparent;
    color: rgb(18, 18, 18);
    /* padding: 12px; */
    font-size: 20px;
    
    
  }
  
  /* #columnwidth{
    height: 200px;
  } */
  
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
  .design{
      padding: 8px;
      width: 100px;
      margin-left: 10%;
      text-align: center;
  
  }
  .cwidth{
      width: 3%;
      
  }
  .btnLink{
      border-radius: 8px;
      font-size: 16px;
      text-align: center;
      margin-left: 40px;
  }
  .button1{
          padding: 15px;
          width: auto;
          margin-left: 10px;
          margin-right: 10px;
          border-radius: 30px;
          border: 0px;
          color: white;
          background-color: #2A628F;
          transition: all 0.3s;
          cursor: pointer;
          box-shadow: 0px 0px 0px #989898;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
            'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
            sans-serif;
        
  }
  .h2my{
    color: rgb(21, 22, 22);
    font-family: 'Times New Roman', Times, serif;
    margin-bottom: 40px;
  }
  .theadtable{
    background-color:rgb(219, 219, 219);
    color: rgb(196, 247, 228);
  
  }
  .Diatableheader{
    width: 10%;
  }
  .Stableheader{
    width: 4%;
    text-align: center;
    background-color:rgb(40, 145, 210) ;
    font-weight: 100;
  }
  .th{
    background-color: rgb(40, 145, 210);
    color: #0f0f0f;

  }
  
  .MYsearchbar{
    float: right;
    padding: 6px;
    margin-left: 16px;
    font-size: 16px;
    margin-right: 5px;
    width: 15%;
    border-color: rgb(209, 199, 199);
    border-radius: 10px;
  
  }
  
  .button1 span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button1 span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button1:hover span {
    padding-right: 25px;
  }
  
  .button1:hover span:after {
    opacity: 1;
    right: 0;
  }
  
  
  .button-88 {
    display: flex;
    align-items: center;
    margin-left: 60px;
    font-family: inherit;
    font-weight: 500;
    font-size: 16px;
    padding: 0.7em 1.4em 0.7em 1.1em;
    color: white;
    background: #ad5389;
    background: linear-gradient(0deg, rgba(20,167,62,1) 0%, rgba(102,247,113,1) 100%);
    border: none;
    box-shadow: 0 0.7em 1.5em -0.5em #14a73e98;
    letter-spacing: 0.05em;
    border-radius: 5em;
    cursor: pointer;
    touch-action: manipulation;
  }
  
  .button-88:hover {
    box-shadow: 0 0.5em 1.5em -0.5em #14a73e98;
  }
  
  .button-88:active {
    box-shadow: 0 0.3em 1em -0.5em #14a73e98;
  }
  
  /* CSS */
  .button-29 {
    align-items: center;
    background-image: radial-gradient(100% 100% at 100% 0, #5adaff 0, #5468ff 100%);
    border: 0;
    border-radius: 60px;
    box-shadow: rgba(45, 35, 66, .4) 0 2px 4px,rgba(45, 35, 66, .3) 0 7px 13px -3px,rgba(58, 65, 111, .5) 0 -3px 0 inset;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-flex;
    font-family: "JetBrains Mono",monospace;
    height: 48px;
    justify-content: center;
    line-height: 1;
    overflow: hidden;
    padding-left: 16px;
    padding-right: 16px;
    position: relative;
    text-align: left;
    transition: box-shadow .15s,transform .15s;
    touch-action: manipulation;
    white-space: nowrap;
    will-change: box-shadow,transform;
    font-size: 16px;
  }
  
  .button-29:focus {
    box-shadow: #3c4fe0 0 0 0 1.5px inset, rgba(45, 35, 66, .4) 0 2px 4px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
  }
  
  .button-29:hover {
    box-shadow: rgba(45, 35, 66, .4) 0 4px 8px, rgba(45, 35, 66, .3) 0 7px 13px -3px, #3c4fe0 0 -3px 0 inset;
    transform: translateY(-2px);
  }
  
  .button-29:active {
    box-shadow: #3c4fe0 0 3px 7px inset;
    transform: translateY(2px);
  }
  
  .button-71 {
    background-color: #d74747;
    padding: 15px;
          width: 100px;
          margin-left: 40px;
         
          margin-right: 5px;
          border-radius: 15px;
          border: 0px;
          color: white;
          font-size: small;
          transition: all 0.3s;
          cursor: pointer;
          box-shadow: 0px 0px 0px #989898;
          font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
            'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
            sans-serif;
        
  }
  
  
  /* dropdown */
  .dropdown {
    position: relative;
    display: inline-block;
    width: 68%;
    height: 60%;
    max-height: 300px;
    font-size: 18px;
    font-weight: 400;
    border: rgb(210, 226, 241);
    position: relative;
    display: inline-block;
    background-color: rgb(252, 252, 252);
    /* box-shadow: 0px 5px 5px 5px rgba(0, 0, 0, 0.082); */
    
  }
  .dropdowncolor{
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    background-color: #f1f1f1
  }
  /* switch */
  .slider.round {
    border-radius: 34px;
  }
  
  .slider.round:before {
    border-radius: 50%;
  }
  .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }
  
  /* Hide default HTML checkbox */
  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
  }
  
  input:checked + .slider {
    background-color: rgba(20,167,62,1);
  }
  
  input:focus + .slider {
    box-shadow: 0 0 1px #21f34f;
  }
  
  input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
  



</style>
<style>
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