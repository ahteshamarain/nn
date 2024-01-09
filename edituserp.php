<?php
// print_r($_POST);
// foreach($_POST as $k =>$v) {
//     echo "$k = $v <br>";
// };

include("config.php");

if (isset($_POST['register'])){
    $fname = $_POST["fullName"];
    $about = $_POST["about"];
    $company = $_POST["company"];
    $job = $_POST["job"];
    $country = $_POST["country"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

// echo "$fname, $lname, $company,$job,$country, $address,$phone,$email";

        $insert = "UPDATE `adminpro` set `fullname`='$fname' , `about`='$about' , `company`='$company' , `job`='$job',`country`='$country',`address`='$address',`phone`='$phone',`email`='email'"; 
   
        $result = mysqli_query($connection , $insert);
        if($result){
    echo '<script>
    alert("update admin profile succesfull")
    window.location.href="users-profile.php"
    </script>';
        }else{
            echo '<script>
            alert("error")
            window.location.href="users-profile.php"
            </script>';
        }
    };

?>