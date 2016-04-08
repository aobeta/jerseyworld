
<?php
include 'database.php';
session_start();

$loggedIn = False;
$email = $_GET['email'];
$pass = $_GET['password'];
$sql = "SELECT user_id, first_name, email, pass FROM User WHERE email = \"".$email."\" and pass= \"".$pass."\"";
$result = mysqli_query($con, $sql) or die(mysqli_error($con));

while($info = mysqli_fetch_assoc($result)){
    $firstname = $info["first_name"];
    $userid = $info["user_id"];
}

if(mysqli_num_rows($result)==0)
{
   header("Locaton: login.php");
}
else{
    $_SESSION['uid'] = $userid;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['email']=$email;
    header("Location: promotion.php");
}

?>
