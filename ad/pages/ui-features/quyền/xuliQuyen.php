<?php
    include_once '../../../../DataProvider.php';
    for($i=1;$i<=$_GET['SL_input'];$i++){
        if(isset($_GET['madanhmuc_'.$i])){
            $sql="insert into q_dm(idQuyen,madanhmuc) values(
               '".$_GET['ID_quyen']."',
               '".$_GET['madanhmuc_'.$i]."'
               )";
               echo $sql;
            $result=DataProvider::executeQuery2($sql);
       }
    }
    header('location:../../../index.php?act=qldm&qldm_q='.$_GET['ID_quyen']);
?>