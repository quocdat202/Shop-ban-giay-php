
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';
include_once 'loaisanpham.php';


    $sql = "SELECT * FROM sanpham WHERE idSP='".$_GET['id']."'";
    $result = DataProvider::executeQuery($sql);

    echo'
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Sửa sản phẩm</p>
                </div>
            </div>
            <div class="row table-sp">
            <form class="form-edit" action="index.php?act=edit" method="post">
            ';
            while($row = mysqli_fetch_array($result))
            {
            $loai = $row['idloai'];
            echo'
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="idSP" type="text" class="form-control" value="'.$row['idSP'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tên</span>
                    <input name="ten" type="text" class="form-control" aria-label="'.$row['ten'].'" value="'.$row['ten'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Loại</span>
                    <select name="idloai" class="form-select" aria-label="Default select example">';
                    loaisanpham::theloaisp($loai);
                echo '
                    </select>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Số lượng</span>
                    <input name="soluong" type="text" class="form-control" aria-label="'.$row['soluong'].'" value="'.$row['soluong'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Giá</span>
                    <input name="gia" type="text" class="form-control" aria-label="'.$row['gia'].'" value="'.$row['gia'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Kiểu dáng</span>
                    <input name="kieudang" type="text" class="form-control" aria-label="'.$row['kieudang'].'" value="'.$row['kieudang'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Màu sắc</span>
                    <input name="mausac" type="text" class="form-control" aria-label="'.$row['mausac'].'" value="'.$row['mausac'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Chất liệu</span>
                    <input name="chatlieu" type="text" class="form-control" aria-label="'.$row['chatlieu'].'" value="'.$row['chatlieu'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Ngày phát hành</span>
                    <input name="ngayphathanh" type="text" class="form-control" aria-label="'.$row['ngayphathanh'].'" value="'.$row['ngayphathanh'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Hình ảnh</span>
                    <input name="hinhanh" type="text" class="form-control" aria-label="'.$row['hinhanh'].'" value="'.$row['hinhanh'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Hiển thị</span>
                    <input name="hienthi" type="text" class="form-control" aria-label="'.$row['hienthi'].'" value="'.$row['hienthi'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Mô tả</span>
                    <input name="mota" type="text" class="form-control" aria-label="'.$row['mota'].'" value="'.$row['mota'].'">
                </div>
            ';
            }
            echo '
                <div>
                    <input type="submit" name="btnSave" class="btn btn-primary" value="Lưu">
                </div>
            </form>
                
            </div>
        </div>
    ';
?>