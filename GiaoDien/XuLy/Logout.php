<?php
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['iduser']);
    unset($_SESSION['checklogin']);
    header('location:../../index.php');
?>