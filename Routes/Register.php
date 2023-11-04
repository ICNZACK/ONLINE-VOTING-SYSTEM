<?php
    include("_dbconnect.php");

    $name = $_POST['name'];
    $voterid = $_POST['voterid'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

    if($password==$cpassword){
        move_uploaded_file($tmp_name, "../uplords/$image");
        $insert = mysqli_query($connect, "INSERT INTO voters (Name, Voter_id, number, Email, password, photo, role, votes, status) VALUES ('$name', '$voterid', '$number', '$email', '$password', '$image', '$role', 0, 0)");
        if($insert){
            echo '
            <script>
            alert("Registration successful!!");
            window.location = "login.php";
            </script>
            ';
        }
        else{
            echo '
            <script>
            alert("Some error occured...");
            window.location = "Register.html";
            </script>
            ';
        }
    }
    else{
        echo '
        <script>
        alert("Password and confirm password does not match..");
        window.location = "Register.html";
        </script>
        ';
    }
?>