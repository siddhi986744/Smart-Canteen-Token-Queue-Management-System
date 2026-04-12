<!DOCTYPE html>

<html>
<head>
<title>Contact - Smart Canteen</title>

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

.contact-hero{
height:300px;
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

.contact-hero h1{
font-size:48px;
font-family:'Playfair Display',serif;
margin-bottom:10px;
}

.contact-hero p{
max-width:600px;
opacity:.9;
}

/* CONTACT SECTION */

.contact-section{
max-width:1100px;
margin:70px auto;
padding:0 30px;
display:grid;
grid-template-columns:1fr 1fr;
gap:30px;
}

/* CARD STYLE */

.contact-card{
background:white;
padding:35px;
border-radius:18px;
box-shadow:0 15px 30px rgba(0,0,0,.08);
transition:.3s;
}

.contact-card:hover{
transform:translateY(-8px);
box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.contact-card h3{
margin-bottom:15px;
}

/* FORM */

input, textarea{
width:100%;
padding:12px 15px;
margin-bottom:15px;
border-radius:10px;
border:1px solid #ddd;
font-size:14px;
}

button{
background:#e63946;
color:white;
border:none;
padding:12px 25px;
border-radius:25px;
font-weight:600;
cursor:pointer;
transition:.3s;
}

button:hover{
background:#c1121f;
}

/* CONTACT INFO */

.info-box{
display:flex;
gap:10px;
margin-bottom:15px;
font-size:14px;
}

.info-box i{
font-size:20px;
color:#e63946;
}

/* RESPONSIVE */

@media(max-width:900px){
.contact-section{
grid-template-columns:1fr;
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

<div class="contact-hero">
<h1>Contact Us</h1>
<p>Have questions or suggestions? Feel free to contact us anytime.</p>
</div>

<!-- CONTACT SECTION -->

<div class="contact-section">

<!-- FORM -->

<div class="contact-card">

<h3>Send Message</h3>

<form>

<input type="text" placeholder="Your Name">

<input type="email" placeholder="Your Email">

<textarea rows="4" placeholder="Your Message"></textarea>

<button type="submit">Send Message</button>

</form>

</div>

<!-- CONTACT INFO -->

<div class="contact-card">

<h3>Contact Information</h3>

<div class="info-box">
<i class="bi bi-geo-alt-fill"></i>
<div>
<b>Location</b><br>
Nagindas Khandwala College
</div>
</div>

<div class="info-box">
<i class="bi bi-telephone-fill"></i>
<div>
<b>Phone</b><br>
+91 98765 43210
</div>
</div>

<div class="info-box">
<i class="bi bi-envelope-fill"></i>
<div>
<b>Email</b><br>
smartcanteen@gmail.com
</div>
</div>

<div class="info-box">
<i class="bi bi-clock-fill"></i>
<div>
<b>Working Hours</b><br>
Mon - Sat : 8 AM – 6 PM
</div>
</div>

</div>

</div>

</body>
</html>
