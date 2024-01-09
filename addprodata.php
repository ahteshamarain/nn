<?php 
include("config.php");

// print_r($_FILES['proimage']);
// print_r($_POST['proname']);
// print_r($_POST['procode']);
// print_r($_POST['proprice']);
// print_r($_POST['procat']);


    $pname = $_POST["proname"];
    $pcat = $_POST["procat"];
    $pprice = $_POST["proprice"];
    $pcode = $_POST["procode"];
    $pimage = $_FILES["proimage"]["name"];
    $tmp_name = $_FILES["proimage"]["tmp_name"];



    if (!empty($pname) && !empty($pcat) && !empty($pprice) && !empty($pcode) && !empty($pimage)) {
        $insert = "INSERT INTO `products` (`pid`, `pname`,`pcategory`, `pnumber`, `pprice`, `pimage`) VALUES (NULL, '$pname','$pcat', CONCAT('$pcode', '-' , FLOOR(10000 + RAND() * 90000)), '$pprice', '$pimage')";
        
        // Use prepared statements to prevent SQL injection
        $result = mysqli_query($connection, $insert);
      
        
        move_uploaded_file($tmp_name, 'upload/' . $pimage);

        // Check if the query was successful
        if ($result) {
            echo 'Product added successfully';
        } else {
            echo "Error: " . mysqli_error($connection);
        }

    }

?>