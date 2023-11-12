<?php
    /* session_start();
    include("_dbconnect.php");

    $voterid = $_POST['voterid'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "SELECT * FROM voters WHERE Voter_id='$voterid' AND password='$password' AND role='$role'");
    if(mysqli_num_rows($check)>0){
        $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect, "SELECT * FROM cadidate WHERE role=2");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        echo '
        <script>
        window.location = "dashboard.php";
        </script>
        ';

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata; 

       
    }
    else{
        echo '
        <script>
        alert("Invalide Cradential or User not found....");
        window.location = "login.html";
        </script>
        ';
    }
 */

 // Start the session
 session_start();
 
 // Include the database connection file (_dbconnect.php)
 include("_dbconnect.php");
 
 // Define a UserAuthentication class for user authentication
 class UserAuthentication {
     private $connect;
 
     public function __construct($dbConnection) {
         $this->connect = $dbConnection;
     }
 
     public function authenticateUser($voterid, $password, $role) {
         $check = mysqli_query($this->connect, "SELECT * FROM voters WHERE Voter_id='$voterid' AND password='$password' AND role='$role'");
         
         if (mysqli_num_rows($check) > 0) {
             $userdata = mysqli_fetch_array($check);
             $groups = mysqli_query($this->connect, "SELECT * FROM cadidate WHERE role=2");
             $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
             
             $_SESSION['userdata'] = $userdata;
             $_SESSION['groupsdata'] = $groupsdata;
             
             return true;
         } else {
             return false;
         }
     }
 }
 
 // Instantiate the UserAuthentication class with the database connection
 $userAuthentication = new UserAuthentication($connect);
 
 // Handle user authentication
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $voterid = $_POST['voterid'];
     $password = $_POST['password'];
     $role = $_POST['role'];
 
     if ($userAuthentication->authenticateUser($voterid, $password, $role)) {
         echo '
         <script>
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

