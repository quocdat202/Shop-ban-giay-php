<?php
    include_once 'DataProvider.php';
    $sql = "SELECT * FROM sanpham";
    $result = DataProvider::executeQuery($sql);
    while($row = mysqli_fetch_array($result))
    {
        echo $row[0];
    }
?>