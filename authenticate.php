
<?php
include 'database.php';


$loggedIn = False;
$email = $_GET['email'];
$pass = $_GET['password'];
$sql = "SELECT first_name,email, pass FROM User WHERE email = '$email' and pass= '$password'";
$resultset = mysqli_query($con, $sql) or die(mysqli_error($con));

if(mysqli_num_rows($resultset)==0)
{
   header("Locaton: login.php");
}
else{
    header("Location: checkout.php");
}

