<?php
include("_dbconnect.php");

    $adminid = $_POST['Adminid'];
    $password = $_POST['password'];

    $check = mysqli_query($connect, "SELECT * FROM admin WHERE admin_id='$adminid' AND password='$password'");
    if(mysqli_num_rows($check)>0){
        echo '
        <script>
        window.location = "DASHBOARD.html";
        </script>
        ';       
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