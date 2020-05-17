<?php
 include('server.php');
 include ('existacc.php');

$username=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','cabhiring');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 if (isset($_POST['id']))
 {
$cardno1=$_POST['accno'];
$Amount1=$_POST['Amount']; 	
$query = "SELECT * FROM user WHERE Username='$username'";
 
$result = mysqli_query($db,$query);
$count = mysqli_num_rows($result);
if ($count> 0) 
{
        foreach ($result as $r) 
        {
         ;
        }
}
$exist=$r['wallet'];
  $query7 = "SELECT * FROM acc WHERE Username='$username' AND acc='$cardno1'";
    $results = mysqli_query($db,$query7);
    $counti = mysqli_num_rows($results);
	if($counti>0)
	{
    $total=$exist+$Amount1;
      $query4="UPDATE user
SET wallet = '$total'
WHERE Username='$username'";
$resulti = mysqli_query($db, $query4);
    $counto = mysqli_num_rows($resulti);
    if($counto==1)
    {
    	;
    }
    echo "<script type='text/javascript'>alert('money inserted successfully')</script>";

 header("Location: walbal.php");

	}
  else
  {
  	echo "<script type='text/javascript'>alert('Invalid Account')</script>";
   
  }
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<br>
<a href="addacc.php">Add Account</a>
Enter existing Account number
 <form action="acc.php" method="post">
            <input type="text" name="accno" placeholder="Account number" pattern="[0-9]{12}" title="account number must be only digit and of size 12" required>
<p>Amount</p>
            <input type="text" name="Amount" placeholder="Amount" pattern="[1-9][0-9]{3,}" title="amount must be a number and minimum 2 non-zero digits " required>
             <input type="submit" name="id" value="pay"><br>
</form>
<a href="addm.php">Back??</a><br>

</body>
</html>