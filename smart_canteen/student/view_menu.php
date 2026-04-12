<?php
session_start();
include "../db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'student') {
    header("Location: ../login.php");
    exit();
}

/* GET CATEGORY FROM URL */
$category = $_GET['category'] ?? '';

/* MAP DASHBOARD CATEGORIES TO DB CATEGORIES */
if ($category == "indian") {
    $category = "snacks";     // change if needed according to DB
}
if ($category == "fastfood") {
    $category = "snacks";     // fastfood items stored as snacks
}
if ($category == "dessert") {
    $category = "dessert";
}
if ($category == "beverage") {
    $category = "beverages";
}

/* FETCH DATA */
if ($category) {
    $stmt = $conn->prepare("SELECT * FROM menu_items WHERE availability=1 AND category=?");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = mysqli_query($conn, "SELECT * FROM menu_items WHERE availability=1");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Food Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{ background:#f8f9fa; }

.menu-card{
    border-radius:18px;
    transition:.3s;
    position:relative;
    overflow:hidden;
}
.menu-card:hover{
    transform:translateY(-6px);
    box-shadow:0 15px 30px rgba(0,0,0,.15);
}
.menu-card::after{
    content:"Quick Order";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.6);
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    opacity:0;
    transition:.3s;
    font-weight:bold;
    font-size:18px;
    pointer-events:none; 
}
.menu-card:hover::after{ opacity:1; }

.menu-img{
    height:180px;
    object-fit:cover;
}
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/smart_canteen/index.php">
            🍽 Smart Canteen
        </a>

        <div class="d-flex gap-3 align-items-center">
            <a href="/smart_canteen/index.php" class="text-decoration-none text-dark">Home</a>
            <a href="/smart_canteen/student/dashboard.php" class="text-decoration-none text-dark">Dashboard</a>
            <a href="/smart_canteen/logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">

<!-- Search -->
<div class="text-center mb-3">
    <input type="text" id="searchInput"
           class="form-control w-50 mx-auto"
           placeholder="🔍 Search food...">
</div>

<!-- Category Buttons -->
<div class="d-flex justify-content-center gap-3 mb-3 flex-wrap">
    <a href="?category=breakfast" class="btn btn-outline-dark">🍳 Breakfast</a>
    <a href="?category=snacks"    class="btn btn-outline-dark">🍔 Snacks</a>
    <a href="?category=lunch"     class="btn btn-outline-dark">🍚 Lunch</a>
    <a href="?category=beverages" class="btn btn-outline-dark">☕ Beverages</a>
    <a href="?category=dessert" class="btn btn-outline-dark">🍰 Dessert</a>
    <a href="view_menu.php"       class="btn btn-warning">All</a>
</div>

<div class="alert alert-info text-center small">
    💡 Tip: Order early to skip queues and get faster service
</div>

<h3 class="text-center fw-bold mb-4">🍔 Dish Of The Day</h3>

<div class="row">

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<div class="col-md-3 mb-4">
    <div class="card menu-card h-100 text-center">

        <img src="/smart_canteen/<?= $row['image']; ?>" class="menu-img w-100">


        <div class="card-body">

            <h5 class="fw-bold mt-2"><?= $row['name']; ?></h5>
            <p class="text-muted small"><?= $row['category']; ?></p>

            <div style="color:gold;font-size:14px;">⭐⭐⭐⭐☆</div>

            <h6 class="text-danger fw-bold mt-1">₹ <?= $row['price']; ?></h6>

            <a href="place_order.php?item_id=<?= $row['item_id']; ?>"
               class="btn btn-danger btn-sm mt-2">
                Order Online
            </a>
        </div>
    </div>
</div>
<?php } ?>

</div>
</div>

<script>
document.getElementById("searchInput").addEventListener("keyup", function(){
    let value = this.value.toLowerCase();
    document.querySelectorAll(".menu-card").forEach(card=>{
        card.style.display = card.innerText.toLowerCase().includes(value)
            ? "block" : "none";
    });
});
</script>

</body>
</html>
