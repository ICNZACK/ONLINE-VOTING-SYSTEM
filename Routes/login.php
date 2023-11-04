<?php
/*if($_SERVER["REQUEST_METHOD"] == "POST"){
    $login= false;
    $showError = false;
    include '../Routes/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];


        $sql= "Select * from voters where Voter_id= '$username' AND password= '$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            session_start();
        }
    }
    else{
        $showError = "invalid username and password ";
    }

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibl" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System-Login</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You now logged in...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>;

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Login</h2>
            <form action="../Routes/login.php" method= "post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="settings"></ion-icon></span>
                    <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select>
                </div>
                <div class="remember-forgot">
                    <label ><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="../Routes/Register.php" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>