<?php
    include ("_dbconnect.php");

    $name= $_POST['name'];
    $email= $_POST['email'];
    $feedback= $_POST['message'];

    $insert = mysqli_query($connect, "INSERT INTO contact (Name, Email, Feedback) VALUES ($name, $email, $message)");

    if($insert){
        echo '
        <script>
        alert("Feedback Submited..");
        window.location = "index.html";
        </script>
        ';
    }
    else{
        echo '
        <script>
        alert("Feedback Not Submited..");
        window.location = "Contact Us.html";
        </script>
        ';
    }
?>