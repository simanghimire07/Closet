<?php
    try{
        $conn = new mysqli('localhost','root','','closet');
        if ($conn){
            echo "<script>console.log('Connection successful')</script>";
        }
    }catch(Exception $e){
        die("<script>console.log('Error $e')</script>");
    }