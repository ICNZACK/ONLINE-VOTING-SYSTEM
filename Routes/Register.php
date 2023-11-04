<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="stylesheet2.css">
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

    <div class="wrapper">
    <form action="" method="POST">
        <h1>Registration</h1>
        <div class="input-box">
            <label for="name">Voter Id:</label>
            <input type="Name" name="voterid" placeholder="Voter id" required>
        </div>
        <div class="input-box">
            <label for="Number">Phone Number:</label>
            <input type="Number" name="number" placeholder="Enter Number" required>
        </div>
        <div class="input-box">
            <label for="text">Email:</label>
            <input type="text" name="email" placeholder="Enter Email" required>
        </div>
        <div class="input-box">
            <label for="text">Password</label>
            <input type="password" name="password" placeholder="Enter password" required>
        </div>
        <div class="input-box">
            <label for="text">Confirm Password:</label>
            <input type="password" name="cpassword" placeholder="Enter confirm password" required>
        </div>
        <div class="input-box">
            <label for="file">Candidate Photo:</label>
            <input type="File" name="photo" required>
        </div>
        <br>
        <div class="input-box">
            <label for="role">Select your role:</label>
                    <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select>
                </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>have an account ?
                <a href="login.php">Login</a>
                </p>
            </div>
            </form>
    </div>

</body>
</html>