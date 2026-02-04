<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel="shortcut icon" href="../assets/icons/DeskMitra Favicon.png" type="image/x-icon">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="wrapper">
      <aside id="sidebar">
        <?php require_once("admin_sidebar.php"); ?>
      </aside>
      <div class="main">
        <nav class="navbar navbar-expand px-4 py-3">
          <form action="#" class="d-none d-sm-inline-block"></form>
          <div class="navbar-collapse collapse">
            <ul class="navbar-nav">
            <li class="nav-item m-auto">
                <i class="fa-solid fa-arrow-left" id="backArrow" onclick="history.back()"></i>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                  <img src="account.png" class="avatar img-fluid" alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-end rounded">
                    <ul>
                        <li>Profile</li>
                        <li>Logout</li>
                    </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
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

        ?>
        <main class="content px-3 py-4">
          <div class="container-fluid">
            <div class="mb-3">
              <h3 class="fw-bold fs-4 mb-3">Admin Dashboard (Applications Under Process)</h3>
              <div class="row g-2">
                <!-- <div class="col-12 col-md-3">
                  <div class="card border-0 bg-primary text-white">
                    <div class="card-body py-4">
                      <h5 class="mb-2 fw-bold">New Applications</h5>
                      <p class="mb-2 fw-bold">
                        <?php
                        
                        // $sql_qyery_received = "SELECT * FROM services WHERE status='received';";
                        // $result_received = $db -> query($sql_qyery_received);
                        // if (!$result_received) {
                        //   die("Select query error".$db -> error);
                        // }


                        // echo $result_received->num_rows;
                        ?>
                      </p>
                    </div>
                  </div>
                </div> -->
                <div class="col-12 col-md-3">
                  <div class="card border-0 bg-warning text-white">
                    <div class="card-body py-4">
                      <h5 class="mb-2 fw-bold">Under Process</h5>
                      <p class="mb-2 fw-bold"><?php
                        $sql_qyery_process = "SELECT * FROM services WHERE status='under process';";
                        $result_process = $db -> query($sql_qyery_process);
                        if (!$result_process) {
                          die("Select query error".$db -> error);
                        }

                        echo"$result_process->num_rows";
                        ?></p>
                    </div>
                  </div>
                </div>
                <!--
                <div class="col-12 col-md-3">
                  <div class="card border-0 bg-success text-white">
                    <div class="card-body py-4">
                      <h5 class="mb-2 fw-bold">Completed</h5>
                      <p class="mb-2 fw-bold"><?php
                        // $sql_qyery_completed = "SELECT * FROM services WHERE status='completed';";
                        // $result_completed = $db -> query($sql_qyery_completed);
                        // if (!$result_completed) {
                        //   die("Select query error".$db -> error);
                        // }

                        // echo"$result_completed->num_rows";
                        ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-3">
                  <div class="card border-0 bg-danger text-white">
                    <div class="card-body py-4">
                      <h5 class="mb-2 fw-bold">Applications Rejected</h5>
                      <p class="mb-2 fw-bold">
                        <?php
                        // $sql_qyery_rejected = "SELECT * FROM services WHERE status='rejected';";
                        // $result_rejected = $db -> query($sql_qyery_rejected);
                        // if (!$result_rejected) {
                        //   die("Select query error".$db -> error);
                        // }

                        // echo"$result_rejected->num_rows";
                        ?>
                      </p>
                    </div>
                  </div>
                </div> -->
              </div>
              <h3 class="fw-bold fs-4 my-3">Applications Under Process</h3>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-hover table-bordered text-nowrap">
                    <thead class="table-dark align-top">
                      <tr class="highlight">
                        <th class="col-1">Service Id</th>
                        <th class="col-1">Name</th>
                        <th class="col-1">Phone Number</th>
                        <th class="col-1">Email</th>
                        <th class="col-1">Gender</th>
                        <th class="col-1">Date Of Birth</th>
                        <th class="col-1">Category</th>
                        <th class="col-1">Address</th>
                        <th class="col-1">Application Type</th>
                        <th class="col-1">Created At</th>
                        <th class="col-2" colspan="2">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql_qyery = "SELECT * FROM services WHERE status = 'under process'";
                      $result = $db -> query($sql_qyery);
                      if (!$result) {
                        die("select query error".$db -> error);
                      }
                      if ($result -> num_rows > 0) {
                        foreach ($result as $row) {
                        ?>
                          <tr>
                            <th><?= $row["service_id"];?></th>
                            <td><?= $row["name"];?></td>
                            <td><?= $row["phone_number"] ?></td>
                            <td><?= $row["email"]; ?></td>
                            <td><?= $row["gender"]; ?></td>
                            <td><?= $row["date_of_birth"]; ?></td>
                            <td><?= $row["category"]; ?></td>
                            <td class="text-wrap"><?= $row["address"]; ?></td>
                            <td><?= $row["application_type"]; ?></td>
                            <td><?= $row["created_at"]; ?></td>
                            <td style="min-width: 200px;">
                            <form action="update_application_status.php" method="post">
                                <input type="hidden" name="service_id" id="service_id" value="<?= $row["service_id"]; ?>">
                                <select name="status" id="status" class="form-control">
                                    <option value="received" <?= $row["status"] == 'new' ? 'selected' : '' ?>>received</option>
                                    <option value="under process" <?= $row["status"] == 'under process' ? 'selected' : '' ?>>under process</option>
                                    <option value="completed" <?= $row["status"] == 'completed' ? 'selected' : '' ?>>completed</option>
                                    <option value="rejected" <?= $row["status"] == 'rejected' ? 'selected' : '' ?>>rejected</option>
                                </select>
                                </td><td>
                                <button type="submit" class="btn btn-success">Update status</button>
                            </form></td>
                          </tr>

                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-body-secondary">
              <div class="col-6 text-start">
                <a class="text-body-secondary" href=" #">
                  <strong>DeskMitra</strong>
                </a>
              </div>
              <div class="col-6 text-end text-body-secondary d-none d-md-block">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a class="text-body-secondary" href="../contact.php">Contact</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-body-secondary" href="../about.php">About Us</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-body-secondary" href="#"
                      >Terms & Conditions</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    ></script>
    <script src="https://kit.fontawesome.com/1757314b6a.js" crossorigin="anonymous"></script>
    <script src="admin.js"></script>
  </body>
</html>
