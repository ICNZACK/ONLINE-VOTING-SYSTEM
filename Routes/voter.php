<?php
    include "_dbconnect.php";

    $sql="SELECT * FROM `voters` ";
    $result=mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/voter.css">
    <title>Details</title>
</head>
<body>

<div id="mainSection">
        <center>
    <div id="headerSection">
        <a href="DASHBOARD.html"><button id="backbtn">Back</button></a>
        <a href="Admin.html"><button id="logoutbtn">Logout</button></a>
        <h1>Voters Details</h1>
    </div>
    </center>
    <hr>
</div>
<div id="container">
    <center>
    <table border='5' height=300 width=85%>
        <tr>
            <h2>
            <th>Id</th>
            <th>Name</th>
            <th>Voter_id</th>
            <th>Number</th>
            <th>Email</th>
            </h2>
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