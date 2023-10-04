<?php
    function isLoggedIn(){
        session_start();
        if (isset($_SESSION['user'])){
            return true;
        }
        return false;
    }
?>