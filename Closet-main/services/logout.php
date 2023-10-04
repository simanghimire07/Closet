<?php
    session_start();
    session_unset();
    session_destroy();
    session_abort();
    unset($_SESSION['user']);
    header('location: ../index.php');
?>