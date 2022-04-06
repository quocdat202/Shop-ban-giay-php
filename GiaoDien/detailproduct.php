<?php
    include_once 'DataProvider.php';
    include_once 'format_price.php';
    $sql = "SELECT * FROM sanpham WHERE idSP='".$_GET['id']."'";
    $result = DataProvider::executeQuery($sql);

    while($row = mysqli_fetch_array($result))
    {
    echo '<div class="">
            '.$row['ten'].'
        </div>
    ';
    }
?>