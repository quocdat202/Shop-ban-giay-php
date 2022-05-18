<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['Quyen']);
    unset($_SESSION['checklogin']);
    header('location:../index.php');
?>