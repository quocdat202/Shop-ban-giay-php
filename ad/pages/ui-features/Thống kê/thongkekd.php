<?php
    include_once '../DataProvider.php';
    include_once '../GiaoDien/format_price.php';
    $date ="";
    if(isset($_GET['date_1']) && isset($_GET['date_2'])){
        if($_GET['date_1']=="" && $_GET['date_2']=="")
        $date ="";
        else
        $date = " and ngaydathang BETWEEN '".$_GET['date_1']."' and '".$_GET['date_2']."'";
    }
    $sql="SELECT tentheloai,sum(chitietdonhang.soluong)as sumsoluong, sanpham.gia,sum(chitietdonhang.soluong*chitietdonhang.gia)as tong  
    FROM `chitietdonhang`,`donhang`,`sanpham`,`theloai` 
    WHERE sanpham.idloai=theloai.idloai and chitietdonhang.idSP=sanpham.idSP and chitietdonhang.idDH=donhang.idDH ".$date." 
    GROUP by theloai.idloai";
    $result = DataProvider::executeQuery($sql);
    echo'
    
        <div class="container">
            <div class="row title-table-row">
                <div class="title">
                    <p class="p-table-row">THỐNG KÊ KINH DOANH</p>
                </div>
            </div>
            <div class="DH-input-date">
            <form action="index.php?act=thongke" method="GET" onsubmit="return checkdate();">
              <input type="date" id="date_1" name="date_1">
              <input type="date" id="date_2" name="date_2">
              <input type="hidden" name="act" value="tkkd">
              <input type="submit" value="Lọc">
            </form> 
            </div>
            <div class="row table-sp">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Thể loại</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Thành tiền</th>
              </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo '
              <tr>             
                <td>'.strtoupper($row['tentheloai']).'</td>
                <td>'.$row['sumsoluong'].'</td>
                <td>'.currency_format($row['gia']).'</td>
                <td>'.currency_format($row['tong']).'</td>         
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