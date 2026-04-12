<?php
session_start();
include("../db.php");

if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['student_id'];
$item_id = $_POST['item_id'];

/* Generate Token Number */
$token = "T" . rand(100, 9999);

$query = "INSERT INTO orders (user_id, item_id, token_number, status)
          VALUES ('$user_id', '$item_id', '$token', 'pending')";

mysqli_query($conn, $query);

header("Location: order_status.php");
exit();
