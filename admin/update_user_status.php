<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "deskmitra";
$db = new mysqli($servername, $username, $password, $database);

    if ($db -> connect_error) {
        die("Error connect database ".$db -> connect_error);
    }

$user_id = $_POST['user_id'];
$status = $_POST['status'];

$sql_qyery_status = "UPDATE users SET status='$status' WHERE user_id=$user_id;";
$result_status = $db -> query($sql_qyery_status);
if (!$result_status) {
    die("update query error".$db -> error);
}
if ($result_status)  {
    echo"<script>window.alert('User status updated successfully');
    window.location.href='view_users.php';</script>";
}
?>
