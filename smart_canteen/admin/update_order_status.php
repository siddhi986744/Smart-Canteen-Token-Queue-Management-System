<?php include "layout.php"; ?>
<?php
include "../db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

$order_id = $_POST['order_id'];
$status = $_POST['status'];

mysqli_query($conn,"
    UPDATE orders SET status='$status'
    WHERE order_id='$order_id'
");

header("Location: view_orders.php");
exit();
