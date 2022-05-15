<?php
include_once 'GiaoDien/format_price.php';

     if (isset($_POST['btnsearch']))
     {
         include_once('DataProvider.php');

         $item = $_POST['search'];
        
     $sql="
     SELECT * FROM sanpham
     WHERE ten like '%$item%'
     ";
     $result = DataProvider::executeQuery($sql);
    //  echo '<script> location.replace("index.php?act=qlsp"); </script>';
    $soSP = 4;
    $totalPage=ceil(mysqli_num_rows($result)/$soSP) ;
    $vitri = ($_GET['page']-1)*$soSP;
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
    echo'
    <div class="ProductPage">';
            for($i=1;$i<=$totalPage;$i++){
            echo'<a href="">'.$i.'</a>';
            }
    echo'</div>';
     }
?>