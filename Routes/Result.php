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
    <link rel="stylesheet" href="../CSS/candidate.css">
    <title>Result</title>
</head>
<body>

<div id="mainSection">
        <center>
    <div id="headerSection">
        <a href="login.html"><button id="backbtn">Back</button></a>
        <a href="logout.php"><button id="logoutbtn">Logout</button></a>
        <h1>Voting Result</h1>
    </div>
    </center>
    <hr>
</div>
<div id="container">
    <center>
    <table border='5' height=300 width=85%>
        <tr>
            <th>Id</th>
            <th>Party Name</th>
            <th>Votes</th>
        </tr>
    </center>
    
        <?php
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>$row[Sno]</td>
                        <td>$row[Name]</td>
                        <td>$row[votes]</td>
                    </tr>";
                }
            }
        ?>
    </table>
        </div>
</body>
</html>