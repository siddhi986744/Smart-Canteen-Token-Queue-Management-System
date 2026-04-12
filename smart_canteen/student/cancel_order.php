<?php
session_start();
include "../db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'student') {
    header("Location: ../login.php");
    exit();
}

$order_id = $_GET['order_id'];
$user_id  = $_SESSION['user_id'];

/* Allow cancel ONLY if pending */
$query = "
UPDATE orders 
SET status='cancelled'
WHERE order_id='$order_id'
AND user_id='$user_id'
AND status='pending'
";

mysqli_query($conn, $query);

header("Location: order_status.php");
exit();
?>
