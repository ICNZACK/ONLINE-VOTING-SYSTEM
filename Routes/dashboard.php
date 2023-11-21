<?php
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
   

   class User {
       private $userData;
   
       public function __construct($userData) {
           $this->userData = $userData;
       }
   
       public function getStatus() {
           return ($this->userData['status'] == 0) ? '<b style="color:red">Not voted</b>' : '<b style="color:black">voted</b>';
       }
   }
   

   $sessionManager = new SessionManager();
   
   $sessionManager->startSession();
   
   $sessionManager->checkUserSession();
   
   
   $userData = $sessionManager->getUserData();
   $groupsData = $sessionManager->getGroupsData();
   
   $user = new User($userData);
   

   $status = $user->getStatus(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <title>Document</title>
</head>
<body>  
    <style>
        #resultbtn{
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
        <a href="result_user.php"><button id="resultbtn">Result</button></a>
        <a href="logout.php"><button id="logoutbtn">Logout</button></a>
        <h1>Online Voting system</h1>
    </div>
    </center>
    <hr>
    <div id="mainpannel">
    <div id="profile">
        <center><img src="../uplords/<?php echo $userData['photo']?>" height="150" width= "150"><br><br></center>
        <b>Name: </b><?php echo $userData['Name']?><br><br>
        <b>Email: </b><?php echo $userData['Email']?><br><Br>
        <b>Mobile: </b><?php echo $userData['number']?><br><br>
        <b>Status: </b><?php echo $status?><br><br>
    </div>
    <div id="group">
        <?php
            if($_SESSION['groupsdata']){
                for($i=0; $i<count($groupsData); $i++){
                    //$var1= $groupsData[$i]['Sno'];
                    ?>
                    <div>
                        <img style= "float: right" src="../uplords/<?php echo $groupsData[$i]['photo']?>" height="70" width="70">
                        <b>Group Name:</b><?php echo $groupsData[$i]['Name']?><br><br>
                        
                        <!-- <b>S.no:</b><?php //echo $groupsdata[$i]['S.no']?> <br><br> -->
                        <form action="vote.php" method="POST">
                            <input type="hidden" name="gvotes" value="<?php echo $groupsData[$i]['votes']?>">
                            <!-- <input type="hidden" name="gid" value=""> -->
                            <input type="hidden" name='sno' value=<?php echo $groupsData[$i]['Sno']?>>
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