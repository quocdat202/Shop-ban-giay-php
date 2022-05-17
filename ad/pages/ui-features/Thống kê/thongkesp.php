<?php
    include_once '../DataProvider.php';
    include_once '../GiaoDien/format_price.php';
    $date ="";
    if(isset($_GET['date_1']) && isset($_GET['date_2'])){
        if($_GET['date_1']=="" && $_GET['date_2']=="")
        $date ="";
        else
        $date = " and donhang.ngaydathang BETWEEN '".$_GET['date_1']."' and '".$_GET['date_2']."'";

    }
    $top = "";
    if(isset($_GET['top'])){
        $top = " Limit ".$_GET['top'];
    }
    $sql = "SELECT sanpham.ten ,hinhanh,sanpham.gia,tentheloai,chitietdonhang.idSP,sum(chitietdonhang.soluong)
     FROM `chitietdonhang`,`donhang`,`sanpham`,`theloai` WHERE sanpham.idloai=theloai.idloai and chitietdonhang.idSP=sanpham.idSP
      and chitietdonhang.idDH=donhang.idDH ".$date." GROUP by idSP ORDER by sum(chitietdonhang.soluong) desc".$top;
    $result = DataProvider::executeQuery($sql);
    echo'
    
        <div class="container">
            <div class="row title-table-row">
                <div class="title">
                    <p class="p-table-row">THỐNG KÊ SẢN PHẨM BÁN CHẠY</p>
                </div>
            </div>
            <div class="DH-input-date">
            <form action="index.php?act=thongke" method="GET" onsubmit="return checkdate();">
            <div>
                <label>Top sản phẩm bán chạy</label>
                <input type="number" name="top" value="10"></input>
            </div>
              <input type="date" id="date_1" name="date_1">
              <input type="date" id="date_2" name="date_2">
              <input type="hidden" name="act" value="thongke">
              <input type="submit" value="Lọc">
            </form> 
            </div>
            <div class="row table-sp">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Hình ảnh</th>
                <th scope="col">ID sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
              </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo '
              <tr>
                <td><img class="cart-img" src="../images/'.$row['hinhanh'].'"/></td>
                <td>'.$row['idSP'].'</td>   
                <td>'.$row['ten'].'</td>
                <td>'.strtoupper($row['tentheloai']).'</td>
                <td>'.currency_format($row['gia']).'</td>            
                <td>'.$row['sum(chitietdonhang.soluong)'].'</td>           
              </tr>
              ';
            }
            echo '
            </tbody>
          </table>
        </div>
    ';
?>
