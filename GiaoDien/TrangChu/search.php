<?php
include_once 'GiaoDien/format_price.php';

     if (isset($_POST['btnsearch']))
     {
         include_once('DataProvider.php');

         $item = $_POST['search'];
        
     $sql="
     SELECT * FROM sanpham
     WHERE ten like '%$item%' limit 4
     ";
     $result = DataProvider::executeQuery($sql);
    //  echo '<script> location.replace("index.php?act=qlsp"); </script>';
    echo '<div class="item-search">';
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
    echo '</div>';
     }
?>