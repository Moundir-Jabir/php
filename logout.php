<?php
    session_start();
    session_unset();
    session_destroy(); // déstruction de la session

    header("Location: login.php");
    die();
?>