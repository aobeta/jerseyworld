

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Jersey World</title>
</head>
<body>
<?php
include 'header.php';
//session_start();
?>
<div class="container">
	<div class="row content">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
                   
               
                <?php
                    if(isset($_SESSION['total']))
                    {
                       $curTotal = $_SESSION['total'];
                       echo "<h4 class=\"well\">Current Total Before Promotion: $".$curTotal."</h4>";
                    }                             
                
                ?>
                    
                

		<form method="get" action="applyPromotion.php">
		
		<h2>Enter Promotion Code:</h2>
		<div class="row">
			<div class="form-group col-lg-4">
			<input class="form-control" type="text" name="pcode" size="20">
			</div>
		</div>
			<input class="btn btn-default" type="submit" value="submit">
		
		</form>

                    <h2><a class="btn btn-success"href="applyPromotion.php?pcode=0">Skip</a></h2>
		
		</div>
	</div>
</div>
</body>
</html>





