<?php 
//include ('server.php');
//include('existcard.php');



$nam="";
$type="";
$pickup="";
$drop_loc="";
$mon="";

$errors = array();
$db=mysqli_connect('localhost','root','','cabhiring');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if(isset($_POST['regbutton']))
{
  

  $nam=$_POST['nam'];
  $type=$_POST['type'];
  $pickup=$_POST['pickup'];
  $drop_loc=$_POST['drop_loc'];
  $mon=$_POST['mon'];
  $stati="NO";
  $carid=1;
 



$sqlls="INSERT INTO `cars`(`carid`,`nam`, `type`, `pickup`, `drop_loc`,'stat', `mon`) VALUES ('$carid','$nam','$type','$pickup','$drop_loc','$stati',$mon')";
    mysqli_query($db,$sqlls);
    header('location: addcar.php');



}




    ?>
   
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}


input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 35%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: left;
}
</style>
</head>
<body>


  <div class="container">
    <h1>Add CAR</h1>
    <form method="post" action="addcar.php">
        <?php include('errors.php'); ?>
    <p>Please fill in this form to add a new car</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" name="name" placeholder="Enter the name" pattern="[a-zA-Z0-9]{3,}" title="name must be only alphabets" required>
    <label for="type"><b>Type</b></label>
     <input type="text" name="type" placeholder="Enter the type" " title="type must be only alphabets" required>
     <label for="pickup"><b>pickup</b></label>
     <input type="text" name="pickup" placeholder="Enter the pickup loc" title="destination must be only alphabets" required>
     <label for="drop_loc"><b>drop_loc</b></label>
     <input type="text" name="drop_loc" placeholder="Enter the drop_loc"  title="destination must be only alphabets" required>
     <label for="mon"><b>mon</b></label>
     <input type="text" name="mon" placeholder="Enter the money"  title="destination must be only alphabets" required>
     


<br><br>
   
    <input type="submit" class="registerbtn" name="regbutton" value="ADD CAR">
    </form>
  </div>
  
  <div class="container signin">
     <a href="promodis.php">back</a>
  </div>


</body>
</html>
