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
    $sql = "SELECT sanpham.ten ,hinhanh,sanpham.gia,donhang.ngaydathang,tentheloai,chitietdonhang.idSP,sum(chitietdonhang.soluong)
     FROM `chitietdonhang`,`donhang`,`sanpham`,`theloai` WHERE sanpham.idloai=theloai.idloai and chitietdonhang.idSP=sanpham.idSP
      and chitietdonhang.idDH=donhang.idDH ".$date." GROUP by idSP ORDER by sum(chitietdonhang.soluong) desc".$top;
    $result = DataProvider::executeQuery($sql);
    echo'
    
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Thong ke san pham</p>
                </div>
            </div>
            <div class="DH-input-date">
            <form action="index.php?act=thongke" method="GET" onsubmit="return checkdate();">
            <div>
                <label>Top san pham ban chay</label>
                <input type="number" name="top" value="5"></input>
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
                <th scope="col">TenSP</th>
                <th scope="col">Hinh anh</th>
                <th scope="col">gia</th>
                <th scope="col">Ngay dat hang</th>
                <th scope="col">Ten the loai</th>
                <th scope="col">idSP</th>
                <th scope="col">So Luong</th>
              </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo '
              <tr>
                
                <td>'.$row['ten'].'</td>
                <td>'.$row['hinhanh'].'</td>
                <td>'.$row['gia'].'</td>
                <td>'.$row['ngaydathang'].'</td>
                <td>'.$row['tentheloai'].'</td>
                <td>'.$row['idSP'].'</td>    
                <td>'.$row['sum(chitietdonhang.soluong)'].'</td>           
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
