<?php
include_once '../DataProvider.php';
    $sql = "SELECT * FROM sanpham WHERE idSP='".$_GET['id']."'";
    $result = DataProvider::executeQuery($sql);


?>