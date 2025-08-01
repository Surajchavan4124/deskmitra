<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "deskmitra";

$db = new mysqli($servername, $username, $password, $database);

if ($db -> connect_error) {
    die("Error connect database ".$db -> connect_error);
}

$username = $_POST["username"];
$email =  $_POST["email"];
$password = $_POST["password"];

$sql_qyery = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password');";
$result = $db -> query($sql_qyery);

if (! $result) {
    die("User insert query execution failed". $db -> error);
}

if ($result) {
    echo "<script>window.alert('Registration Successfull. Click OK to redirect to the homepage.');window.location.replace('index.php');</script>";
    exit();
}

?>