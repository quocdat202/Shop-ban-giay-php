
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';

    if(isset($_GET['action']) && isset($_GET['cthd_id'])){
        $sql = "SELECT idDH,sanpham.idSP,Size,chitietdonhang.soluong,chitietdonhang.gia,hinhanh 
        FROM chitietdonhang,sanpham where idDH = '".$_GET['cthd_id']."' and chitietdonhang.idSP=sanpham.idSP";
        
        $result = DataProvider::executeQuery($sql);
    echo'
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Chi tiết đơn hàng DH-0'.$_GET['cthd_id'].'</p>
                </div>
            </div>
            <div class="row table-sp">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mã Đơn Hàng</th>
                <th scope="col">Mã Sản Phẩm</th>
                <th scope="col">Size</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
              </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo '
              <tr>
                <td>'.$row['hinhanh'].'</td>
                <td>DH0'.$row['idDH'].'</td>
                <td>KH0'.$row['idSP'].'</td>
                <td>'.$row['Size'].'</td>
                <td>'.$row['soluong'].'</td>
                <td>'.currency_format($row['gia']).'</td>
              </tr>
              ';
            }
            echo '
            </tbody>
          </table>
            </div>
        </div>
    ';
    }

?>