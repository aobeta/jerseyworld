<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "header.php";
?>
<html>
<head>
<title>Sign Up</title>
<link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
    
    #aotr {
        margin-left: 50px;
    }
    
</style>
<div class="col-sm-3"></div> 
<div id="aotr" class="col-sm-6">
<h3>Enter your information to sign up:</h3>

<form action="createaccount.php" method="POST">
	First Name:<br>
        <input class="form-control" type="text" name="first_name">
	<br>
	Last Name:<br>
	<input class="form-control" type="text" name="last_name">
	<br>
	Email:<br>
	<input class="form-control" type="text" name="email">
	<br>
	Address:<br>
	<input class="form-control" type="text" name="street_address">
	<br>
	City:<br>
	<input class="form-control" type="text" name="city">
	<br>
	Province:<br>
	<input class="form-control" type="text" name="province">
	<br>
	Password:<br>
	<input class="form-control" type="text" name="pass">
	<br>
  	<input class="btn btn-primary" type="submit" value="Submit">
  </form>
<div class="col-sm-3"></div> 
</body>
</html>