<!DOCTYPE html>
<html>
<head>
    <title>Smart Canteen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>




<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

/* NAVBAR */
.navbar{
    background:#fff;
    padding:18px 70px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 8px 25px rgba(0,0,0,0.05);
}

.logo{
    font-family:'Playfair Display',serif;
    font-size:22px;
    font-weight:700;
}

.nav-links{
    display:flex;
    align-items:center;
}

.nav-links a{
    text-decoration:none;
    color:#333;
    font-size:14px;
    margin-right:16px;
}

.nav-links a.btn-main{
    background:#c0392b;
    color:#fff !important;
    padding:8px 20px;
    border-radius:25px;
    font-size:13px;
    margin-left:6px;
    margin-right:0;
}

/* HERO */
.hero{
    min-height:calc(100vh - 80px);
    background:
        linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)),
        url("all.png");
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
    padding:0 120px;
    color:white;
}

.hero-left{
    max-width:520px;
}

.hero-left h1{
    font-family:'Playfair Display',serif;
    font-size:58px;
    line-height:1.15;
    margin-bottom:15px;
}

.hero-left p{
    font-size:16px;
    opacity:0.9;
    margin-bottom:30px;
}

/* BUTTON ROW */
.hero-buttons{
    display:flex;
    align-items:center;
    gap:16px;
}

/* FANCY BUTTON */
.fancy-btn {
  display: inline-block;
  padding: 14px 32px;
  border-radius: 50px;
  color: #fff;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: 2px;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  z-index: 1;
  text-decoration: none;
}

.fancy-btn::after {
  content: "";
  position: absolute;
  inset: 0;
  background: #e63946;
  border-radius: 50px;
  z-index: -2;
}

.fancy-btn::before {
  content: "";
  position: absolute;
  inset: 0;
  width: 0%;
  background: #b02a37;
  transition: all 0.3s ease;
  border-radius: 50px;
  z-index: -1;
}

.fancy-btn:hover::before {
  width: 100%;
}

.fancy-btn:hover {
  transform: scale(1.08);
  box-shadow: 0 12px 25px rgba(0,0,0,0.3);
}

