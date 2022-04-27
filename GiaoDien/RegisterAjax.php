<?php
    include_once '../DataProvider.php';
    $text;
    $sql;
    if(isset($_GET['tendangnhap'])){
        $sql = "SELECT * FROM taikhoan WHERE tendangnhap='".$_GET['tendangnhap']."'" ;
        $text="name";
    }
    else if(isset($_GET['sophone'])){
        $sql = "SELECT * FROM khachhang WHERE dienthoai='".$_GET['sophone']."'" ;
        $text="phone";
    }
    $result = DataProvider::executeQuery($sql);
    if(mysqli_num_rows($result)>0)
    echo $text;
?>