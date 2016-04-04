<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Jersey World</title>
<link href="bootstrap.min.css" rel="stylesheet">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid twopiece">
<div class="jumbotron">
<H1 align="center"><a href="listprod.jsp" style="text-decoration: none">Jersey World</a></H1>      
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
      	<li><a href="Welcome.html">Welcome</a></li>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="showcart.jsp">Shopping Cart</a></li>
        <li><a href="order.jsp">Checkout</a></li> 
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
                </ul>
    </div>
  </div>
</nav>

</div>
<div class="container-fluid">
	<div class="row content">
	<div class="col-sm-2">
	
	</div>
<div class = "col-sm-8">
	


	<h2>Browse Products by Sport or Search by Name:</h2>
<div class="container">
	<form class="form-inline" method="get" action="listprod.jsp">
		 <div class="form-group">
         <select class="form-control"size="1" name="categoryName">
			  <option>All Sports</option>
                           <option>Basketball</option>
			  <option>Football</option>
			  <option>Hockey</option>
			  <option>Soccer</option>
			  </select>
			</div>
			<div class="form-group">  
			  <input class="form-control" type="text" name="PlayerName" placeholder="Search" size="50">
			</div>     
			  <input class="btn btn-primary"type="submit" value="Search">
			</form>
			<div class="container-fluid">
              		</div>
	</div>
	</div>
	<div class="col-sm-2 sideMenu"></div>

</div>
</div>
</body>
</html>
