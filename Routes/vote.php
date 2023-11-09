<?php
    session_start();
    include('_dbconnect.php');

    $votes = $_POST['gvotes'];
    //$total_votes = $votes + 1;
    $total_votes_query= mysqli_query($connect, "SELECT votes from cadidate ");
    $total_votes_row = mysqli_fetch_assoc($total_votes_query);
    $total_votes = (int)$total_votes_row['votes'] + 1;
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
}
?>