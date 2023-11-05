<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: login.html");
    }

    $userdata = $_SESSION['userdata'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
        background-color: aqua;
    
    }

    #headerSection{
        padding: 5px;
    }

    #headerSection h1{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    #backbtn{
        padding: 5px;
        font-size: 15px;
        background-color: blue;
        color: aliceblue;
        border-radius: 5px;
        float: left;
    }

    #logoutbtn{
        padding: 5px;
        font-size: 15px;
        background-color: blue;
        color: aliceblue;
        border-radius: 5px;
        float: right;
    }  

    </style> 
    

    <div id="mainSection">
        <center>
    <div id="headerSection">
        <button id="backbtn">Back</button> 
        <button id="logoutbtn">Logout</button>
        <h1>Online Voting system</h1>
    </div>
</center>
    <hr>
    <div class="profile">
        <img src="../uplords/<?php echo $userdata['photo']?>" height="200" width= "200"><br><br>
        <b>Name:</b><?php echo $userdata['Name']?><br><br>
        <b>Email:</b><?php echo $userdata['Email']?><br><Br>
        <b>Mobile:</b><?php echo $userdata['number']?><br><br>
        <b>Status:</b><?php echo $userdata['status']?>
    </div>
    <div class="group"></div>
    </div>
</body>
</html>