<?php
    include("_dbconnect.php");
    

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
    
    $registration = new Registration($connect);
    

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
            alert("Password not matched or Username is Already exist...");
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
