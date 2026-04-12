<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
            background: linear-gradient(135deg,#f6f8fc,#e9ecf1);
            min-height:100vh;
        }

        .navbar{
            background:white;
            box-shadow:0 6px 20px rgba(0,0,0,0.05);
        }

        .hero{
            text-align:center;
            margin-top:40px;
        }

        .hero h2{
            font-weight:700;
        }

        .hero span{
            color:#e63946;
        }

        .dashboard-card{
            border-radius:20px;
            transition:0.3s;
            padding:35px;
            border:none;
            background:white;
        }

        .dashboard-card:hover{
            transform: translateY(-8px);
            box-shadow:0 18px 35px rgba(0,0,0,0.12);
        }

        .icon-circle{
            width:70px;
            height:70px;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:auto;
            font-size:32px;
            color:white;
        }

        .bg-blue{background:#4dabf7;}
        .bg-green{background:#51cf66;}

        .footer-text{
            margin-top:40px;
            text-align:center;
            font-size:13px;
            color:#777;
        }


       /* medial part ka css */
       .food-scroll{
    display:flex;
    gap:25px;
    overflow-x:auto;
    padding:10px 0;
}

.food-item{
    min-width:120px;
    text-align:center;
    text-decoration:none;
    color:#333;
}

.food-item img{
    width:90px;
    height:90px;
    object-fit:contain;
    border-radius:50%;
    background:#fff;
    padding:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}

.food-item:hover img{
    transform:scale(1.1);
}

.food-item span{
    display:block;
    margin-top:8px;
    font-weight:600;
    font-size:14px;
}





.category-card .card {
    border-radius: 20px;
    transition: 0.3s;
}

.category-card .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 30px #b02a37;
}

.category-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    margin: auto;
}







.special-banner {
    height: 280px;
    border-radius: 25px;
    background: linear-gradient(135deg, #141e30, #243b55);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

/* Subtle animated light effect */
.special-banner::before {
    content: "";
    position: absolute;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0,255,255,0.15) 10%, transparent 40%);
    animation: rotateLight 8s linear infinite;
}

