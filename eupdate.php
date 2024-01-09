<?php 
include("config.php");

if(isset($_POST["eupdate"])){
    $id=$_POST["userid"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];

    $update = "UPDATE `employeedata` SET `efname` = '$fname',`elname`='$lname',`eemail`='$email' where `eid`='$id'";
$res=mysqli_query($connection,$update);
if($res){
    echo '<script>
    alert("include data succesfull")
    window.location.href="vieemp.php"
    </script>';
}

}
?>