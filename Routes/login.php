<?php
    session_start();
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

  
  
?>
