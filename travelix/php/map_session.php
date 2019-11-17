<?php
    session_start();
    $_SESSION['map_place'] = $_GET['place_search'];
    header("location: ../#map_area");
?>