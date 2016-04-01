

<html>
<head>
<title>Log In</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
   <?php include 'header.php';?>
<div class="container-fluid ">    
  <div class="row content">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">	
		<h2>Login</h2>

		<form  method="post" action="authenticate.jsp" role="form">
			<div class="row">
				<div class="form-group col-lg-4">
					
					<input type="email" class="form-control " name="email" placeholder="Enter email" size = "20">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-4">
					
					<input type="password" name="password" class="form-control" placeholder="Enter Password" size="20">
				</div>
			</div> 
			<div class="checkbox">
			  <label><input type="checkbox"> Remember me</label>
		   </div>
			<input class="btn btn-primary btn-lg"type="submit" value="Login">
		</form>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>	