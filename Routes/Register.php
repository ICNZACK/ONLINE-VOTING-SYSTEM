<?php
include '../Routes/_dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Registration</title>
    <link rel="stylesheet" href="../css/stylesheet2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<header class="header">
        <a href="#" class="logo">
            <ion-icon name="logo-ionic"></ion-icon>WeVote
        </a>
        <nav class="nav">
            <a href="../index.html">Home</a>
            <a href="../Routes/About Us.html">About Us</a>
            <a href="../Routes/login.php">Login</a>
        </nav>
    </header>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <div class="container">
        <div class="form-box">
            <form action="" name="Formfill">
                <h2>Register</h2>
                <p id="result"></p>
                <div class="input-box">
                    <i class='bx bxs-user'></i>
                    <input type="text" name="Username" placeholder="Voter Id">
                </div>
                <div class="input-box">
                    <i class='bx bxs-mobile'></i>
                    <input type="number" name="Mobile" placeholder="Enter Mobile">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>
                <div class="input-box">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="cPassword" placeholder="Confirm Password">
                </div>
                <div class="button">
                    <input type="submit"  class="btn" value="Register">
                </div>
                <div class="group">
                    <span><a href="#">Forget-Password</a></span>
                    <span><a href="../Routes/login.php">Login</a></span>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>