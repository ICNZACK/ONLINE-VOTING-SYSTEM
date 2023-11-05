<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: login.html");
    }

    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'];

    if($_SESSION['userdata']['status']==0){
        $status= '<b style="color:red">Not voted</b>';
    }
    else{
        $status= '<b style="color:green">voted</b>';
    }
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

    #profile{
        background-color: white;
        width: 30%;
        padding: 20px;
        float: left;
    }

    #group{
        background-color: white;
        width: 60%;
        padding: 20px;
        float: right;
    }
    #votebtn{
        padding: 5px;
        font-size: 15px;
        background-color: blue;
        color: aliceblue;
        border-radius: 5px;
    }

    #mainpannel{
        padding: 10px;
    }

    #voted{
        padding: 5px;
        font-size: 15px;
        background-color: green;
        color: aliceblue;
        border-radius: 5px;
    }


    </style> 
    

    <div id="mainSection">
        <center>
    <div id="headerSection">
        <a href="login.html"><button id="backbtn">Back</button></a>
        <a href="logout.php"><button id="logoutbtn">Logout</button></a>
        <h1>Online Voting system</h1>
    </div>
</center>
    <hr>
    <div id="mainpannel">
    <div id="profile">
        <center><img src="../uplords/<?php echo $userdata['photo']?>" height="150" width= "150"><br><br></center>
        <b>Name:</b><?php echo $userdata['Name']?><br><br>
        <b>Email:</b><?php echo $userdata['Email']?><br><Br>
        <b>Mobile:</b><?php echo $userdata['number']?><br><br>
        <b>Status:</b><?php echo $status?>
    </div>
    <div id="group">
        <?php
            if($_SESSION['groupsdata']){
                for($i=0; $i<count($groupsdata); $i++){
                    ?>
                    <div>
                        <img style= "float: right" src="../uplords/<?php echo $groupsdata[$i]['photo']?>" height="100" width="100">
                        <b>Group Name:</b><?php echo $groupsdata[$i]['Name']?><br><br>
                        <b>Votes:</b><?php echo $groupsdata[$i]['votes']?> <br><br>
                        <form action="vote.php" method="POST">
                            <input type="hidden" name="gvotes" value=<?php echo $groupsdata[$i]['votes']?>>
                            <input type="hidden" name="gid" value=<?php echo $groupsdata[$i]['S.no']?>>
                            <?php
                                if($_SESSION['userdata']['status']==0){
                                    ?>
                                    <input type="submit" name="votebtn" value="vote" id="votebtn">
                                    <?php
                                }
                                else{
                                    ?>
                                    <button disabled type="button" name="votebtn" value="Vote" id="voted"></button>
                                    <?php
                                }
                            ?>
                            <input type="submit" name="votebtn" value="vote" id="votebtn">
                        </form>
                    </div>
                    <hr>
                    <?php
                }
            }
            else{

            }
        ?>
        </div>
    </div>
    </div>
</body>
</html>