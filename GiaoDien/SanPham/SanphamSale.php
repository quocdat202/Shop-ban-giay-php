<?php 
include_once 'DataProvider.php';
include_once 'GiaoDien/format_price.php';

if(!isset($_GET['act']) && !isset($_GET['idNameSP']))
    $sql2 = "SELECT * FROM sanpham WHERE hienthi=2";
$result2 = DataProvider::executeQuery($sql2);

        while($row = mysqli_fetch_array($result2))
        {
            echo '
                        <div class="product-item">
                            <div class="pro-item">
                                <a href="index.php?id='.$row['idSP'].'&act=detailproduct">
                                    <div class="product-image">
                                        <img src="images/'.$row['hinhanh'].'" />
                                    </div>
                                    <div class="product-name">
                                        <p>'.$row['ten'].'</p>
                                    </div>
                                    <div class="product-price">
                                        <p class="price-old">'.currency_format($row['gia']).'</p>
                                        <p>'.currency_format($row['gia']*0.65).'</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                ';
        }
?>