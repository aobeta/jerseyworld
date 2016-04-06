<?php
session_start();
//inititializing GET variables
$id = $_GET["id"];
$name = $_GET["name"];
$team = $_GET["team"];
$price = $_GET["price"];
$img = $_GET["imageDir"];

//creating an array
$product["id"] = $id;
$product["name"] = $name;
$product["team"] = $team;
$product["price"] = $price;
$product["img"] = $img;
$product["quantity"] = 1;


/*if productlist session variable exists grab it and add to it, also if product
 * is already in productlist then the quantity is updated
 */
if (isset($_SESSION["productlist"])) {
    $productlist = $_SESSION["productlist"];
    if (array_key_exists($id, $productlist)){
        $productlist[$id]["quantity"]++;
    }else{
        $productlist[$id] = $product;
    }
    $_SESSION["productlist"] = $productlist;
    
    
    header("location: showcart.php");
}else{
    $productlist[$id] = $product;
    $_SESSION["productlist"] = $productlist;
    print_r($_SESSION);
    header("location: showcart.php");
}


?>