/* OUTLINE BUTTON */
.btn-light{
    border:2px solid white;
    color:white;
    padding:14px 32px;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.btn-light:hover{
    background:white;
    color:#e63946;
    transform:scale(1.08);
}

/* Mobile */
@media(max-width:900px){
    .hero{
        padding:0 40px;
        text-align:center;
    }

    .hero-buttons{
        justify-content:center;
    }
}


.features-section {
    background: #f8f9fa;
    padding: 60px 0;
}

.feature-box {
    background: #ffffff;
    padding: 35px 20px;
    border-radius: 18px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 35px rgba(0, 0, 0, 0.15);
}

.feature-icon {
    font-size: 32px;
    margin-bottom: 15px;
}

.feature-box h5 {
    font-weight: 600;
    margin-bottom: 10px;
}

.feature-box p {
    font-size: 14px;
    color: #555;
}



.features-section {
    background-color: #f8f9fa;   /* section ka background */
}

.features-section h2 {
    color: #be4c4c;   /* heading ka color */
    font-size: 32px;
    letter-spacing: 1px;
}
/* 3rd vale ka css*/
.stats-section {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: white;
}

.stat-box {
    padding: 30px;
    border-radius: 15px;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(8px);
    transition: 0.3s;
}

.stat-box:hover {
    transform: translateY(-8px);
    background: rgba(255,255,255,0.1);
}

.stat-box h2 {
    font-size: 40px;
    font-weight: 700;
    color: #facc15;
}

.stat-box p {
    margin-top: 8px;
    font-size: 16px;
    letter-spacing: 1px;
}

.testimonial-section {
    background: #f8f9fa;
}

.testimonial-box {
    background: white;
    padding: 40px 25px;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    max-width: 700px;
    margin: auto;
}

.testimonial-box p {
    font-size: 18px;
    font-style: italic;
    margin-bottom: 15px;
}

.stars {
    color: #ffc107;
    font-size: 18px;
    margin-bottom: 5px;
}
/* footer ka css */
.footer-section {
    background: #111827;
    color: #d1d5db;
    padding: 60px 0 20px;
}

.footer-title {
    color: #ffffff;
    font-weight: 600;
    margin-bottom: 15px;
}

.footer-text {
    font-size: 14px;
    line-height: 1.6;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links a {
    text-decoration: none;
    color: #d1d5db;
    transition: 0.3s;
}

.footer-links a:hover {
    color: #facc15;
}

.footer-section hr {
    border-color: rgba(255,255,255,0.1);
    margin: 30px 0 15px;
}

.footer-bottom {
    font-size: 14px;
    color: #9ca3af;
}

</style>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">🍽 Smart Canteen</div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="login.php" class="btn-main">Login</a>
        <a href="admin/dashboard.php" class="btn-main">Admin</a>
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <div class="hero-left">
        <h1>
            Best food for <br>
            your campus
        </h1>

        <p>
            Discover delicious meals and pre-order instantly.  
            Skip long queues and enjoy smart dining.
        </p>

        <div class="hero-buttons">
            <a href="login.php" class="fancy-btn">Order Now</a>
            <a href="student/view_menu.php" class="btn-light">Explore Menu</a>
        </div>

        <p style="margin-top:18px;font-size:13px;opacity:0.8;">
            Used by 500+ students daily 🚀
        </p>
    </div>

</div>

<section class="features-section py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">
            Why Choose Smart Canteen?
        </h2>

        <div class="row text-center">

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h5>Fast Ordering</h5>
                    <p>Skip long queues and order instantly.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="bi bi-ticket-perforated-fill"></i>
                    </div>
                    <h5>Digital Token</h5>
                    <p>Get instant token without waiting.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h5>Live Tracking</h5>
                    <p>Track your order in real-time.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="bi bi-chat-dots-fill"></i>
                    </div>
                    <h5>Student Reviews</h5>
                    <p>Improve food quality with feedback.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- 3rd section -->
<!-- ===== Statistics Section ===== -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h2 class="counter" data-target="50">0</h2>
                    <p>Happy Students</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h2 class="counter" data-target="30">0</h2>
                    <p>Total Orders</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h2 class="counter" data-target="25">0</h2>
                    <p>Menu Items</p>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="stat-box">
                    <h2 class="counter" data-target="98">0</h2>
                    <p>% Satisfaction</p>
                </div>
            </div>

        </div>
    </div>
</section>












<script>
const counters = document.querySelectorAll('.counter');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {

            const counter = entry.target;
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const increment = target / 100;

            const updateCounter = () => {
                if (count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCounter, 20);
                } else {
                    counter.innerText = target;
                }
            };

            updateCounter();

            observer.unobserve(counter); 
        }
    });
}, {
    threshold: 0.5
});

counters.forEach(counter => {
    observer.observe(counter);
});
</script>


































<section class="testimonial-section py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">
            What Students Say
        </h2>

        <div id="testimonialCarousel"
             class="carousel slide"
             data-bs-ride="carousel"
             data-bs-interval="2000">  <!-- 2 sec fast -->

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="testimonial-box text-center">
                        <p>"The token system saves so much time during lunch break!"</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <small>- Aruna</small>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box text-center">
                        <p>"Very easy to use and food quality is great."</p>
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <small>- Rahul</small>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="testimonial-box text-center">
                        <p>"No more standing in long queues. Amazing system!"</p>
                        <div class="stars">⭐⭐⭐⭐</div>
                        <small>- Sneha</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- ===== Footer ===== -->
<footer class="footer-section">
    <div class="container">
        <div class="row">

            <!-- About -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">🍽 Smart Canteen</h5>
                <p class="footer-text">
                    Smart Canteen helps students skip long queues,
                    order food instantly, and enjoy a smooth dining experience.
                </p>
            </div>

            <!-- Links -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="admin/login.php">Admin</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">Contact</h5>
                <p class="footer-text">
                    📍 Nagindas Khandwala College<br>
                    📧 support@smartcanteen.com<br>
                    📞 +91 98765 43210
                </p>
            </div>
        </div>
        <hr>
        <div class="text-center footer-bottom">
            © 2026 Smart Canteen | Developed by BSc IT Student
        </div>
    </div>
</footer>
</body>
</html>
