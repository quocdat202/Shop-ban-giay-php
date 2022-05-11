<?php
    include_once '../../../../DataProvider.php';
    if($_GET['status']=='1')
        $sql="update donhang set trangthai=0 where idDH='".$_GET['xacnhan_id']."'";
    else if($_GET['status']=='0')
        $sql="update donhang set trangthai=1 where idDH='".$_GET['xacnhan_id']."'";
    $result = DataProvider::executeQuery2($sql);
    header('location:../../../index.php?act=qldh');
?>