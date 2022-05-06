
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';

    $sql = "SELECT * FROM sanpham ";
    $result = DataProvider::executeQuery($sql);

    echo'
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Quản lý sản phẩm</p>
                </div>
            </div>
            <div class="row table-sp">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Hành động</th>
                <th scope="col">Mã sp</th>
                <th scope="col">Tên</th>
                <th scope="col">Loại</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">kiểu dáng</th>
                <th scope="col">màu sắc</th>
                <th scope="col">chất liệu</th>
                <th scope="col">Ngày phát hành</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Hiển thị</th>
                <th scope="col">Mô tả</th>
              </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo '
              <tr>
                <td>
                    <a href="index.php?id='.$row['idSP'].'&act=editpro">Sửa</a>
                    <a href="index.php?id='.$row['idSP'].'&act=delete">Xóa</a>
                </td>
                <td>'.$row['idSP'].'</td>
                <td>'.$row['ten'].'</td>';
                if ($row['idloai'] ==1 )
                  echo '<td>Nike</td>';
                else if ($row['idloai'] ==2 )
                  echo '<td>Vans</td>';
                else if ($row['idloai'] ==3 )
                  echo '<td>Adidas</td>';
                else if ($row['idloai'] ==4 )
                  echo '<td>Converse</td>';
                else if ($row['idloai'] ==5 )
                  echo '<td>Balenciaga</td>';
                echo '
                <td>'.$row['soluong'].'</td>
                <td>'.currency_format($row['gia']).'</td>
                <td>'.$row['kieudang'].'</td>
                <td>'.$row['mausac'].'</td>
                <td>'.$row['chatlieu'].'</td>
                <td>'.$row['ngayphathanh'].'</td>
                <td>'.$row['hinhanh'].'</td>
                <td>'.$row['hienthi'].'</td>
                <td>'.$row['mota'].'</td>
              </tr>
              ';
            }
            echo '
            </tbody>
          </table>
            </div>
        </div>
    ';
?>