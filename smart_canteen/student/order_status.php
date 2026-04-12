<?php
session_start();
include "../db.php";

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'student') {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

/* =========================
   LATEST ORDER + TOKEN
========================= */
$myOrder = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT order_id, token_number
     FROM orders
     WHERE user_id='$user_id'
     ORDER BY order_id DESC
     LIMIT 1"
));

$myOrderId = $myOrder['order_id'] ?? 0;
$myToken   = $myOrder['token_number'] ?? '';

/* =========================
   NOW SERVING TOKEN
========================= */
$nowServing = mysqli_fetch_assoc(mysqli_query(
    $conn,
    "SELECT token_number
     FROM orders
     WHERE status='preparing'
     ORDER BY order_id ASC
     LIMIT 1"
));

$nowToken = $nowServing['token_number'] ?? 'Not started';

/* =========================
   QUEUE POSITION
========================= */
$position = 0;
if ($myOrderId > 0) {
    $pos = mysqli_fetch_assoc(mysqli_query(
        $conn,
        "SELECT COUNT(*) AS pos
         FROM orders
         WHERE order_id < $myOrderId
         AND status IN ('pending','preparing')"
    ));
    $position = $pos['pos'];
}

/* =========================
   STUDENT ORDERS
========================= */
$result = mysqli_query($conn, "
    SELECT o.order_id, o.token_number, o.status, m.name
    FROM orders o
    JOIN menu_items m ON o.item_id = m.item_id
    WHERE o.user_id='$user_id'
    ORDER BY o.order_id DESC
");

/* =========================
   READY POPUP CHECK
========================= */
$showReadyPopup = false;
$readyCheck = mysqli_query($conn,"
    SELECT order_id
    FROM orders
    WHERE user_id='$user_id'
    AND status='ready'
    ORDER BY order_id DESC
    LIMIT 1
");
if(mysqli_num_rows($readyCheck) > 0){
    $showReadyPopup = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Order Status</title>
</head>

<style>
body{
    font-family:'Poppins','Segoe UI',sans-serif;
    background:linear-gradient(135deg,#f6f8fc,#e9ecf1);
    margin:0;
    padding:40px;
}
.container{
    max-width:820px;
    margin:auto;
    background:#fff;
    padding:40px 35px;
    border-radius:22px;
    box-shadow:0 25px 60px rgba(0,0,0,0.12);
}
h2{text-align:center;margin-bottom:35px;font-weight:700;}
.queue-box{
    background:linear-gradient(135deg,#fff6d1,#ffe082);
    border-left:8px solid #ff9800;
    border-radius:16px;
    padding:24px;
    margin-bottom:35px;
}
.order-card{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:22px 26px;
    border-radius:18px;
    margin-bottom:22px;
    background:#fff;
    border:1px solid #eee;
}
.order-info{line-height:1.7;}
.token{font-weight:700;color:#e63946;}
.status{
    padding:10px 22px;
    border-radius:50px;
    font-size:13px;
    font-weight:700;
    text-transform:uppercase;
}
.pending{background:#fff3cd;color:#856404;}
.preparing{background:#cce5ff;color:#004085;}
.ready{background:#d4edda;color:#155724;}
.cancelled{background:#f8d7da;color:#721c24;}
.btn-danger{margin-top:12px;border-radius:20px;font-size:13px;}
.back-link{
    display:inline-block;
    margin-top:40px;
    padding:14px 34px;
    background:#007bff;
    color:white;
    border-radius:35px;
    text-decoration:none;
    font-weight:700;
}
.ready-popup{
    position:fixed;
    top:20px;
    right:20px;
    background:linear-gradient(135deg,#28a745,#20c997);
    color:white;
    padding:16px 26px;
    border-radius:14px;
    font-weight:700;
    display:none;
    z-index:9999;
}
@media(max-width:768px){
    .order-card{flex-direction:column;align-items:flex-start;gap:14px;}
}
</style>

<body>

<div class="container">
<h2>📊 My Order Status</h2>

<?php if($myToken): ?>
<div class="queue-box">
    <b>🎟 Your Token:</b> <?= $myToken ?><br>
    <b>🔥 Now Serving:</b> <?= $nowToken ?><br>
    <b>📍 Your Position:</b> <?= $position ?>
</div>
<?php endif; ?>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<div class="order-card">
    <div class="order-info">
        <b>🍽 <?= $row['name'] ?></b><br>
        🎟 Token: <span class="token"><?= $row['token_number'] ?></span>

        <!-- QR CODE -->
        <div style="margin-top:10px;text-align:center;">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data=<?= $row['token_number'] ?>">
            <div style="font-size:12px;color:#666;">Show this QR at counter</div>
        </div>
    </div>

    <div>
        <span class="status <?= $row['status'] ?>">
            <?= ucfirst($row['status']) ?>
        </span>

        <?php if($row['status']=='pending') { ?>
            <br>
            <a href="cancel_order.php?order_id=<?= $row['order_id'] ?>"
               class="btn btn-danger btn-sm"
               onclick="return confirm('Cancel this order?')">
               ❌ Cancel
            </a>
        <?php } ?>
    </div>
</div>
<?php } ?>

<a href="view_menu.php" class="back-link">← Back to Menu</a>
</div>

<div id="readyPopup" class="ready-popup">
🎉 Your order is READY! Please collect it.
</div>

<script>
<?php if($showReadyPopup): ?>
    const popup=document.getElementById("readyPopup");
    popup.style.display="block";
    setTimeout(()=>popup.style.display="none",6000);
<?php endif; ?>
</script>

</body>
</html>
