<?php
    include "_dbconnect.php";

    $sql="SELECT * FROM `cadidate` ";
    $result=mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
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
        margin : 15px;
    }

    #logoutbtn{
        padding: 5px;
        font-size: 15px;
        background-color: blue;
        color: aliceblue;
        border-radius: 5px;
        float: right;
        margin : 15px;
    
    } 
    </style>
<div id="mainSection">
        <center>
    <div id="headerSection">
        <a href="login.html"><button id="backbtn">Back</button></a>
        <a href="logout.php"><button id="logoutbtn">Logout</button></a>
        <h1>Candidate Details</h1>
    </div>
    </center>
    <hr>
</div>
<div id="container">
    <center>
    <table border='5' height=300 width=85%>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Voter_id</th>
            <th>Number</th>
            <th>Email</th>
        </tr>
    </center>
    
        <?php
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>$row[Sno]</td>
                        <td>$row[Name]</td>
                        <td>$row[Voter_id]</td>
                        <td>$row[number]</td>
                        <td>$row[Email]</td>
                    </tr>";
                }
            }
        ?>
    </table>
        </div>
</body>
</html>