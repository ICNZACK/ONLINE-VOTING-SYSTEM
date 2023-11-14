<?php
   session_start();
    include('_dbconnect.php');

    $votes = $_POST['gvotes'];
    $total_votes = $votes + 1;
    $sno=$_POST['sno'];
    $uid = $_SESSION['userdata']['S.no'];

    $update_votes = mysqli_query($connect, "UPDATE cadidate SET votes = '$total_votes' WHERE S.no = '$sno'");
    $update_user_status = mysqli_query($connect, "UPDATE voters SET status = 1 WHERE S.no = '$uid'");

    if ($update_user_status ==0) {
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
            }
 
?>
