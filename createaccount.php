<?php
include "database.php";
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*<form action="createaccount.jsp" method="POST">
	First Name:<br>
	<input type="text" name="first_name">
	<br>
	Last Name:<br>
	<input type="text" name="last_name">
	<br>
	Email:<br>
	<input type="text" name="email">
	<br>
	Address:<br>
	<input type="text" name="street_address">
	<br>
	City:<br>
	<input type="text" name="city">
	<br>
	Province:<br>
	<input type="text" name="province">
	<br>
	Password:<br>
	<input type="text" name="pass">
	<br>
  	<input type="submit" value="Submit">
  </form>
*/
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$street = $_POST['street_address'];
$city = $_POST['city'];
$province = $_POST['province'];
$pass = $_POST['pass'];

$sql = "INSERT INTO User(first_name,last_name,email,street_address,province,city,pass)". 
        " VALUES('".$fname."','".$lname."','".$email."','".$street."','".$province."','".$city."','".$pass."')";
//$result = mysqli_query($con, $sql) or die(mysqli_error($con));



if(mysqli_query($con, $sql)){
    $_SESSION['uid'] = mysqli_insert_id($con);
    $_SESSION['firstname'] = $fname;
    $_SESSION['email']=$email;
    $_SESSION['loginfrom'] = "home";
    header("Location: listprod.php");
}
else {
    header("Location: signup.php");
}