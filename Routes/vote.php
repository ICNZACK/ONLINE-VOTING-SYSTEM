<?php
 session_start();
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
            } 
/* 
            session_start();
            include('_dbconnect.php');
            
            class Candidate
            {
                private $db;
            
                public function __construct($database)
                {
                    $this->db = $database;
                }
            
                public function updateVotes($sno, $votes)
                {
                    $connect = $this->db->getConnection();
                    $total_votes = $votes + 1;
                    $update_votes = mysqli_query($connect, "UPDATE candidate SET votes = '$total_votes' WHERE Sno = '$sno'");
                    return $update_votes;
                }
            }
            
            class Voter
            {
                private $db;
            
                public function __construct($database)
                {
                    $this->db = $database;
                }
            
                public function updateStatus($uid)
                {
                    $connect = $this->db->getConnection();
                    $update_user_status = mysqli_query($connect, "UPDATE voters SET status = 1 WHERE Sno = '$uid'");
                    return $update_user_status;
                }
            
                public function fetchGroupsData()
                {
                    $connect = $this->db->getConnection();
                    $groups = mysqli_query($connect, "SELECT * from candidate where role=2");
                    return mysqli_fetch_all($groups, MYSQLI_ASSOC);
                }
            }
            
            // Database class for managing the connection
            class Database
            {
                private $connect;
            
                public function __construct()
                {
                    include('_dbconnect.php');
                    $this->connect = $connect;
                }
            
                public function getConnection()
                {
                    return $this->connect;
                }
            }
            
            // Main code
            $database = new Database();
            $candidate = new Candidate($database);
            $voter = new Voter($database);
            
            $votes = $_POST['gvotes'];
            $sno = $_POST['sno'];
            $uid = $_SESSION['userdata']['Sno'];
            
            $updateVotesResult = $candidate->updateVotes($sno, $votes);
            
            if ($updateVotesResult) {
                $updateUserStatusResult = $voter->updateStatus($uid);
            
                if ($updateUserStatusResult == 0) {
                    $groupsData = $voter->fetchGroupsData();
                    $_SESSION['userdata']['status'] = 1;
                    $_SESSION['groupsdata'] = $groupsData;
            
                    echo '
                        <script>
                        alert("Voting successful....");
                        window.location = "dashboard.php";
                        </script>
                    ';
                } else {
                    echo '
                        <script>
                        alert("Error updating user status");
                        window.location = "dashboard.php";
                        </script>
                    ';
                }
            } else {
                echo '
                    <script>
                    alert("Error updating votes");
                    window.location = "dashboard.php";
                    </script>
                ';
            }
             */
 
?>
