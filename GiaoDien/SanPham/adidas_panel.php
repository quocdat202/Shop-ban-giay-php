<?php 
include_once 'DataProvider.php';
include_once 'GiaoDien/format_price.php';
if(!isset($_GET['act']) && !isset($_GET['idNameSP']))
    $sql = "SELECT * FROM sanpham WHERE idloai=3 AND hienthi=1 LIMIT 4";
else if($_GET['act']=="XemSP" && $_GET['idNameSP']=="Adidas")
    $sql = "SELECT * FROM sanpham WHERE idloai=3 LIMIT ".$vitri.",".$soSP;
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
                                        <p>'.currency_format($row['gia']).'</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                ';
        }
?>