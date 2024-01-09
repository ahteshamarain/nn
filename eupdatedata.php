<?php 
include('config.php');

$user_id = $_POST['user_id'];
// echo $user_id;
$result = mysqli_query($connection, "SELECT * from `employeedata` where `eid` = '$user_id'");

if(mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
    echo json_encode($data);
    // print_r($data);
    
}
// if(isset($_POST['update'])){
//     $ufname = $_POST['fname'];
//     $ulname = $_POST['lname'];
//     $uemail = $_POST['email'];

// }


?>