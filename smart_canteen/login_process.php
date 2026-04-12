<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format'); window.location.href='login.php';</script>";
        exit();
    }

    $query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['role']    = $user['role'];
            

            if ($user['role'] === 'admin') {
                header("Location: admin/dashboard.php");
            } else {
                header("Location: student/dashboard.php");
            }
            exit();

        } else {
            echo "<script>alert('Wrong password'); window.location.href='login.php';</script>";
            exit();
        }

    } else {
        echo "<script>alert('Email not registered'); window.location.href='login.php';</script>";
        exit();
    }
}
?>
