<?php
include 'database.php';
session_start();
// initializing color array
$colors["basketball"] = "orange";
$colors["football"] = "brown";
$colors["hockey"] = "black";
$colors["soccer"] = "blue";

//getting GET variables
$pname = $_GET["playerName"];
$cname = $_GET["categoryName"];
$hasName = $pname != "" && $pname != null;
$hasSport = $cname != "All Sports" && $cname != "" && $cname != NULL;

if($hasName && $hasSport){
    $sql = "SELECT player_id, player_name, player_team, price, image, sport FROM Jersey WHERE player_name LIKE '%$pname%' AND sport = $cname";
    $filter = "<h3>Players named '".$pname."' in: '".$cname."'</h3>";
}elseif($hasName && !$hasSport){
    $sql = "SELECT player_id, player_name, player_team, price, image, sport FROM Jersey WHERE player_name LIKE '%$pname%'";
    $filter = "<h3>Players named '".$pname."'</h3>";
}elseif(!$hasName && $hasSport){
    $sql = "SELECT player_id, player_name, player_team, price, image, sport FROM Jersey WHERE sport = '$cname'";
    $filter = "<h3>Players in: '".$cname."'</h3>";
}  else {
    $sql = "SELECT player_id, player_name, player_team, price, image, sport FROM Jersey";
    $filter ='<h3>All Players</h3>';
}

$result = mysqli_query($con, $sql) or die(mysqli_error($con));
//essentially creating the columns for the table data
while ($data = mysqli_fetch_assoc($result)){
    $names[] = $data["player_name"];
    $teams[] = $data["player_team"];
    $pid[] = $data["player_id"];
    $prices[] = $data["price"];
    $imgurl[]= $data["image"];
    $sport[] = $data["sport"];
}
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
  <script src="script.js"></script>
</head>
<body>
<div class="container-fluid twopiece">
<div class="jumbotron">
    <H1 align="center"><a href="listprod.php" style="text-decoration: none">Jersey World</a></H1>      
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


li {
    list-style: none;
    padding: 0;
    left: -10px;
    margin: 0;
}

li:hover{
    background-color: lightsteelblue;
}
#theList{
    margin: 10px;
    border:1px solid grey;
    padding-left:0;
    position: relative;
    left: 105px;
    width: 52%;
    top: -9px;
    border-radius: 2%;
    display: intitial;
}
.suggest{
    padding-left: 1.5%;
}
</style>

</div>
<nav class="navbar navbar-inverse" style="border-radius:none;">
  <div class="container-fluid">
     <div>
      <ul class="nav navbar-nav">
          
        <li class="active"><a href="#">Home</a></li>
        <li><a href="showcart.php">Shopping Cart</a></li>
        <li><a href="login.php">Checkout</a></li> 
       
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
<div class="container-fluid">
    <form class="form-inline" method="get" action="listprod.php">
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
                            <input class="form-control" type="text" name="playerName" placeholder="Search..." size="50" onkeypress="grabit(this.value)" onkeyup="grabit(this.value)">
			</div>     
			  <input class="btn btn-primary"type="submit" name="submit" value="Search">
                           
                              <ul id="theList">
                                  <li class="suggest" id="s1"></li><br>
                                  <li class="suggest" id="s2"></li><br>
                                  <li class="suggest" id="s3"></li><br>
                                  <li class="suggest" id="s4"></li>
                              </ul>    
                          </div>
			</form>
                        
                        
                       
			
            
                <?php echo $filter;?>
                <font face="Century Gothic" size="3"><table class="table" ><tr><th></th><th> </th>
                <th>Price</th><th>Player Name</th><th>Team</th></tr>
               <?php 
                for($i = 0; $i < count($names); $i++){
                    $font_color = $colors[$sport[$i]];
                    echo '<tr><td ><a href="addcart.php?id='.$pid[$i].'&name='.$names[$i].'&team='.$teams[$i].'&price='.
                          $prices[$i].'&imageDir='.$imgurl[$i].'">Add to Cart</a></td>';
                    
                    echo '<td><img src="jerseys/'.$imgurl[$i].'"alt="Jersey" style="width:150px;height:120px;"></td>';
                    echo '<td><font color="'.$font_color.'">$'.$prices[$i].'</font></td><td><font color="'.$font_color;
                    echo '">'.$names[$i].'</font></td><td><font color="'.$font_color.'">'.$teams[$i].'</font></td></tr>';   
                }  ?>
                        </table></font>   
                        </div>
	</div>
	</div>
	<div class="col-sm-2 sideMenu"></div>

</div>
</div>
</body>
</html>
