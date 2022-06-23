<?php
    error_reporting(0);
    session_start();
    $conn=mysqli_connect("localhost","root","","laptop");
    mysqli_query($conn,"set names utf8");
?>