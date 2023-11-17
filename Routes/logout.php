<?php
    session_start();
    session_destroy();
    header("location:../online voting system/index.html");
?>