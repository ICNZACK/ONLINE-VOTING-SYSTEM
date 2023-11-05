<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <button>Back</button> 
    <button>Logout</button>
    <center><h1>Online Voting system</h1></center>
    <hr>
    <div class="profile"></div>
    <div class="group"></div>
</body>
</html>