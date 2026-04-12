<?php include "layout.php"; ?>
<?php
include "../db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = $_POST['image'];

mysqli_query($conn,"
    INSERT INTO menu_items (name, price, category, image, availability)
    VALUES ('$name','$price','$category','$image',1)
");

header("Location: view_menu.php");
exit();
