<?php

session_start();

//Get promotion id
//$pcode = $_SESSION['pcode'];
// Get total
//$total = $_SESSION("total");
// Get order id
//$order = $_SESSION("orderId");
    
 $con = mysqli_connect("159.203.28.124", "Jersey", "letmein", "testing");
 //$sqlt = "INSERT INTO Checkout (final_total, date_of_purchase) VALUES(".$_SESSION['total'].", DATE() )";
 $sql = "INSERT INTO Orders(user_id, total_amount, date_of_purchase) VALUES (".$_SESSION['uid'].",".$_SESSION['total'].", NOW())";
 $result = mysqli_query($con, $sql);
 
header("Location: OrderMade.php"); 
?>
