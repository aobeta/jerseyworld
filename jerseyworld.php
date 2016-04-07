
<!DOCTYPE html>
<!DOCTYPE hmtl>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Welcome to JerseyWorld</title>
	<style type="text/css">
		h1{color:red}
	</style>
</head>
<body>
	
	<div class="container-fluid">	
		<div class="jumbotron">
			<H1 align="center">WELCOME TO JERSEYWORLD</H1>      
			<style>
                            html, body{
                                padding: 0;
                                margin: 0;
                                overflow: hidden;
                            }
                        h1 {
	    		font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
				font-size: 24px;
				font-style: normal;
				font-variant: normal;
				font-weight: 500;
				line-height: 26.4px;
			}
                        img{
                            margin: 40% auto;
                            
                            
                        }
                        .row-content{
                            margin-top: 0;
                             position: relative;
                             top: -150px;
                            
                        }
                        h4{
                            margin: 0;
                            position: relative;
                            top: 150px;
                            left: 58px;
                        }
                        a{
                            color: grey;
                            transition: color 1s;
                        }
                        #c:hover{
                            color: red;
                        }
                        #u:hover{
                            color: blue;
                        }
			</style>
			<br>
			<br>
			<div class="btn-group">
				<a class="btn btn-info bt-lg" href="Login.php"><span class="glyphicon glyphicon-log-in"></span>  LOGIN</a>
                                <a class="btn btn-info bt-lg" href="signup.php">SIGN UP&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></a>
			</div>
		</div>
            <div class="row-content">
                <div class="col-sm-2"></div>
             <div class="col-sm-4"> 
                 <h4 ><a id="u" href="listprod.php" style="text-decoration:none">Go to JerseyWorld&trade; U.S.A</a></h4>
                 <a href="listprod.php"><img title="JerseyWorld&trade;" src="img/usa.jpg" height="300" width="300"></a>
            </div>
            <div class="col-sm-4">
                <h4 ><a id="c" href="listprod.php" style="text-decoration:none">Go to JerseyWorld&trade; Canada</a></h4>
                <a href="listprod.php"><img title="JerseyWorld&trade;" src="img/canada.jpg" height="300" width="400"></a>
            </div>
                <div class="col-sm-2"></div>
          </div>
        </div>		




</body>
