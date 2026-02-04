<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel="shortcut icon" href="assets/icons/DeskMitra Favicon.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>



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

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "suraj" && $password == "admin") {
    echo "<script>window.alert('Admin login successfull. Click OK to redirect to admin panel.');
    window.open('admin/admin.php', '_blank');</script>";
    exit(0);
}

$sql_qyery = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";
$result = $db -> query($sql_qyery);

if (!$result) {
    die("select query execution failed". $db -> error);
}

if ($result -> num_rows > 0) {
    echo "<script>window.alert('Login Successfull. Click OK to redirect to the homepage.');window.location.replace('index.php');</script>";
    exit(0);
} else {
    echo "<script>window.alert('Invalid username or password or user does not exists');window.location.replace('login-registration.html')</script>";
}

?>



    <script
      src="https://kit.fontawesome.com/1757314b6a.js"
      crossorigin="anonymous"
    ></script>
    <script src="login-register.js"></script>
  </body>
</html>
