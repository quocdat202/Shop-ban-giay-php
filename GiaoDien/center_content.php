<?php 
include_once 'DataProvider.php';
include_once 'format_price.php';
$sql = "SELECT * FROM sanpham WHERE idloai=1";
$result = DataProvider::executeQuery($sql);

    echo   '
            <div class="content-center container">
                <div class="content-item">';
                echo '
                    <div class="product">';
                        echo '<div class="product-nike">
                                <div class="txt-content">
                                    <p>Nike</p>
                                </div>';
                            echo '<div class="item-pro">';
                                    include_once 'nike_panel.php';
                            echo '</div>';
                        echo '</div>';

                        echo '<div class="product-vans">
                                <div class="txt-content">
                                    <p>Vans</p>
                                </div>';
                            echo '<div class="item-pro">';
                                    include_once 'vans_panel.php';
                            echo '</div>';
                        echo '</div>';

                        echo '<div class="product-adidas">
                                <div class="txt-content">
                                    <p>Adidas</p>
                                </div>';
                            echo '<div class="item-pro">';
                                    include_once 'adidas_panel.php';
                            echo '</div>';
                        echo '</div>';

                        echo '<div class="product-converse">
                                <div class="txt-content">
                                    <p>Converse</p>
                                </div>';
                            echo '<div class="item-pro">';
                                    include_once 'converse_panel.php';
                            echo '</div>';
                        echo '</div>';

                        echo '<div class="product-balenciaga">
                                <div class="txt-content">
                                    <p>Balenciaga</p>
                                </div>';
                            echo '<div class="item-pro">';
                                    include_once 'balenciaga_panel.php';
                            echo '</div>';
                        echo '</div>';

                echo'</div>';
        echo '</div>
            </div>';
?>