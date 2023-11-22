<?php

  session_start();
 
 
 include("_dbconnect.php");
 
 class UserAuthentication {
     private $connect;
 
     public function __construct($dbConnection) {
         $this->connect = $dbConnection;
     }
 
     public function authenticateUser($voterid, $password, $role) {
         $check = mysqli_query($this->connect, "SELECT * FROM voters WHERE Voter_id='$voterid' AND password='$password' AND role='$role'");
         $check1 = mysqli_query($this->connect, "SELECT * FROM cadidate WHERE Voter_id='$voterid' AND password='$password' AND role='$role'");
         
         if (mysqli_num_rows($check) > 0) {
             $userdata = mysqli_fetch_array($check);
             $groups = mysqli_query($this->connect, "SELECT * FROM cadidate WHERE role=2");
             $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
             
             $_SESSION['userdata'] = $userdata;
             $_SESSION['groupsdata'] = $groupsdata;
             
             return true;
         } elseif (mysqli_num_rows($check1) > 0){
            $userdata = mysqli_fetch_array($check1);
            $groups = mysqli_query($this->connect, "SELECT * FROM cadidate WHERE role=2");
            $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
            
            $_SESSION['userdata'] = $userdata;
            $_SESSION['groupsdata'] = $groupsdata;

        return true;

    }
    else{
        return false;
         }
     }
 }
 
 
 $userAuthentication = new UserAuthentication($connect);
 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $voterid = $_POST['voterid'];
     $password = $_POST['password'];
     $role = $_POST['role'];
 
     if ($userAuthentication->authenticateUser($voterid, $password, $role)) {
         echo '
         <script>
         alert("Login Successful....");
         window.location = "dashboard.php";
         </script>
         ';
     } else {
         echo '
         <script>
         alert("Invalid Credentials or User not found....");
         window.location = "login.html";
         </script>
         ';
     }
 }
 ?> 

