<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "voting_database";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
   /* echo "connected";
}
else{*/
    die("Error".mysqli_connect_error());
}
?>