<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "deskmitra";

    $db = new mysqli($servername, $username, $password, $database);
    if ($db -> connect_error) {
      die("Error connect database ".$db -> connect_error);
    }
    
    $user_id = $_GET["user_id"];

    $sql_qyery = "DELETE FROM users WHERE user_id = $user_id;";
    $result = $db -> query($sql_qyery);
    if (! $result) {
        die("delete query error ". $db -> error);
    }

    if ($result) {
        echo"<script>window.alert('user deleted successfully');
        window.location.href='view_users.php';
        </script>";
    }
    $db -> close()
?>