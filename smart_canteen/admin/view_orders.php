<?php include "layout.php"; ?>

<?php
session_start();
include "../db.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

$query = "
SELECT o.order_id, o.token_number, o.status, m.name 
FROM orders o
JOIN menu_items m ON o.item_id = m.item_id
ORDER BY o.order_id DESC
";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - View Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f5f6fa;">

<div class="container mt-5">
    <h3 class="text-center mb-4">📋 All Orders</h3>

    <table class="table table-bordered table-striped shadow">
        <thead class="table-dark text-center">
            <tr>
                <th>Order ID</th>
                <th>Item</th>
                <th>Token</th>
                <th>Status</th>
                <th>Update</th>
            </tr>
        </thead>

        <tbody class="text-center">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['order_id'] ?></td>
                <td><?= $row['name'] ?></td>
                <!-- <td><b><?= $row['token_number'] ?></b></td> -->
<td>
    <b><?= $row['token_number'] ?></b><br>

    <img 
        src="https://api.qrserver.com/v1/create-qr-code/?size=80x80&data=<?= $row['token_number'] ?>" 
        alt="QR Code"
        style="margin-top:5px;"
    >
</td>

                <td><?= ucfirst($row['status']) ?></td>
                <td>
                    <form method="post" action="update_order_status.php" class="d-flex gap-2 justify-content-center">
                        <input type="hidden" name="order_id" value="<?= $row['order_id'] ?>">

                        <select name="status" class="form-select form-select-sm w-auto">
                            <option <?= $row['status']=='pending'?'selected':'' ?>>pending</option>
                            <option <?= $row['status']=='preparing'?'selected':'' ?>>preparing</option>
                            <option <?= $row['status']=='ready'?'selected':'' ?>>ready</option>
                            
                        </select>

                        <button class="btn btn-success btn-sm">Update</button>
                    </form>
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
