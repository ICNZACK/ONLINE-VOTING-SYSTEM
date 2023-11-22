<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibl" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System-Login</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="logo-ionic"></ion-icon>WeVote
        </a>
        <nav class="nav">
            <a href="../index.html">Home</a>
            <a href="../Routes/About Us.html">About Us</a>
            <a href="../Routes/Contact Us.html">Contact Us</a>
            <a href="../Routes/login.html">Login</a>
        </nav>
    </header>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="settings"></ion-icon></span>
                    <select name="role">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select>
                </div>
                <div class="remember-forgot">
                    <label ><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="../Routes/Register.php" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
/*  session_start();
    include('_dbconnect.php');

    $votes = $_POST['gvotes'];
    //$total_votes = $votes + 1;
    $sno=$_POST['sno'];
    $uid = $_SESSION['userdata']['Sno'];

    $votes++;

    $update_votes = mysqli_query($connect, "UPDATE cadidate SET votes = '$votes' WHERE Sno = '$sno'");
    $update_user_status = mysqli_query($connect, "UPDATE voters SET status = 1 WHERE Sno = '$uid'");

    if ($update_user_status ==1 && $update_votes) {
        //$update_votes = mysqli_query($connect, "UPDATE cadidate SET votes = '$votes + 1' WHERE Sno = '$sno'");
        $groups= mysqli_query($connect, "SELECT * from cadidate where role=2");
        $groupsData = mysqli_fetch_all($groups, MYSQLI_ASSOC);
        $_SESSION['userdata']['status'] = 1;
        $_SESSION['groupsdata'] = $groupsData;

                echo '
                    <script>
                    alert("Voting successful....");
                    window.location = "dashboard.php";
                    </script>
                ';
            }
           else {
                echo '
                    <script>
                    alert("Error fetching data from voters table");
                    window.location = "dashboard.php";
                    </script>
                ';
            }   */


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

/*    /*     session_start();
    include("_dbconnect.php");

    $voterid = $_POST['voterid'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "SELECT * FROM voters WHERE Voter_id='$voterid' AND password='$password' AND role='$role'");
    $check1 = mysqli_query($connect, "SELECT * FROM cadidate WHERE Voter_id='$voterid' AND password='$password' AND role='$role'");
    if(mysqli_num_rows($check)>0){
        $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect, "SELECT * FROM cadidate WHERE role=2");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        echo '
        <script>
        window.location = "dashboard.php";
        </script>
        ';

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata; 

       
    }
    elseif(mysqli_num_rows($check1)>0){
        $userdata = mysqli_fetch_array($check1);
        $groups = mysqli_query($connect, "SELECT * FROM cadidate WHERE role=2");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        echo '
        <script>
        window.location = "dashboard.php";
        </script>
        ';

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata; 

    } 
    else{
        echo '
        <script>
        alert("Invalide Cradential or User not found....");
        window.location = "login.html";
        </script>
        ';
} */

/*        session_start();
       if(!isset($_SESSION['userdata'])){
           header("location: login.html");
       }
   
       $userdata = $_SESSION['userdata'];
       $groupsdata = $_SESSION['groupsdata'];
   
       if($_SESSION['userdata']['status']==0){
           $status= '<b style="color:red">Not voted</b>';
       }
       else{
           $status= '<b style="color:green">voted</b>';
       }  */

?> -->