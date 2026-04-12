<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Canteen Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:
      linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
      url("login photo.png");
    background-size:cover;
    background-position:center;
}

        .login-card{
            max-width:400px;
            width:100%;
            border-radius:18px;
            animation: pop 0.6s ease;
        }

        @keyframes pop{
            from{transform:scale(0.8); opacity:0;}
            to{transform:scale(1); opacity:1;}
        }

        .btn-warning:hover{
            transform:scale(1.05);
            transition:0.3s;
        }

        .btn-outline-warning:hover{
            background:#ffbe0b;
            color:#000;
            transform:scale(1.05);
            transition:0.3s;
        }
    </style>
</head>
<body>

<div class="card login-card shadow-lg">
    <div class="card-body p-4">

        <h3 class="text-center text-danger fw-bold mb-4">
            Smart Canteen Login
        </h3>

        <form method="post" action="login_process.php">

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" >
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn btn-warning w-100 fw-bold mb-2">
                Login
            </button>

            <a href="register.php" class="btn btn-outline-warning w-100 fw-bold">
                Register
            </a>

        </form>

        <div class="text-center mt-3">
            <a href="index.php" class="text-decoration-none">
                ← Back to Home
            </a>
        </div>

    </div>
</div>

</body>
</html>
