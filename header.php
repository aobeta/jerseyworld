<?php session_start(); ?>
<div class="container-fluid twopiece">
<div class="jumbotron">

<link href="bootstrap.min.css" rel="stylesheet">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<H1 align="center"><a href="jerseyworld.php" style="text-decoration: none">Jersey World</a></H1>      
<style>
.navbar-default{
    /*background-color: #FFFFFF;*/
}
.twopiece{  background-color: #B2B2B2;}
.jumbotron{  background-color: #B2B2B2;}
h1 {
	    		font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
				font-size: 24px;
				font-style: normal;
				font-variant: normal;
				font-weight: 500;
				line-height: 26.4px;
			}
</style>

</div>
<nav class="navbar navbar-inverse" style="border-radius:none;">
  <div class="container-fluid">
     <div>
      <ul class="nav navbar-nav">
        
      	
          <li id="Home"><a href="listprod.php">Home</a></li>
          <li id="SC"><a href="showcart.php">Shopping Cart</a></li>
          <li id="Checkout"><a href="order.php">Checkout</a></li>
          <?php 
          
          if(isset($_SESSION['firstname'])){
              
              echo "<li id=\"Checkout\"><a href=\"logout.php\">Logout</a></li>";
          }
          
          ?>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	
      </ul>
    </div>
  </div>
</nav>

</div>