@keyframes rotateLight {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.banner-content {
    position: relative;
    z-index: 2;
    color: #ffffff;
}

.banner-content h2 {
    font-size: 2.3rem;
    letter-spacing: 1px;
}

/* Glow Button */
.btn-glow {
    background: #00f2fe;
    border: none;
    color: #000;
    border-radius: 50px;
    transition: 0.3s;
}

.btn-glow:hover {
    background: #4facfe;
    box-shadow: 0 0 15px rgba(0,242,254,0.8);
    transform: translateY(-3px);
}











    </style>
</head>

<body>

<nav class="navbar px-5 py-3">
    <span class="fw-bold fs-5">🍽 Smart Canteen</span>
    <a href="../logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
</nav>

<div class="container">

    <div class="hero">
        <h2>Welcome, <span>student</span> 👋</h2>
        <p class="text-muted">
            Order food • Get token • Skip long queues
        </p>
    </div>

    <div class="row justify-content-center mt-5">

        <div class="col-md-4 mb-4">
            <a href="view_menu.php" class="text-decoration-none text-dark">
                <div class="card dashboard-card text-center">
                    <div class="icon-circle bg-blue">
                        <i class="bi bi-card-list"></i>
                    </div>
                    <h5 class="mt-4 fw-bold">View Menu</h5>
                    <p class="text-muted small">
                        Browse today's dishes and prices
                    </p>
                </div>
            </a>
        </div>

        <div class="col-md-4 mb-4">
            <a href="order_status.php" class="text-decoration-none text-dark">
                <div class="card dashboard-card text-center">
                    <div class="icon-circle bg-green">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <h5 class="mt-4 fw-bold">Order Status</h5>
                    <p class="text-muted small">
                        Track your token & live queue
                    </p>
                </div>
            </a>
        </div>
        

    </div>




<div class="row mt-5">
    <div class="col-12">
        <div class="special-banner position-relative overflow-hidden">

            <div class="banner-content text-center">
                <h6 class="text-uppercase fw-light mb-2">🔥 Today's Special</h6>
                <h2 class="fw-bold mb-3">Masala Dosa @ ₹40</h2>
                <p class="mb-4">Freshly prepared • Hot & Crispy • Limited Stock</p>

                <a href="view_menu.php?category=breakfast"
                   class="btn btn-glow btn-lg px-4 fw-bold">
                    Order Now
                </a>
            </div>

        </div>
    </div>
</div>





<h4 class="mt-5 mb-4 fw-bold text-center">🍽 Browse by Category</h4>

<div class="row text-center">

    <div class="col-md-6 mb-4">
        <a href="view_menu.php?category=indian" class="category-card text-decoration-none">
            <div class="card shadow-sm p-4">
                <img src="../imges/indian.png" class="category-img">
                <h5 class="mt-3 fw-bold">Indian Special</h5>
            </div>
        </a>
    </div>

    
   

    <div class="col-md-6 mb-4">
        <a href="view_menu.php?category=beverage" class="category-card text-decoration-none">
            <div class="card shadow-sm p-4">
                <img src="../imges/beverage.png" class="category-img">
                <h5 class="mt-3 fw-bold">Beverages</h5>
            </div>
        </a>
    </div>
    

    <div class="col-md-6 mb-4">
        <a href="view_menu.php?category=dessert" class="category-card text-decoration-none">
            <div class="card shadow-sm p-4">
                <img src="../imges/desert.png" class="category-img">
                <h5 class="mt-3 fw-bold">Desserts</h5>
            </div>
        </a>
    </div>
<div class="col-md-6 mb-4">
        <a href="view_menu.php?category=lunch" class="category-card text-decoration-none">
            <div class="card shadow-sm p-4">
                <img src="../imges/fast food.png" class="category-img">
                <h5 class="mt-3 fw-bold">Fast Food</h5>
            </div>
        </a>
    </div>
</div>



    <div class="footer-text">
        Digital Tokens • Live Queue • Faster Service 🚀
    </div>





<h4 class="mt-5 mb-4 fw-bold text-center">⭐ What Students Say</h4>

<div class="row">

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 p-4 text-center">
            <div class="mb-3 text-warning fs-5">
                ★★★★★
            </div>
            <p class="text-muted">
                "Ordering is super easy! No more standing in long queues."
            </p>
            <h6 class="fw-bold mb-0">– Arjun</h6>
            <small class="text-muted">BCA Student</small>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 p-4 text-center">
            <div class="mb-3 text-warning fs-5">
                ★★★★★
            </div>
            <p class="text-muted">
                "Live token tracking is very helpful during lunch time."
            </p>
            <h6 class="fw-bold mb-0">– Priya</h6>
            <small class="text-muted">BCom Student</small>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow-sm border-0 p-4 text-center">
            <div class="mb-3 text-warning fs-5">
                ★★★★☆
            </div>
            <p class="text-muted">
                "Fast service and clean interface. Very useful system!"
            </p>
            <h6 class="fw-bold mb-0">– Rahul</h6>
            <small class="text-muted">BSc Student</small>
        </div>
    </div>

</div>









<h4 class="mt-5 mb-4 fw-bold text-center">📝 Food Feedback</h4>

<div class="card shadow-sm p-4 mb-4">

    <form action="submit_feedback.php" method="POST">

        <div class="mb-3">
            <label class="form-label">Food Name</label>
            <input type="text" name="food_name"
                   class="form-control"
                   placeholder="Which food did you try?"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Rating</label>
            <select name="rating" class="form-select" required>
                <option value="">Select Rating</option>
                <option value="5">★★★★★ (Excellent)</option>
                <option value="4">★★★★☆ (Good)</option>
                <option value="3">★★★☆☆ (Average)</option>
                <option value="2">★★☆☆☆ (Poor)</option>
                <option value="1">★☆☆☆☆ (Very Bad)</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Your Comment</label>
            <textarea name="comment"
                      class="form-control"
                      rows="3"
                      placeholder="Write your feedback..."
                      required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">
            Submit Feedback
        </button>

    </form>

</div>







</div>

</body>
</html>
