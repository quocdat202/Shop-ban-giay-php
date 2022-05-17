<?php
include_once 'GiaoDien/format_price.php';

     if (isset($_POST['btnsearch']))
     {
         include_once('DataProvider.php');

         $item = $_POST['query'];
        
     $sql="
     SELECT * FROM sanpham
     WHERE ten like '%$item%' 
     "; 
     $result = DataProvider::executeQuery($sql);
     //  ======== Phân Trang ========
     $soSP = 16;
     $totalPage=ceil(mysqli_num_rows($result)/$soSP) ;
     $vitri = ($_POST['page']-1)*$soSP;
     $sql2="
     SELECT * FROM sanpham
     WHERE ten like '%$item%' LIMIT ".$vitri.",".$soSP
     ; 
     $result2 = DataProvider::executeQuery($sql2);
     //  ======== End Phân Trang ========

    echo '<div class="item-search">';
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
                                        <p>'.currency_format($row['gia']).'</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    
                ';
        }
    echo '</div>';
    if($totalPage>1){
        echo'<form action="index.php?act=search" method="post" class="ProductPage">';
            for($i=1;$i<=$totalPage;$i++){
                if($_POST['page']!=$i)
                echo'<button type="submit" name="page" value="'.$i.'" class="Pro-content-page">'.$i.'</button>';
                else
                echo'<button class="Pro-content-page-2">'.$i.'</button>';
            }
            echo'<input type="hidden" name="btnsearch" value="'.$i.'" />
                <input type="hidden" name="query" value="'.$item.'" />
            </form>';
    }
    
     }
?>