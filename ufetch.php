<?php
include("config.php");

$data = mysqli_query($connection, "SELECT * from `userdata`");
if ($data) {
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            echo '
                <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['fname'] . '</td>
                    <td>' . $row['lname'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>
                    <button type="button" class="btn btn-primary edit"data-id="' . $row['id'] . '" data-bs-toggle="modal" data-bs-target="#updatedata">
                    Update
                    </button>
                    </td>
                    <td>
                        <button class="btn btn-danger delete" data-id="' . $row['id'] . '">Delete</button>
                    </td>
                </tr>';
        }
    }
}
?>
