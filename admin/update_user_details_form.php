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
    
    $user_id = $_GET["user_id"];
    $sql_qyery = "SELECT * FROM users WHERE user_id = $user_id;";
    $result = $db -> query($sql_qyery);
    $row = $result -> fetch_assoc();
?>

    <!-- Main section -->
    <main class="d-flex justify-content-center align-items-center p-5">
        <div class="container shadow-lg rounded rounded-3 p-5">
            <form action="update_user_details.php" method="post" class="row p-4 g-3">
              <h1 class="text-center">Update User</h1>
              <div class="col-md-6 col-sm-12 form-group">
                    <label for="user id" class="form-label">User id</label>
                    <input class="form-control" type="text" name="user_id" value="<?= $row['user_id']; ?>" readonly>
                </div>
                <div class="col-md-6 col-sm-12 form-group">
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" type="text" name="username" value="<?= $row['username']; ?>">
                </div>
                <div class="col-md-6 col-sm-12 form-group">
                    <label for="email" class="form-label">email</label>
                    <input class="form-control" type="text" name="email" value="<?= $row['email']; ?>">
                </div>
                <div class="col-md-6 col-sm-12 form-group">
                    <label for="password" class="form-label">password</label>
                    <input class="form-control" type="text" name="password" value="<?= $row['password']; ?>">
                </div>
                <div>
                <button type="submit" class="btn btn-success">Update</button>
                </div>
                <div>
            <button type="button" class="btn btn-primary"><a href="view_users.php" class="nav-link">Return to admin panel</a></button>
            </div>
            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
