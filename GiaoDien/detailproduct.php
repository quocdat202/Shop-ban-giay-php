<?php
    include_once 'DataProvider.php';
    include_once 'GiaoDien/format_price.php';
    $sql = "SELECT * FROM sanpham WHERE idSP='".$_GET['id']."'";
    $result = DataProvider::executeQuery($sql);

    while($row = mysqli_fetch_array($result))
    {
    echo '
        <div class="container">
            <div class="container-ct">
                <div class="content-top">
                    <div class="ct-image">
                        <img src="images/'.$row['hinhanh'].'">
                    </div>
                    <div class="ct-right">
                        <p class="name-pro">'.$row['ten'].'</p>
                        ';
                        if ($row['hienthi'] == 2){
                        echo '
                            <p class="price-proold">'.currency_format($row['gia']).'</p>
                            <p class="price-pro">'.currency_format($row['gia']*0.65).'</p>
                        ';
                        }
                        else 
                            echo '
                                <p class="price-pro">'.currency_format($row['gia']).'</p>
                            ';
                        
                        echo
                        
                        '
                        <form action="GiaoDien/AddCart.php">
                            <p class="color-pro">Màu sắc: '.$row['mausac'].'</p>
                            <div class="ct-right-size">
                                <p class="color-pro">Size: </p>
                                    <input name="checkbox" type="radio" value="36" />36
                                    <input name="checkbox" type="radio" value="37" />37
                                    <input name="checkbox" type="radio" value="38" />38
                                    <input name="checkbox" type="radio" value="39" />39
                                    <input name="checkbox" type="radio" value="40" />40
                            </div>
                            <p class="color-pro">Số lượng:</p>
                            <input name="soluong" type="number" value="1" min="1" max="10" >
                            <div class="ct-right-btn">
                                <input type="submit" name="buy" value="Mua ngay" class="btn btn-dark btn-buy">
                                <input type="submit" name="add" value="Thêm vào giỏ hàng" class="btn btn-outline-dark btn-buy">
                            </div>
                            <input type="hidden" name="id" value="'.$row['idSP'].'">
                            <input type="hidden" name="color" value="'.$row['mausac'].'">
                            <input type="hidden" name="name" value="'.$row['ten'].'">
                            <input type="hidden" name="price" value="'.$row['gia'].'">
                            <input type="hidden" name="img" value="'.$row['hinhanh'].'">
                        </form>
                        <p class="info-general">MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC</p>
                        <p class="info-general">ĐỔI TRẢ MIỄN PHÍ</p>
                        <p class="info-mota">Hỗ trợ dổi trả sản phẩm trong vòng 3 đến 5 ngày, nếu không vừa size,
                            sản phẩm bị lỗi (giữ sản phẩm sạch và chưa qua sử dụng) bạn sẽ đổi hoặc
                            trả sản phẩm mà không tốn phí.</p>
                        <p class="info-general">THANH TOÁN</p>
                        <p class="info-mota">(Thanh toán khi nhận hàng)</p>
                        <P class="info-general phone-sale">TỔNG ĐÀI BÁN HÀNG</P>
                        <p class="sdt-sl">1900633349</p>
                        <p class="info-mota">(Từ 8:30 - 21:30 mỗi ngày)</p>

                    </div>
                </div>
                <div class="detail-table">
                <table class="table table-striped tb-if">
                    <tbody className="fn-ttif">
                        <tr>
                            <th className="row tt-if">Mã sản phẩm</th>
                            <td>
                                '.$row['idSP'].'
                            </td>
                        </tr>
                        <tr>
                            <th className="row">Kiểu dáng</th>
                            <td>
                                '.$row['kieudang'].'
                            </td>
                        </tr>
                        <tr>
                            <th className="row">Màu sắc</th>
                            <td>
                                '.$row['mausac'].'
                            </td>
                        </tr>
                        <tr>
                            <th className="row">Chât liệu</th>
                            <td>
                                '.$row['chatlieu'].'
                            </td>
                        </tr>
                        <tr>
                            <th className="row">Số lần mua</th>
                            <td>
                                '.$row['solanmua'].'
                            </td>
                        </tr>
                        <tr>
                            <th className="row">Ngày phát hành</th>
                            <td>
                                '.$row['ngayphathanh'].'
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="detail-pro">
                <div class="detail-title">
                    <h3 class="txt-detail">Mô tả sản phẩm</h3>
                </div>
                <div class="detail">
                    <div class="detail-product">
                        '.$row['mota'].'
                    </div>
                    <div class="detail-img">
                        <img src="images/'.$row['hinhanh'].'">
                    </div>
                </div>
            </div>
            </div>
        </div>
    ';
    }
?>

