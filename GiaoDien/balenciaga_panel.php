<?php 
include_once 'DataProvider.php';
include_once 'format_price.php';
$sql = "SELECT * FROM sanpham WHERE idloai=5 LIMIT 4";
$result = DataProvider::executeQuery($sql);

        while($row = mysqli_fetch_array($result))
        {
            echo '
                        <div class="product-item">
                            <div class="product-image">
                                <img src="images/'.$row['hinhanh'].'" />
                            </div>
                            <div class="product-name">
                                <p>'.$row['ten'].'</p>
                            </div>
                            <div class="product-price">
                                <p>'.currency_format($row['gia']).'</p>
                            </div>
                        </div>
                ';
        }
?>