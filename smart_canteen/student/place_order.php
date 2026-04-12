<?php
include "../db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: ../login.php");
    exit();
}

if (!isset($_GET['item_id'])) {
    header("Location: view_menu.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$item_id = (int) $_GET['item_id'];

// generate token
$token = "T" . rand(1000, 9999);

// insert order
mysqli_query($conn, "
    INSERT INTO orders (user_id, item_id, token_number, status)
    VALUES ('$user_id', '$item_id', '$token', 'pending')
");

// AFTER placing order → NOW redirect
header("Location: order_status.php");
exit();
