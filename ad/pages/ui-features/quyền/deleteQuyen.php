<?php
    include_once '../../../../DataProvider.php';
    $sql="Delete from q_dm where idQuyen='".$_GET['ma']."' and madanhmuc='".$_GET['ten']."'";
    echo $sql;
    $result=DataProvider::executeQuery2($sql);
    header('location:../../../index.php?act=qldm&qldm_q='.$_GET['ma']);
?>