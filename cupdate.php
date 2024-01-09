<?php 
include("config.php");

if(isset($_POST["cupdate"])){
    $id=$_POST["userid"];
    $cname=$_POST["cname"];
    $cdes=$_POST["cdes"];
    $cstatus=$_POST["cstatus"];

   

    $update = "UPDATE `category` SET `catname` = '$cname',`catdes`='$catdes',`catstaus`='$cstatus' where `catid`='$id'";
$res=mysqli_query($connection,$update);
if($res){
    echo '<script>
    alert("include data succesfull")
    window.location.href="viecategory.php"
    </script>';
}

}
?>