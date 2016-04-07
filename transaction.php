<?php

//Get promotion id
//$pcode = $_SESSION['pcode'];
// Get total
//$total = $_SESSION("total");
// Get order id
//$order = $_SESSION("orderId");
    
 $con = mysqli_connect("159.203.28.124", "Jersey", "letmein", "testing");
 $sqlt = "INSERT INTO Checkout (final_total, date_of_purchase) VALUES(".$_SESSION['total'].", DATE() )";
 $result = mysqli_query($con, $sql);

header("Location: OrderReview.php"); 


?>
