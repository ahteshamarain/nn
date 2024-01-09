<?php
include("config.php");
$sql = "SELECT * FROM `products` AS p INNER JOIN `category` AS c ON c.catid = p.pcategory";
$result = mysqli_query($connection, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <tr>
                <td>'.$row['pid'].'</td>
                <td>'.$row['pname'].'</td>
                <td>'.$row['pnumber'].'</td>
                <td>'.$row['pcategory'].'</td>
                <td>'.$row['pprice'].'</td>
                <td><img src="upload/'.$row['pimage'].'" alt="" height="50px" width="50px"></td>               
                <td><button class="btn btn-primary edit" data-id="'.$row['pid'].'">Update</button></td>
                <td><button class="btn btn-danger delete" data-id="'.$row['pid'].'">Delete</button></td>
            </tr>
            ';
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>