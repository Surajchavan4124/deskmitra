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
$gender = $_POST["gender"];
$date_of_birth = $_POST["date_of_birth"];
$category = $_POST["category"];
$address = $_POST["address"];
$application_type = $_POST["application_type"];

$sql_qyery = "INSERT INTO services(name, phone_number, email, gender, date_of_birth, category, address, application_type) VALUES('$name', '$phone_number', '$email', '$gender', '$date_of_birth', '$category', '$address', '$application_type');";

$result = $db -> query($sql_qyery);

if (! $result) {
    die("Insert query execution failed". $db -> error);
}

if ($result) {
    echo "<script>window.location.replace('service-thank.html');</script>";
}

$db -> close()
?>