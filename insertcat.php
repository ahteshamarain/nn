<?php 
include('config.php');

// print_r($_POST);

$cat_name = $_POST['cat_name'];
$cat_des = $_POST['cat_des'];
$cat_status = $_POST['cat_status'];
$insert="INSERT INTO `category` (`catid`, `catname`, `catdes`, `catstatus`, `catdate`) VALUES (NULL, '$cat_name', '$cat_des', '$cat_status', current_timestamp())";
$result=mysqli_query($connection, $insert);
if($result){
    echo "category added successfully";
}else{
    echo "failed to add category";
}


?>