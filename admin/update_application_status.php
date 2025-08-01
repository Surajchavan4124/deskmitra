        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "deskmitra";
$db = new mysqli($servername, $username, $password, $database);

    if ($db -> connect_error) {
        die("Error connect database ".$db -> connect_error);
    }

$service_id = $_POST['service_id'];
$status = $_POST['status'];

$sql_qyery_status = "UPDATE services SET status='$status' WHERE service_id=$service_id;";
$result_status = $db -> query($sql_qyery_status);
if (!$result_status) {
    die("update query error".$db -> error);
}
if ($result_status)  {
    echo"<script>window.alert('Application status updated successfully');
    window.location.href='admin.php';</script>";
}
?>
