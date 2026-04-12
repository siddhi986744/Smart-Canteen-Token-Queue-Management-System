<?php
include "layout.php";
include "../db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
?>

<h2 class="admin-title">Dashboard</h2>

<div class="row">

    <div class="col-md-4 mb-4">
        <a href="add_menu.php" class="text-decoration-none text-dark">
            <div class="admin-box">
                <div class="admin-icon">➕</div>
                <h5>Add Menu</h5>
                <p>Create new food items</p>
            </div>
        </a>
    </div>

    <div class="col-md-4 mb-4">
        <a href="view_orders.php" class="text-decoration-none text-dark">
            <div class="admin-box">
                <div class="admin-icon">📋</div>
                <h5>Orders</h5>
                <p>View & manage queue</p>
            </div>
        </a>
    </div>

    <div class="col-md-4 mb-4">
        <a href="view_menu.php" class="text-decoration-none text-dark">
            <div class="admin-box">
                <div class="admin-icon">🍔</div>
                <h5>Menu</h5>
                <p>Edit food items</p>
            </div>
        </a>
    </div>

</div>

</div>
</body>
</html>
