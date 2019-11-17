<?php
    session_start();
    $_SESSION['location_name'] = $_GET['place_search'];
    header("location: ../#place_serch_div");
?>