<?php
$connect = mysqli_connect("localhost", "root", "", "voting_database") or die("connection failed");

if($connect){
    echo "connected";
}
else{
    echo "not connected";
}
?>