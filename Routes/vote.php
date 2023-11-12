<?php
/*     session_start();
    include('_dbconnect.php');

    $votes = $_POST['gvotes'];
    //$total_votes = $votes + 1;
    $total_votes_query= mysqli_query($connect, "SELECT votes from cadidate ");
    $total_votes_row = mysqli_fetch_assoc($total_votes_query);
    $total_votes = (int)$total_votes_row['votes+1'];
    //$gid = $_POST['S.no'];
    $sno=$_POST['sno'];
    $uid = $_SESSION['userdata']['S.no'];

    $update_votes_query = "UPDATE cadidate SET votes = '$total_votes' WHERE S.no = '$sno'";
    $update_votes = mysqli_query($connect, $update_votes_query);

    if ($update_votes) {
        $update_user_status_query = "UPDATE voters SET status = 1 WHERE S.no = '$uid'";
        $update_user_status = mysqli_query($connect, $update_user_status_query);

        if ($update_user_status==0) {
            $groups_query = "SELECT * FROM voters WHERE role = 2";
            $groups = mysqli_query($connect, $groups_query);

            if ($groups) {
                $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
                $_SESSION['userdata']['status'] = 1;
                $_SESSION['groupsdata'] = $groupsdata;

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
} */


session_start();

class Database {
    private $connection;

    public function __construct() {
        include('_dbconnect.php');
        $this->connection = $connect;
    }

    public function getVotes($sno) {
        $totalVotesQuery = "SELECT votes FROM cadidate WHERE S.no = '$sno'";
        $result = mysqli_query($this->connection, $totalVotesQuery);
        $row = mysqli_fetch_assoc($result);
        return (int)$row['votes'];
    }

    public function updateVotes($sno, $totalVotes) {
        $updateVotesQuery = "UPDATE cadidate SET votes = '$totalVotes' WHERE S.no = '$sno'";
        return mysqli_query($this->connection, $updateVotesQuery);
    }
}

class User {
    private $uid;

    public function __construct() {
        $this->uid = $_SESSION['userdata']['S.no'];
    }

    public function updateStatus() {
        $database = new Database();
        $updateUserStatusQuery = "UPDATE voters SET status = 1 WHERE S.no = '$this->uid'";
        return mysqli_query($database->connection, $updateUserStatusQuery);
    }
}

class VotingApp {
    public function vote($sno) {
        $database = new Database();
        $votes = $database->getVotes($sno);
        $totalVotes = $votes + 1;

        if ($database->updateVotes($sno, $totalVotes)) {
            $user = new User();
            if ($user->updateStatus() == 0) {
                // Fetch and handle groups data if needed
                $groupsQuery = "SELECT * FROM voters WHERE role = 2";
                $groups = mysqli_query($database->connection, $groupsQuery);

                if ($groups) {
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
            } else {
                echo '
                    <script>
                    alert("Error updating user status");
                    window location = "dashboard.php";
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
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sno = $_POST['sno'];
    $votingApp = new VotingApp();
    $votingApp->vote($sno);
}
?>
