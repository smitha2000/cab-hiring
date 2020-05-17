<?php 
include ('server.php');
//include('existcard.php');
$db=mysqli_connect('localhost','root','','cabhiring');
                
    $username=$_SESSION['username'];
    if (isset($_POST['csubmit']))
{
$name= $_POST['name'];  
$cardno = $_POST['card'];
$month=$_POST['month'];
$year=$_POST['year'];;

$query = "INSERT INTO `card`(`Username`, `card`, `month`, `year`,`name`) VALUES ('$username','$cardno','$month','$year','$name')";
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
  <form method="post" action="addcard.php">
     
    <label for="fname">Name on the card</label>
    <input type="text" id="fname" name="name" placeholder="name on the card" title="[a-zA-Z]{5,}" title="name can't be number" required>
     <label for="fname">Card no</label>
    <input type="text" id="fname" name="card" placeholder="card no" pattern="[0-9]{15}" title="card number can't be alphabets and must be of length 15" required>
     <label for="fname">Exp month</label>
    <input type="text" id="fname" name="month" placeholder="month" pattern="[a-zA-Z]+" title="month can't be numbers " required>
     <label for="fname">Exp year</label>
    <input type="text" id="fname" name="year" placeholder="year" pattern="2[0-9]{3}"  title="should be of only 4 digit and should be a valid 21st century year" required>
    <input type="submit" value="Submit" name="csubmit">

  </form>
</div>
   <a href="card.php">Back??</a><br>
</body>
</html>