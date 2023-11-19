<?php
include("_dbconnect.php");

    $adminid = $_POST['Adminid'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM admin WHERE admin_id='$adminid' AND password='$password'");
    if(mysqli_num_rows($check)>0){
/*         $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect, "SELECT * FROM cadidate WHERE role=2");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC); */

        echo '
        <script>
        window.location = "DASHBOARD.php";
        </script>
        ';

       /*  $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata;  */

       
    }
    else{
        echo '
        <script>
        alert("Invalide Cradential or User not found....");
        window.location = "Admin.html";
        </script>
        ';
    }

?>