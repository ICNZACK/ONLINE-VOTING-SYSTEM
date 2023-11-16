<?php
/*        session_start();
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
       }  */
   
   // Define a SessionManager class to handle session operations
   class SessionManager {
       public function startSession() {
           session_start();
       }
   
       public function checkUserSession() {
           if (!isset($_SESSION['userdata'])) {
               header("location: login.html");
           }
       }
   
       public function getUserData() {
           return $_SESSION['userdata'];
       }
   
       public function getGroupsData() {
           return $_SESSION['groupsdata'];
       }
   }
   
   // Define a User class to represent user data
   class User {
       private $userData;
   
       public function __construct($userData) {
           $this->userData = $userData;
       }
   
       public function getStatus() {
           return ($this->userData['status'] == 0) ? '<b style="color:red">Not voted</b>' : '<b style="color:green">voted</b>';
       }
   }
   
   // Instantiate the SessionManager class
   $sessionManager = new SessionManager();
   
   // Start the session
   $sessionManager->startSession();
   
   // Check if the user is logged in
   $sessionManager->checkUserSession();
   
   // Retrieve user and groups data
   $userData = $sessionManager->getUserData();
   $groupsData = $sessionManager->getGroupsData();
   
   // Instantiate the User class
   $user = new User($userData);
   
   // Get the user's status
   $status = $user->getStatus(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!--  <style>
        body{
            display: flex;
           justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            height: 100%;
            background: url(../css/img/dashboard.png) no-repeat;
            background-size: 1500px;
            background-position: center;
            background-color: blue;
    
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


    </style>  -->
    

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
        <center><img src="../uplords/<?php echo $userData['photo']?>" height="150" width= "150"><br><br></center>
        <b>Name:</b><?php echo $userData['Name']?><br><br>
        <b>Email:</b><?php echo $userData['Email']?><br><Br>
        <b>Mobile:</b><?php echo $userData['number']?><br><br>
        <b>Status:</b><?php echo $status?><br><br>
    </div>
    <div id="group">
        <?php
            if($_SESSION['groupsdata']){
                for($i=0; $i<count($groupsData); $i++){
                    $var1= $groupsData[$i]['Sno'];
                    ?>
                    <div>
                        <img style= "float: right" src="../uplords/<?php echo $groupsData[$i]['photo']?>" height="100" width="100">
                        <b>Group Name:</b><?php echo $groupsData[$i]['Name']?><br><br>
                        <b>Votes:</b><?php echo $groupsData[$i]['votes']?> <br><br>
                        <!-- <b>S.no:</b><?php //echo $groupsdata[$i]['S.no']?> <br><br> -->
                        <form action="vote.php" method="POST">
                            <input type="hidden" name="gvotes" value="<?php echo $groupsData[$i]['votes']?>">
                            <!-- <input type="hidden" name="gid" value=""> -->
                            <input type="hidden" name='sno' value=$var1>
                            <?php
                                if($_SESSION['userdata']['status']==0){
                                    ?>
                                    <button type="submit" name="votebtn" value="Vote" id="votebtn">Vote</button>
                                    <?php
                                }
                                else{
                                    ?>
                                    <button disabled type="button" name="votebtn" value="Vote" id="voted">Voted</button>
                                    <?php
                                }
                            ?>  
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