<!DOCTYPE html>
<html>
<head>
<title>Admin Panel - Smart Canteen</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{display:flex;background:#f6f7fb;}

.sidebar{
    width:240px;
    background:#111827;
    min-height:100vh;
    color:white;
    padding:30px 20px;
}
.sidebar h2{margin-bottom:30px;font-size:20px;}
.sidebar a{
    display:block;color:#ddd;text-decoration:none;
    padding:12px 15px;border-radius:10px;
    margin-bottom:10px;transition:.3s;
}
.sidebar a:hover{background:#e63946;color:white;}

.main{flex:1;padding:30px 40px;}

.topbar{
    background:white;
    padding:15px 25px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.05);
    margin-bottom:25px;
    display:flex;justify-content:space-between;
}
.card{
    background:white;padding:25px;border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}
/* ================= ADMIN DASHBOARD CARDS ================= */

.admin-title{
    font-weight:700;
    margin-bottom:25px;
}


/* ===== Admin Dashboard Modern Cards ===== */

.admin-title{
    font-weight:700;
    margin-bottom:25px;
    font-size:26px;
}

/* Card */
.admin-card{
    background:rgba(255,255,255,0.9);
    backdrop-filter: blur(10px);
    border-radius:18px;
    padding:26px 20px;
    text-align:center;
    transition:0.35s ease;
    box-shadow:0 12px 30px rgba(0,0,0,0.08);
    border:1px solid rgba(255,255,255,0.4);
    height:100%;
    position:relative;
    overflow:hidden;
}

/* Glow line top */
.admin-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    height:4px;
    width:100%;
    background:linear-gradient(90deg,#ff512f,#dd2476);
}

/* Hover */
.admin-card:hover{
    transform:translateY(-6px) scale(1.02);
    box-shadow:0 20px 40px rgba(0,0,0,0.18);
}

/* Icon Circle */
.admin-card .icon{
    width:60px;
    height:60px;
    margin:0 auto 10px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    color:white;
}

/* Different colors */
.icon.add{ background:linear-gradient(135deg,#36d1dc,#5b86e5); }
.icon.orders{ background:linear-gradient(135deg,#ff512f,#dd2476); }
.icon.menu{ background:linear-gradient(135deg,#11998e,#38ef7d); }

/* Text */
.admin-card strong{
    font-size:17px;
    display:block;
    margin-top:8px;
}

.admin-card p{
    font-size:12px;
    color:#666;
    margin-top:4px;
}


/* DASHBOARD TITLE */
.admin-title{
    font-size:28px;
    font-weight:700;
    margin-bottom:25px;
}

/* ADMIN BOX */
.admin-box{
    background:#ffffff;
    border-radius:18px;
    padding:35px 25px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    transition:0.3s;
    height:170px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.admin-box:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

/* ICON CIRCLE */
.admin-icon{
    width:60px;
    height:60px;
    border-radius:50%;
    background:#f1f3f6;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    margin-bottom:12px;
}

/* TEXT */
.admin-box h5{
    font-weight:600;
    margin-bottom:5px;
}

.admin-box p{
    font-size:13px;
    color:#777;
}









</style>
</head>
<body>

<div class="sidebar">
    <h2>🍽 Admin</h2>
    <a href="dashboard.php">📊 Dashboard</a>
    <a href="view_orders.php">📋 Orders</a>
    <a href="view_menu.php">🍔 Menu</a>
    <a href="add_menu.php">➕ Add Item</a>
    <a href="view_feedback.php">💬 Reviews</a>
    <a href="../logout.php">🚪 Logout</a>
</div>

<div class="main">
<div class="topbar">
    <b>Smart Canteen Admin</b>
    <span>Welcome Admin 👋</span>
</div>
