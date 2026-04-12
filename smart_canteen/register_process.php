<?php
session_start();
include "db.php";

$name     = trim($_POST['name']);
$email    = trim($_POST['email']);
$password = $_POST['password'];
$role     = 'student';

/* EMAIL VALIDATION */
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email format'); window.location.href='register.php';</script>";
    exit();
}

/* STRONG PASSWORD RULE */
if (strlen($password) < 6) {
    echo "<script>alert('Password must be at least 6 characters'); window.location.href='register.php';</script>";
    exit();
}

/* CHECK IF EMAIL EXISTS */
$check = mysqli_query($conn, "SELECT user_id FROM users WHERE email='$email'");
if (mysqli_num_rows($check) > 0) {
    echo "<script>alert('Email already registered'); window.location.href='register.php';</script>";
    exit();
}

/* HASH PASSWORD */
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

/* INSERT USER */
$query = "INSERT INTO users (name,email,password,role)
          VALUES ('$name','$email','$hashedPassword','$role')";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Registration successful! Please login'); window.location.href='login.php';</script>";
} else {
    echo "<script>alert('Registration failed'); window.location.href='register.php';</script>";
}
?>
