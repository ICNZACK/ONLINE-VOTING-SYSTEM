<?php
    session_start();
    include('_dbconnect.php');

    $votes=$_POST['gvotes'];
    $total_votes=$votes+1;
    $gid=$_POST['gid'];
    $uid=$_SESSION['userdata']['S.no'];

    //$update_votes= mysqli_query($connect, "UPDATE voters SET votes= '$total_votes' WHERE S.no='$gid'");
   // $update_user_status= mysqli_query($connect, "UPDATE voters SET status=1 WHERE S.no='$uid'");
    
    /* echo $update_user_status;
 */
    if($update_user_status==0){
        $increment = mysqli_query($connect, "UPDATE voters SET votes= '$update_votes+1' WHERE S.no='$gid'");
        $update_user_status= mysqli_query($connect, "UPDATE voters SET status= '1' WHERE S.no='$uid'");
        $groups= mysqli_query($connect, "SELECT * FROM voters WHERE role= 2");
        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);
        $_SESSION['userdata']['status']=1;
        $_SESSION['groupsdata']= $groupsdata;
        
    
        echo'
        <script>
        alert("Voting successful....");
        window.location = "dashboard.php";
        </script>
        ';
    }
    else{
        echo '
        <script>
        alert("Some error occured..");
        window.location = "dashboard.php";
        </script>
        ';
    }

?>