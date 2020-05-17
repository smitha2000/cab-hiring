<?php 
include ('server.php');
//include('existcard.php');
$db=mysqli_connect('localhost','root','','cabhiring');
                
    $username=$_SESSION['username'];
    if (isset($_POST['id']))
{
    
$accno = $_POST['id'];
$ifsc = $_POST['idi'];

$query = "INSERT INTO `acc`(`Username`, `acc` ,`ifsc`) VALUES ('$username','$accno','$ifsc')";
$result = mysqli_query($db,$query);

}
    ?>
   


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<div class="container">
  <form method="post" action="addacc.php">
     
    <label for="fname">Account no</label>
    <input type="text" id="fname" name="id" pattern="[0-9]{12}" title="Account no must be a 12 digit number" placeholder="Account no" required>
    <label for="fo">IFSC Code</label>
     <input type="text" id="fname" name="idi" pattern="[a-zA-Z0-9]{11}" title="IFSC code must be a 11 digit code" placeholder="Account no" required>

    <input type="submit" value="Submit" name="csubmit">
    <a href="addacc.php">Back??</a><br>
  </form>
</div>
   
</body>
</html>