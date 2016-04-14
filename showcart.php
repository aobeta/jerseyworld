<?php
//session_start();
if (isset($_GET["delete"])){
    $delete = $_GET["delete"];
}
if (isset($_GET["update"]) && isset($_GET["newqty"])){
   $theid = $_GET["update"];
   $newqty = $_GET["newqty"];
}

?>
<HTML>
<HEAD>
<TITLE>Your Shopping Cart</TITLE>
<link href="bootstrap.min.css" rel="stylesheet">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</HEAD>
<BODY onload="activate()">
<?php include 'header.php';?>
<script>
function update(newid, newqty)
{
	if(newqty != 0){
            window.location="showcart.php?update="+newid+"&newqty="+newqty;
        }else{
            window.location="showcart.php?delete="+newid;
        }
}
function activate(){
    document.getElementById("SC").setAttribute("class", "active");
}
</script>
<div class="container-fluid">
		<div class="row content">
		<div class="col-sm-2"></div>			
			<div class="col-sm-8">	
				<FORM name="form1">
<?php 
if(!isset($_SESSION["productlist"]) || empty($_SESSION["productlist"])){
    /*if(isset($_SESSION["logintocart"])){
        
        header("Location: listprod.php");
    }*/
    echo "<H1>Your shopping cart is empty!</H1>";
    
}  else {
    //TODO : add message for if user is logged in or not
    
    echo "<TABLE class=\"table table-hover\"><thead><TR><TH>Id</TH><TH>Name</TH><th>   </th><TH> Quantity </TH>";
    echo "<TH> Price </TH><TH> Subtotal </TH><TH></TH><TH></TH></TR></thead>";
    
    $productlist = $_SESSION["productlist"];
    if(isset($delete)){
        unset($productlist[$delete]);
    }
    if(isset($theid)){
        $productlist[$theid]["quantity"] = $newqty;
    }
    $count = 0;
    $total = 0;
    
    foreach($productlist as $key=>$val){
            $count++;
            echo "<tbody><TR><TD>".$val["id"]."</TD>";
            echo "<TD>".$val["name"]."</TD>";
            echo "<td><img src=\"jerseys/".$val["img"]."\"></td>";
            echo "<TD ALIGN=CENTER><INPUT TYPE=\"text\" name=\"newqty".$count."\" size=\"3\" value=\"";
            echo $val["quantity"]."\"></TD>";
            echo "<TD ALIGN=RIGHT>$".$val["price"]."</TD>";
            echo "<TD ALIGN=RIGHT>".$val["price"]*$val["quantity"]."</TD>";
            echo "<TD>&nbsp;&nbsp;&nbsp;&nbsp;<A HREF=\"showcart.php?delete=".$val["id"]."\">Remove Item</A></TD>";
            echo "<TD>&nbsp;&nbsp;&nbsp;&nbsp;<INPUT TYPE=BUTTON OnClick=\"update(".$val["id"].", document.form1.newqty".$count.".value)\" VALUE=\"Update Quantity\"></TR>";
        
      $total += $val["price"]*$val["quantity"];  
    }
    echo "<TR><TD COLSPAN=4 ALIGN=RIGHT><B>Order Total</B></TD><TD ALIGN=RIGHT>$".$total."</TD></TR>";
    echo "<H2><A class=\"btn btn-default\"HREF=\"login.php\">checkout > </A></H2>";
    $_SESSION["productlist"] = $productlist;
    $_SESSION["total"] = $total;
}

?>
                       <H2><A class="btn btn-primary" HREF="listprod.php">Continue Shopping</A></H2>
				</FORM>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>			
</BODY>
</HTML> 

