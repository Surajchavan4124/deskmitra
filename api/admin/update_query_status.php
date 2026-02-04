<?php
$servername = "hopper.proxy.rlwy.net";
$username = "root";
$password = "NUrmlGfIAyWEJNvtSDEHUmmKtLQinJXd";
$database = "railway";
$port       = 47375;

$db = new mysqli($servername, $username, $password, $database, $port);
    if ($db -> connect_error) {
      die("Error connect database ".$db -> connect_error);
    }
    
    $query_id = $_POST["query_id"];
    $status = $_POST["status"];

    $sql_qyery = "UPDATE user_contact SET status = '$status' WHERE user_contact_id = $query_id;";
    $result = $db -> query($sql_qyery);
    if (! $result) {
        die("update query error". $db -> error);
    }

    if ($result) {
        echo"<script>window.alert('Status updated successfullu');
        window.location.href='user_queries.php';
        </script>";
    }
    $db -> close()
?>