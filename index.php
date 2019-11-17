<?php
    session_start();
    $_SESSION['location_name'] = 'n';
    $_SESSION['map_place'] = 'N';
    $_SESSION['login'] = "N";
    $_SESSION['isLogged'] = false;
    header("location: travelix");
?>
