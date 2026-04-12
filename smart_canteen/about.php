<!DOCTYPE html>
<html>
<head>
<title>About - Smart Canteen</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f4f6fb;
}

/* NAVBAR */

.navbar{
background:white;
padding:18px 80px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 8px 25px rgba(0,0,0,.05);
}

.logo{
font-family:'Playfair Display',serif;
font-size:22px;
font-weight:700;
}

.nav-links a{
text-decoration:none;
color:#333;
margin-left:18px;
font-weight:500;
}

.btn-main{
background:#e63946;
color:white !important;
padding:10px 25px;
border-radius:30px;
font-size:13px;
transition:.3s;
}

.btn-main:hover{
background:#c1121f;
}

/* HERO */

.about-hero{
height:320px;
display:flex;
align-items:center;
justify-content:center;
flex-direction:column;
text-align:center;
color:white;
background:
linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),
url("all.png");
background-size:cover;
background-position:center;
}

.about-hero h1{
font-size:50px;
font-family:'Playfair Display',serif;
margin-bottom:10px;
}

.about-hero p{
max-width:600px;
opacity:.9;
}

/* FEATURES */

.info-box{
max-width:1100px;
margin:70px auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
padding:0 30px;
}

.box{
background:white;
padding:35px;
border-radius:18px;
text-align:center;
box-shadow:0 15px 30px rgba(0,0,0,.08);
transition:.35s;
}

.box:hover{
transform:translateY(-10px);
box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.box i{
font-size:40px;
color:#e63946;
margin-bottom:10px;
display:block;
}

/* HOW IT WORKS */

.steps{
max-width:1100px;
margin:80px auto;
text-align:center;
}

.steps h2{
margin-bottom:40px;
font-family:'Playfair Display',serif;
}

.step-row{
display:flex;
justify-content:space-between;
gap:20px;
}

.step{
background:white;
padding:30px;
border-radius:18px;
flex:1;
box-shadow:0 10px 25px rgba(0,0,0,.08);
transition:.3s;
}

.step:hover{
transform:translateY(-8px);
}

.step i{
font-size:35px;
color:#457b9d;
margin-bottom:10px;
}

/* PROJECT OBJECTIVE */

.highlight{
max-width:900px;
margin:80px auto;
background:linear-gradient(135deg,#1d3557,#457b9d);
color:white;
padding:60px;
border-radius:20px;
text-align:center;
box-shadow:0 15px 35px rgba(0,0,0,.15);
}

.highlight h2{
margin-bottom:15px;
font-family:'Playfair Display',serif;
}

/* RESPONSIVE */

@media(max-width:900px){

.info-box{
grid-template-columns:1fr;
}

.step-row{
flex-direction:column;
}

}

</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
<div class="logo">🍽 Smart Canteen</div>

<div class="nav-links">
<a href="index.php">Home</a>
<a href="login.php" class="btn-main">Login</a>
<a href="admin/dashboard.php" class="btn-main">Admin</a>
</div>
</div>

<!-- HERO -->
<div class="about-hero">
<h1>About Smart Canteen</h1>
<p>
A Digital Token & Queue Management System that allows students
to order food online and avoid long waiting lines.
</p>
</div>

<!-- FEATURES -->
<div class="info-box">

<div class="box">
<i class="bi bi-cart-check-fill"></i>
<h3>Online Ordering</h3>
<p>Students can order food anytime without standing in queues.</p>
</div>

<div class="box">
<i class="bi bi-ticket-perforated-fill"></i>
<h3>Digital Token</h3>
<p>Automatic token number is generated after placing order.</p>
</div>

<div class="box">
<i class="bi bi-speedometer2"></i>
<h3>Admin Dashboard</h3>
<p>Admin can manage menu items and monitor all orders easily.</p>
</div>

</div>

<!-- HOW IT WORKS -->
<div class="steps">

<h2>How Smart Canteen Works</h2>

<div class="step-row">

<div class="step">
<i class="bi bi-phone-fill"></i>
<p>Select Food</p>
</div>

<div class="step">
<i class="bi bi-cart-fill"></i>
<p>Place Order</p>
</div>

<div class="step">
<i class="bi bi-ticket-detailed-fill"></i>
<p>Get Token</p>
</div>

<div class="step">
<i class="bi bi-emoji-smile-fill"></i>
<p>Collect Food</p>
</div>

</div>
</div>

<!-- PROJECT OBJECTIVE -->
<div class="highlight">

<h2>Project Objective</h2>

<p>
The Smart Canteen System reduces crowd in college canteens
and allows students to order food digitally.  
It saves time, improves order management, and provides
a smooth food ordering experience through digital tokens.
</p>

</div>

</body>
</html>