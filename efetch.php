
<?php
include("config.php");

$data = mysqli_query($connection, "SELECT * from `employeedata`");
if ($data) {
    if (mysqli_num_rows($data) > 0) {
        while ($row = mysqli_fetch_assoc($data)) {
            echo '
                <tr>
                    <td>' . $row['eid'] . '</td>
                    <td>' . $row['efname'] . '</td>
                    <td>' . $row['elname'] . '</td>
                    <td>' . $row['eemail'] . '</td>
                    <td>
                    <button type="button" class="btn btn-primary edit"data-id="' . $row['eid'] . '" data-bs-toggle="modal" data-bs-target="#updatedata">
                    Update
                    </button>
                    </td>
                    <td><button class="btn btn-danger delete" data-id="' . $row['eid'] . '">Delete</button></td>
                </tr>';
        }
    }
}
?>
