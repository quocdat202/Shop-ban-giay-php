<?php 
include_once 'DataProvider.php';
include_once 'GiaoDien/format_price.php';

        

    function SanphamSale()
	{
 
        $sql = "SELECT * FROM sanpham WHERE hienthi=2";
        $result = DataProvider::executeQuery($sql);

        while($row = mysqli_fetch_array($result))
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


        
    }

$sql2 = "SELECT * FROM salebanner WHERE hienthi=2";
        $result2 = DataProvider::executeQuery($sql2);
        while($row = mysqli_fetch_array($result2))
        {
        echo'
        <div class="sanpham-sale">
            <div class="banner-sale">
                <div class="product-sale pro-it pro-sale">
                    <img src="images/'.$row['hinhanh'].'">
                </div>
            </div>
        ';
        }
        echo '<div class="product-sale pro-it">
                <div class="txt-content">
                </div>';
            echo '<div class="item-pro">';
                SanphamSale();
            echo '</div>';
            echo '<div class="show-product">
                </div>
                ';
        echo '
            </div>
        </div>';

?>