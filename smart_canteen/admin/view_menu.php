<?php include "layout.php"; ?>
<?php
session_start();
include "../db.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM menu_items");
?>


    <title>Admin - View Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f6fa;">

<div class="container mt-5">
    <h3 class="text-center mb-4">🍔 Menu Items</h3>

    <table class="table table-bordered table-hover shadow">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price (₹)</th>
                <th>Category</th>
                <th>Available</th>
            </tr>
        </thead>

        <tbody class="text-center">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['item_id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['price'] ?></td>
                <td><?= $row['category'] ?></td>
                <td>
                    <?= $row['availability'] ? '✅ Yes' : '❌ No' ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <div class="text-center mt-3">
        <a href="dashboard.php">← Back to Dashboard</a>
    </div>
</div>




</body>
</html>
