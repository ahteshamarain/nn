
<?php 
include("config.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname = mysqli_real_escape_string($connection,$_POST["fname"]);
    $lname = mysqli_real_escape_string($connection,$_POST["lname"]);
    $email = mysqli_real_escape_string($connection,$_POST["email"]);
    $pass = mysqli_real_escape_string($connection,$_POST["pass"]);
    $rpass = mysqli_real_escape_string($connection,$_POST["rpass"]);
if($pass == $rpass){

    $spc = password_hash($pass, PASSWORD_BCRYPT);
    $email_check = "SELECT * from `employeedata` where eemail = '$email'";
    $res = mysqli_query($connection, $email_check);
    if($res){
        if(mysqli_num_rows($res)> 0){
            echo 'Email already exist';
    }
    else{

        $insert = "INSERT into `employeedata` (`efname` , `elname` , `eemail` , `epass`) VALUES ('$fname' , '$lname' , '$email' , '$spc')";
   
        $result = mysqli_query($connection , $insert);
        if($result){
    echo 'New employee added successfully';
        }
    };
}
  
}else{
    echo 'Password does not match';
}



}
?>


