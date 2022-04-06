<?php 
include_once 'DataProvider.php';
include_once 'format_price.php';
$sql = "SELECT * FROM sanpham WHERE idloai=2 LIMIT 4";
$result = DataProvider::executeQuery($sql);

        while($row = mysqli_fetch_array($result))
        {
            echo '
                        <div class="product-item">
                            <a href="index.php?id='.$row['idSP'].'&act=detailproduct">
                                <div class="product-image">
                                    <img src="images/'.$row['hinhanh'].'" />
                                </div>
                                <div class="product-name">
                                    <p>'.$row['ten'].'</p>
                                </div>
                                <div class="product-price">
                                    <p>'.currency_format($row['gia']).'</p>
                                </div>
                            </a>
                        </div>
                ';
        }
?>