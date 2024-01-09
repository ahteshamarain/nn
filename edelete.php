<?php 
include("config.php");

$userid = $_POST['userid'];

$result = mysqli_query($connection , "DELETE  from `employeedata` where `eid` = '$userid'");
if($result){
echo"data successfully deleted";
}
else{
    echo"error";
}
?>