<html>
<head>
<title>Jersey World</title>
</head>
<body>
<?php

session_start();
$custName = $_SESSION['custName'];
$userId = $_SESSION['userId'];
$orderId = $_SESSION['orderId'];

//get total order amount

$con = mysqli_connect("159.203.28.124", "Jersey", "letmein", "testing");
$sql = "SELECT original_total, total_tax, final_total, total_discount FROM Checkout WHERE order_id =".$orderId;
$result = mysqli_query($con, $sql);

while ($info = mysqli_fetch_array($result)) {

echo "<table style = 'width:25%'><tr><td><font size = '5'>Original Total:</font></td> <td><font size = '5'>$". $info['original_total'] ."</font></td></tr>";

echo "<tr><td><font color = 'red' size = '5'> Discount:</td></font> <td><font color = 'red' size = '5'>-".$info['total_discount']."</font></td></tr>";

echo "<tr><td><font size = '5'>Taxes: </font></td> <td><font size = '5'>+".$info['total_tax']."</font></td></tr>";

echo "<tr><td><font size = '5'><b>Total After Taxes & Discounts:</b></td></font> <td><font size = '5'><b>$".$info['final_total']."</b></font></td></b></tr></table>";

}

echo "<h1> </h1>";
echo "<h4>Order completed.  Will be shipped soon...</h4>";
echo "<h4>Your order reference number is: ".$orderId."</h4>";
echo "<h4>Shipping to customer: ".$userId." Name: ".$custName."</h4>";

echo "<h4>Shipping to Customer: ".$custName."</h4>";
echo "<h4>Customer ID: ".$userId."</h4>";

unset($_SESSION['orderId']);
unset($_SESSION['userId']);
unset($_SESSION['custName']);
unset($_SESSION['totalp']);
                              				
?>
<h2><a href="listprod.php">Back to Main Page</a></h2>

</body>
</html>

