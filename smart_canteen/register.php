<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Smart Canteen</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
       
        body{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:
      linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
      url("login photo.png");
    background-size:cover;
    background-position:center;
}

        .register-card{
            width:100%;
            max-width:400px;
            background:#fff;
            padding:30px;
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,0.15);
        }
        .register-card h3{
            text-align:center;
            font-weight:bold;
            color:#e63946;
            margin-bottom:25px;
        }
        .btn-warning{
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h3>📝 Smart Canteen Register</h3>

    <form method="POST" action="register_process.php">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control mb-3" placeholder="enter email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control mb-3" placeholder="enter password" required min-height="8" title="Password must contain at least 1 uppercase, 1 lowercase, 1 number and 1 special character">
        </div>
       Re-enter password
        <input type="password" name="password" id="password" class="form-control" required>
<small class="text-muted">
Password must contain uppercase, lowercase, number & special character
</small>


        <button class="btn btn-warning w-100">Register</button>
    </form>

    <div class="text-center mt-3">
        <small>
            Already have an account?
            <a href="login.php">Login</a>
        </small>
    </div>
</div>

</body>
</html>
