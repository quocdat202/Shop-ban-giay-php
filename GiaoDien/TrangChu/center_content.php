<?php 
include_once 'DataProvider.php';
include_once 'GiaoDien/format_price.php';

    echo   '
            <div class="content-center container">
                <div class="content-item">';
                echo '
                    <div class="product">';
    if(!isset($_GET['act']) && !isset($_GET['idNameSP'])){

        echo '<div class="product-nike pro-it">
                <div class="txt-content">
                    <p>Nike</p>
                </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/nike_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                    <div class="show-pro">
                        <a href="index.php?idNameSP=Nike&act=XemSP&page=1" >
                        Xem tất cả sản phẩm => 
                        </a>
                    </div>
                </div>
                ';
        echo '</div>';
    
        echo '<div class="product-vans pro-it">
                <div class="txt-content">
                    <p>Vans</p>
                </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/vans_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                    <div class="show-pro">
                        <a href="index.php?idNameSP=Vans&act=XemSP&page=1">Xem tất cả sản phẩm => </a>
                    </div>
                </div>
                ';
        echo '</div>';
    
        echo '<div class="product-adidas pro-it">
                <div class="txt-content">
                    <p>Adidas</p>
                </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/adidas_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                    <div class="show-pro">
                        <a href="index.php?idNameSP=Adidas&act=XemSP&page=1">Xem tất cả sản phẩm => </a>
                    </div>
                </div>
                ';
        echo '</div>';
    
        echo '<div class="product-converse pro-it">
                <div class="txt-content">
                    <p>Converse</p>
                </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/converse_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                    <div class="show-pro">
                        <a href="index.php?idNameSP=Converse&act=XemSP&page=1">Xem tất cả sản phẩm => </a>
                    </div>
                </div>
                ';
        echo '</div>';
    
        echo '<div class="product-balenciaga pro-it">
                <div class="txt-content">
                    <p>Balenciaga</p>
                </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/balenciaga_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                    <div class="show-pro">
                        <a href="index.php?idNameSP=Balenciaga&act=XemSP&page=1">Xem tất cả sản phẩm => </a>
                    </div>
                </div>
                ';
        echo '</div>';
    
    echo'</div>';
    echo '</div>
    </div>';
    }   
    
        else if(isset($_GET['act']) && isset($_GET['idNameSP']))
        {   $ProductUrl='GiaoDien/SanPham/'.strtolower($_GET['idNameSP']).'_panel.php';
            $tempResult = DataProvider::executeQuery("SELECT * FROM `theloai` where tentheloai = '".$_GET['idNameSP']."'");
            $rowTheLoai=mysqli_fetch_array($tempResult);
        //  ======== Phân Trang ========
            $sql="SELECT * FROM sanpham WHERE idloai='".$rowTheLoai['idloai']."'";
            $result = DataProvider::executeQuery($sql);
            $soSP = 4;
            $totalPage=ceil(mysqli_num_rows($result)/$soSP) ;
            $vitri = ($_GET['page']-1)*$soSP;
        //  ======= end Phân Trang =======

        echo    '<div class="product-nike pro-it">
                    <div class="txt-content">
                        <p>'.$rowTheLoai['tentheloai'].'</p>
                    </div>
                    <div class="item-pro">';
                    include_once $ProductUrl;
        echo        '</div>
                </div>

            <div class="ProductPage">';
            for($i=1;$i<=$totalPage;$i++){
            echo'<a href="index.php?idNameSP='.$_GET['idNameSP'].'&act=XemSP&page='.$i.'">'.$i.'</a>';
            }
            echo'</div>';
        }
                                    
                              
                                    
    ?>