<?php
    include("_dbconnect.php");

    $voterid = $_POST['voterid'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['name']['photo'];
    $tmp_name = $_FILES['tmp_name']['photo'];
?>