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
    <title>Document</title>
</head>
<body>
    <table border='5'>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Voter_id</th>
            <th>Number</th>
            <th>Email</th>
        </tr>
        <?php
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>$row[S.no]</td>
                        <td>$row[Name]</td>
                        <td>$row[Voter_id]</td>
                        <td>$row[number]</td>
                        <td>$row[email]</td>
                    </tr>";
                }
            }
        ?>
    </table>
</body>
</html>