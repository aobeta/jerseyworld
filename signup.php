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
<style>
    
    #aotr {
        margin-left: 50px;
    }
    
</style>

<div id="aotr">
<h2>Enter your information to sign up:</h2>

<form action="createaccount.php" method="POST">
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
