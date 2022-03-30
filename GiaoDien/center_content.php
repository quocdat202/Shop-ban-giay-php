<?php 
include_once 'DataProvider.php';
$sql = "SELECT * FROM sanpham WHERE idloai=1";
$result = DataProvider::executeQuery($sql);

    echo   '
            <div class="content-center container">
            <div class="txt-content">
                <p>Nike</p>
            </div>';
            while($row = mysqli_fetch_array($result))
            {
                echo '
                        <div class="product">
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="images/'.$row['hinhanh'].'" /></div>
                                </div>
                                <div class="product-name">
                                    <p>'.$row['ten'].'</p>
                                </div>
                                <div class="product-price">
                                    <p>'.$row['gia'].'</p>
                                </div>
                            </div>
                        </div>
                    ';
                    
            }
            
?>