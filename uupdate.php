<?php 
include("config.php");

if(isset($_POST["uupdate"])){
    $id=$_POST["userid"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];

    $update = "UPDATE `userdata` SET `fname` = '$fname',`lname`='$lname',`email`='$email' where `id`='$id'";
$res=mysqli_query($connection,$update);
if($res){
    echo '<script>
    alert("include data succesfull")
    window.location.href="viewuser.php"
    </script>';
}

}
?>