<?php
include("config.php");

if (isset($_POST["register"])) {
    $cpass = mysqli_real_escape_string($connection, $_POST['cpass']);
    $npass = mysqli_real_escape_string($connection, $_POST['npass']);
    $rpass = mysqli_real_escape_string($connection, $_POST['rpass']);

    // Validate and sanitize input if necessary
    if ($npass == $rpass) {
        $verify = "SELECT * FROM `admin`";
        $result = mysqli_query($connection, $verify);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $dbpass = $row["admin_password"];
                $verifypass = password_verify($cpass, $dbpass);

                if ($verifypass) {
                    // Hash the new password
                    $hashedPassword = password_hash($npass, PASSWORD_DEFAULT);

                    // Add WHERE clause to specify the admin record to update
                    $update = "UPDATE `admin` SET `admin_password`='$hashedPassword' WHERE `admin_id` = 10"; // Replace 'admin_id' with your actual identifier
                    $result = mysqli_query($connection, $update);

                    if ($result) {
                        echo '<script>
                        alert("Update successful")
                        window.location.href="users-profile.php"
                        </script>';
                    } else {
                        echo '<script>
                        alert("Error updating password")
                        window.location.href="users-profile.php"
                        </script>';
                    }
                } else {
                    echo '<script>
                    alert("Current password does not match")
                    window.location.href="users-profile.php"
                    </script>';
                }
            } else {
                echo '<script>
                alert("Data not found")
                window.location.href="users-profile.php"
                </script>';
            }
        } else {
            echo '<script>
            alert("Error in query")
            window.location.href="users-profile.php"
            </script>';
        }
    } else {
        echo '<script>
        alert("New password and confirm password do not match")
        window.location.href="users-profile.php"
        </script>';
    }
} else {
    echo '<script>
    alert("Form not submitted")
    window.location.href="users-profile.php"
    </script>';
}
?>
