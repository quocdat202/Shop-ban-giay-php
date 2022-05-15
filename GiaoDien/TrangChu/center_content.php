<?php 
include_once 'DataProvider.php';
include_once 'GiaoDien/format_price.php';

    echo   '
            <div class="content-center container">
                <div class="content-item">';
                echo '
                    <div class="product">';
    if(!isset($_GET['act']) && !isset($_GET['idNameSP'])){

        echo '<div class="title-pro">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title-2 pull-left">NIKE</h3>
                    <div class="vi-right-link pull-right">
                        <a class="vi-more" href="index.php?idNameSP=Nike&act=XemSP&page=1">Xem tất cả »</a>
                    </div>
                </div>
            </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/nike_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                </div>
                ';
        echo '</div>';
    

        echo '<div class="title-pro">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title-2 pull-left">VANS</h3>
                    <div class="vi-right-link pull-right">
                        <a class="vi-more" href="index.php?idNameSP=Vans&act=XemSP&page=1">Xem tất cả »</a>
                    </div>
                </div>
            </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/vans_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                </div>
                ';
        echo '</div>';
    
        
        echo '<div class="title-pro">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title-2 pull-left">ADIDAS</h3>
                    <div class="vi-right-link pull-right">
                        <a class="vi-more" href="index.php?idNameSP=Adidas&act=XemSP&page=1">Xem tất cả »</a>
                    </div>
                </div>
            </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/adidas_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                </div>
                ';
        echo '</div>';
    

        echo '<div class="title-pro">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title-2 pull-left">CONVERSE</h3>
                    <div class="vi-right-link pull-right">
                        <a class="vi-more" href="index.php?idNameSP=Converse&act=XemSP&page=1">Xem tất cả »</a>
                    </div>
                </div>
            </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/converse_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                </div>
                ';
        echo '</div>';
    

        echo '<div class="title-pro">
                <div class="clearfix vi-header">
                    <h3 class="vi-left-title-2 pull-left">BALENCIAGA</h3>
                    <div class="vi-right-link pull-right">
                        <a class="vi-more" href="index.php?idNameSP=Balenciaga&act=XemSP&page=1">Xem tất cả »</a>
                    </div>
                </div>
            </div>';
            echo '<div class="item-pro">';
                    include_once 'GiaoDien/SanPham/balenciaga_panel.php';
            echo '</div>';
            echo '<div class="show-product">
                </div>
                ';
        echo '</div>';

        
        // include_once 'GiaoDien/SanPham/SanphamSale.php';

    
        
    echo'</div>';
    echo '</div>
    </div>';
    }   
    
        else if(isset($_GET['act']) && isset($_GET['idNameSP']))
        {   $ProductUrl='GiaoDien/SanPham/'.strtolower($_GET['idNameSP']).'_panel.php';
            $tempResult = DataProvider::executeQuery("SELECT * FROM `theloai` where tentheloai = '".$_GET['idNameSP']."' ");
            $rowTheLoai=mysqli_fetch_array($tempResult);

            
        //  ======== Phân Trang ========
            $GLOBALS['theloai'] = $rowTheLoai['idloai'];
            $sql="SELECT * FROM sanpham WHERE idloai='".$rowTheLoai['idloai']."'";
            $result = DataProvider::executeQuery($sql);
            $soSP = 16;
            $totalPage=ceil(mysqli_num_rows($result)/$soSP) ;
            $vitri = ($_GET['page']-1)*$soSP;

            
        //  ======= end Phân Trang =======

        echo    '<div class="theloai-sanpham">
                    <div class="product-nike pro-it">
                        <div class="title-theloai">
                            <p>'.strtoupper($rowTheLoai['tentheloai']).'</p>
                        </div>                  
                        <div>
                            <span>Sắp xếp theo:</span>
                            <form action="" method="POST">
                                <select onchange="this.form.submit()" name="sortpro" class="form-select" aria-label="Default select example">
                                    <option selected>Tùy chọn</option>
                                    <option value="ASC">Giá tăng dần</option>
                                    <option value="DESC">Giá giảm dần</option>
                                </select>
                            </form>
                            </div>
                        <div class="item-pro">';
                        if(isset($_POST['sortpro'])){
                            if($_POST['sortpro']=='ASC'){
                
                                prosort($_POST['sortpro']);
                                }
                            if($_POST['sortpro']=='DESC'){
                                prosort($_POST['sortpro']);
                            }
                        }
                        else include_once $ProductUrl;
        echo            '</div>
                    </div>
                </div>

            <div class="ProductPage">';
            for($i=1;$i<=$totalPage;$i++){
            if($_GET['page']!=$i)
                echo'<a href="index.php?idNameSP='.$_GET['idNameSP'].'&act=XemSP&page='.$i.'" class="Pro-content-page">'.$i.'</a>';
            else
                echo '<a class="Pro-content-page-2">'.$i.'</a>';
            }
            echo'</div>';
            
        }
        function prosort($sort){
            $data = "SELECT idSP,gia,hinhanh,ten FROM sanpham WHERE idloai='".$GLOBALS['theloai']."' ORDER BY gia $sort";
            $result3 = DataProvider::executeQuery($data);
            while($row = mysqli_fetch_array($result3))
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
    }
        
        
        // else if(isset($_GET['act'])){
        //     if($_GET['act']=='XemSP'){

        //         $sql2 = "SELECT * FROM bannersale WHERE hienthi=1";
        //         $result2 = DataProvider::executeQuery($sql2);
        //         while($row = mysqli_fetch_array($result2))
        //         {
        //         echo'
        //             <div class="banner-sale">
        //                 <div class="product-sale pro-it pro-sale">
        //                     <img src="images/'.$row['hinhanh'].'">
        //                 </div>
        //             </div>
        //         ';
        //         }
                
        //         echo '<div class="product-sale pro-it">
        //                 <div class="txt-content">
        //                 </div>';
        //             echo '<div class="item-pro">';
        //                     include_once 'GiaoDien/SanPham/SanphamSale.php';
        //             echo '</div>';
        //             echo '<div class="show-product">
        //                 </div>
        //                 ';
        //         echo '</div>';
        //     }

        // }
                                    
                              
                                    
    ?>