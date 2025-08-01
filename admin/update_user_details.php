<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DeskMitra Homepage</title>
    <link rel="shortcut icon" href="assets/icons/DeskMitra Favicon.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "deskmitra";

    $db = new mysqli($servername, $username, $password, $database);
    if ($db -> connect_error) {
      die("Error connect database ".$db -> connect_error);
    }
    
    $user_id = $_POST["user_id"];
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $sql_qyery = "UPDATE users SET 
    username = '$username',
    email = '$email',
    password = '$password'
    WHERE user_id = $user_id;";

    $result = $db -> query($sql_qyery);
    if (! $result) {
        die("update query error ".$db -> error);
    }

    if ($result) {
        echo "<script>window.alert('User details updated successfully');
        window.location.href='view_users.php';</script>";
    }
    ?>
