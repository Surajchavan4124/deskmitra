<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "deskmitra";

$db = new mysqli($servername, $username, $password, $database);

if ($db -> connect_error) {
    die("Error connect database ".$db -> connect_error);
}

$name = $_POST["name"];
$phone_number = $_POST["phone_number"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$query = $_POST["query"];

$sql_qyery = "INSERT INTO user_contact(name, phone_number, email, subject, query) VALUES('$name', '$phone_number', '$email', '$subject', '$query');";
$result = $db -> query($sql_qyery);

if (!$result) {
    die("Insert query execution failed ".$db -> error);
}

if ($result) {
    echo "<script>window.alert('Query raised successfully');
        window.location.replace('index.php')</script>";
}
$db -> close();
?>