<?php
session_start();
include("../db.php");

if (!isset($_SESSION['student_id'])) {
    exit();
}

$student_id = $_SESSION['student_id'];

$query = "
SELECT orders.token_number, orders.status, menu_items.name
FROM orders
JOIN menu_items ON orders.item_id = menu_items.item_id
WHERE orders.user_id = '$student_id'
ORDER BY orders.order_id DESC
LIMIT 1
";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    echo "
        <p><strong>Item:</strong> {$row['name']}</p>
        <p><strong>Token:</strong> {$row['token_number']}</p>
        <p><strong>Status:</strong> " . ucfirst($row['status']) . "</p>
    ";
} else {
    echo "<p>No order placed yet.</p>";
}
