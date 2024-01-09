<?php 
include("config.php");

$pid = $_POST['pid'];

$result = mysqli_query($connection , "DELETE  from `products` where `pid` = '$pid'");
if($result){
echo"data successfully deleted";
}
else{
    echo"error";
}
?>