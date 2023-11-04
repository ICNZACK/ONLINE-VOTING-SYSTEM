<?php
$connect = mysqli_connect("localhost", "root", "", "voters") or die("connection failed");

if($connect){
    echo "connected";
}
else{
    echo "not connected";
}
?>