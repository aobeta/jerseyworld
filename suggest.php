<?php
include 'database.php';
$input = $_POST["input"];
$sql = "select player_name from Jersey where player_name LIKE '$input%'";
$result = mysqli_query($con, $sql);
$text = "";
if(mysqli_num_rows($result) == 0){
    $text = "";
}else{
    while ($data = mysqli_fetch_assoc($result)){
    $text = "<p onclick=\"displaythis(this)\">". $data["player_name"] ."</p>";
    }
}
echo $text;

?>