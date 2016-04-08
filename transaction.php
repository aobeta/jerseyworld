<?php
<<<<<<< HEAD
session_start();
=======
>>>>>>> 0337edf3364d2851595cf4046db8dd3f6d1ac30d
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
<<<<<<< HEAD
=======
 
>>>>>>> 0337edf3364d2851595cf4046db8dd3f6d1ac30d
 
header("Location: OrderMade.php"); 
?>
