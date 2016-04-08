<html>
<head>
<title>Jersey World</title>
<style>
    #items {
        background-color: grey;
        float: right;
        height: 80%;
        text-align: center;
        overflow: auto;
        
    }
    #orderheader {
        
        text-decoration: underline;
        text-transform: uppercase;
        font-size: 250%;
        margin-bottom: 30px;
    }
    #orderheadersub {
        
    }
    #displayitems {
        text-align: center;
        margin-left:auto; 
        margin-right:auto;
    }
    
</style>
<?php
include 'header.php';
session_start();
$custName = $_SESSION['firstname'];
$userId = $_SESSION['uid'];
$orderId = $_SESSION['orderId'];
$email = $_SESSION['email'];
$productlist = $_SESSION["productlist"];
$total = $_SESSION['total'];
?>
</head>
<body>
<div id="items" class="col-sm-4">
    <h1 id="orderheader">Order</h1>
    <table id="displayitems"><tr id="orderheadersub"><th>Player Name</th><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;Jersey</th></tr>
<?php
foreach($productlist as $key=>$val){
    
    echo "<tr><td>".$val['name']."</td><td><img src=\"jerseys/".$val['img']."\"></td></tr>";
    
}
?>
    </table>
</div> 
<div id="info">
<?php
//get total order amount
/*
$con = mysqli_connect("159.203.28.124", "Jersey", "letmein", "testing");
$sql = "SELECT original_total, total_tax, final_total, total_discount FROM Checkout WHERE order_id =".$orderId;
$result = mysqli_query($con, $sql);

while ($info = mysqli_fetch_array($result)) {

echo "<table style = 'width:25%'><tr><td><font size = '5'>Original Total:</font></td> <td><font size = '5'>$". $info['original_total'] ."</font></td></tr>";

echo "<tr><td><font color = 'red' size = '5'> Discount:</td></font> <td><font color = 'red' size = '5'>-".$info['total_discount']."</font></td></tr>";

echo "<tr><td><font size = '5'>Taxes: </font></td> <td><font size = '5'>+".$info['total_tax']."</font></td></tr>";

echo "<tr><td><font size = '5'><b>Total After Taxes & Discounts:</b></td></font> <td><font size = '5'><b>$".$info['final_total']."</b></font></td></b></tr></table>";

}
*/
//echo "<h1> </h1>";

echo "<h4>Order completed</h4>";
echo "<h4>Total amount comes to: $".$total."</h4>";
echo "<h4>Your order reference number is: ".rand()."</h4>";
echo "<h4>Customer Id: ".$userId."</h4>";

//echo "<h4>Review of Order</h4>";

echo "<h4>Shipping to Customer: ".$custName."</h4>";
echo "<h4>Customer Email: ".$email."</h4>";

//ADD UNSET SESSION
//session_unset();
//unset($GLOBALS[_SESSION]["productlist"]);
unset($_SESSION['productlist']);
?>
<h2><a href="listprod.php">Back to Main Page</a></h2>
</div>
</body>
</html>

