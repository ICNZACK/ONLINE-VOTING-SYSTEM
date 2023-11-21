<?php
session_start();
include('_dbconnect.php');

class VotingSystem
{
    private $connect;

    public function __construct($dbConnection)
    {
        $this->connect = $dbConnection;
    }

    public function vote($sno)
    {
        $votes = $_POST['gvotes'];
        $uid = $_SESSION['userdata']['Sno'];

        $votes++;

        $update_votes = mysqli_query($this->connect, "UPDATE cadidate SET votes = '$votes' WHERE Sno = '$sno'");
        $update_user_status = mysqli_query($this->connect, "UPDATE voters SET status = 1 WHERE Sno = '$uid'");

        if ($update_user_status == 1 && $update_votes) {
            $groups = mysqli_query($this->connect, "SELECT * from cadidate where role=2");
            $groupsData = mysqli_fetch_all($groups, MYSQLI_ASSOC);
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
                alert("Error fetching data from voters table");
                window.location = "dashboard.php";
                </script>
            ';
        }
    }
}

$votingSystem = new VotingSystem($connect);
$sno = $_POST['sno'];
$votingSystem->vote($sno);


?>