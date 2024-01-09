<?php
include("config.php");

$data = mysqli_query($connection, "SELECT * from `category`");
if ($data) {
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            echo '
                <tr>
                    <td>' . $row['catid'] . '</td>
                    <td>' . $row['catname'] . '</td>
                    <td>' . $row['catdes'] . '</td>;
                    <td>';

            if ($row['catstatus']==1) {
                echo '<span class="bg-light-primary text-dark-primary">active</span>';
            }
            else{
                echo '<span class="bg-light-danger text-dark-danger">deactive</span>';
            }

            echo '</td>
                    <td>' . $row['catdate'] . '</td>

                    <td>
                    <button type="button" class="btn btn-primary edit"data-id="' . $row['catid'] . '" data-bs-toggle="modal" data-bs-target="#updatedata">
                    Update
                    </button>
                    </td>
                    <td><button class="btn btn-danger delete" data-id="' . $row['catid'] . '">Delete</button></td>
                </tr>';
        }
    }
}
?>

