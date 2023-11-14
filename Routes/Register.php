<?php
/*     include("_dbconnect.php");

    $name = $_POST['name'];
    $voterid = $_POST['voterid'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $role = $_POST['role'];

 if($password==$cpassword and $role==1){
        move_uploaded_file($tmp_name, "../uplords/$image");
        $insert = mysqli_query($connect, "INSERT INTO voters (Name, Voter_id, number, Email, password, photo, role, status) VALUES ('$name', '$voterid', '$number', '$email', '$password', '$image', '$role', 0)");

        if($insert){
            echo '
            <script>
            alert("Registration successful!!");
            window.location = "login.html";
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
   elseif($password==$cpassword and $role==2){
        move_uploaded_file($tmp_name, "../uplords/$image");
        $insert2 = mysqli_query($connect, "INSERT INTO cadidate (Name, Voter_id, number, Email, password, photo, role, votes) VALUES ('$name', '$voterid', '$number', '$email', '$password', '$image', '$role', 0)");

        if($insert2){
            echo '
            <script>
            alert("Registration successful!!");
            window.location = "login.html";
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
        alert("Password does not match or User is already exist");
        window.location = "Register.html";
        </script>
        ';
    } */

    // Include the database connection file (_dbconnect.php)
    include("_dbconnect.php");
    
    // Define a Registration class to handle user registration
    class Registration {
        private $connect;
    
        public function __construct($dbConnection) {
            $this->connect = $dbConnection;
        }
    
        public function registerVoter($name, $voterid, $number, $email, $password, $cpassword, $image, $role) {
            if ($password == $cpassword && $role == 1) {
                move_uploaded_file($image['tmp_name'], "../uplords/" . $image['name']);
    
                $insert = mysqli_query($this->connect, "INSERT INTO voters (Name, Voter_id, number, Email, password, photo, role, status) VALUES ('$name', '$voterid', '$number', '$email', '$password', '{$image['name']}', '$role', 0)");
    
                return $insert;
            } elseif ($password == $cpassword && $role == 2) {
                move_uploaded_file($image['tmp_name'], "../uplords/" . $image['name']);
    
                $insert2 = mysqli_query($this->connect, "INSERT INTO cadidate (Name, Voter_id, number, Email, password, photo, role, votes) VALUES ('$name', '$voterid', '$number', '$email', '$password', '{$image['name']}', '$role', 0)");
    
                return $insert2;
            } else {
                return false;
            }
        }
    }
    
    // Instantiate the Registration class with the database connection
    $registration = new Registration($connect);
    
    // Handle the registration process
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $voterid = $_POST['voterid'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $image = $_FILES['photo'];
        $role = $_POST['role'];
    
        $result = $registration->registerVoter($name, $voterid, $number, $email, $password, $cpassword, $image, $role);
    
        if ($result) {
            echo '
            <script>
            alert("Registration successful!!");
            window.location = "login.html";
            </script>
            ';
        } else {
            echo '
            <script>
            alert("Some error occurred...");
            window.location = "Register.html";
            </script>
            ';
        }
    } else {
        echo '
        <script>
        alert("Invalid request.");
        window.location = "Register.html";
        </script>
        ';
    }
    ?>
