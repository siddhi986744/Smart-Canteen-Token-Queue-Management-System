<?php
session_start();
include "../db.php";

$user_id = $_SESSION['user_id'];
$food_name = $_POST['food_name'];
$rating = $_POST['rating'];
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

$query = "INSERT INTO feedback (user_id, food_name, rating, comment)
          VALUES ('$user_id', '$food_name', '$rating', '$comment')";

mysqli_query($conn, $query);

header("Location: dashboard.php");
exit();
?>
