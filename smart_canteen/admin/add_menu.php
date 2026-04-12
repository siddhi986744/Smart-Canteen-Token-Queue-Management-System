<?php include "layout.php"; ?>
<?php
include "../db.php";
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
?>

    <title>Add Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3 class="text-center mb-4">➕ Add Menu Item</h3>

    <form method="POST" action="add_menu_process.php" class="card p-4 shadow">

        <input type="text" name="name" class="form-control mb-3" placeholder="Food Name" required>

        <input type="number" name="price" class="form-control mb-3" placeholder="Price" required>

        <input type="text" name="category" class="form-control mb-3" placeholder="Category" required>

        <input type="text" name="image" class="form-control mb-3" placeholder="Image path (uploads/samosa.jpg)" required>

        <button class="btn btn-success">Add Item</button>

        <a href="dashboard.php" class="btn btn-secondary mt-2">Back</a>
    </form>
</div>

</body>
</html>
