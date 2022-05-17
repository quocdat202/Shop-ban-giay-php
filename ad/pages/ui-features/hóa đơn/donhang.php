
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';
    $string="";
    if(!isset($_GET['date_1']) && !isset($_GET['date_2']))
      $sql = "SELECT * FROM donhang ";
    else if(isset($_GET['date_1']) && isset($_GET['date_2']) && $_GET['act']='qldh'){
      $sql = "SELECT * FROM donhang where ngaydathang between '".$_GET['date_1']."' and '".$_GET['date_2']."'";
      $string ="&date_1=".$_GET['date_1']."&date_2=".$_GET['date_2'];
    }
      $sort="ASC";
      if(isset($_GET['sort'])){
        if($_GET['sort']=="ASC")
          $sort="DESC";
        else
          $sort="ASC";
        $sql=$sql."Order by ".$_GET['col']." ".$sort;
      }
    $result = DataProvider::executeQuery($sql);

    echo'
    
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Quản lý đơn hàng</p>
                </div>
            </div>';
            if(isset($_GET['date_1']) && isset($_GET['date_2']))
            echo '<p>Đơn hàng từ ngày '.$_GET['date_1'].' đến ngày '.$_GET['date_2'].'</p>';
            echo'
            <div class="DH-input-date">
            <form action="index.php?act=qldh" method="GET" onsubmit="return checkdate();">
              <input type="date" id="date_1" name="date_1">
              <input type="date" id="date_2" name="date_2">
              <input type="hidden" name="act" value="qldh">
              <input type="submit" value="Lọc">
            </form> 
            </div>
            <div class="row table-sp">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Hành động</th>
                <th scope="col"><a href="index.php?act=qldh&col=idDH&sort='.$sort.''.$string.'">Mã ĐH</a></th>
                <th scope="col"><a href="index.php?act=qldh&col=idKH&sort='.$sort.''.$string.'">Mã KH</a></th>
                <th scope="col"><a href="index.php?act=qldh&col=ngaydathang&sort='.$sort.''.$string.'">Ngày đặt hàng</a></th>
                <th scope="col"><a href="index.php?act=qldh&col=tennguoinhan&sort='.$sort.''.$string.'">Tên người nhận</a></th>
                <th scope="col"><a href="index.php?act=qldh&col=diachigiaohang&sort='.$sort.''.$string.'">Địa chỉ</a></th>
                <th scope="col"><a href="index.php?act=qldh&col=tongtien&sort='.$sort.''.$string.'">Tổng hóa đơn</a></th>
                <th scope="col"><a href="index.php?act=qldh&col=trangthai&sort='.$sort.''.$string.'">Trạng thái</a></th>
              </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo '
              <tr>
                <td>
                    <a href="index.php?act=ctdh&cthd_id='.$row['idDH'].'">Xem</a>
                    <a href="pages/ui-features/hóa đơn/xacnhandh.php?xacnhan_id='.$row['idDH'].'&status='.$row['trangthai'].'">
                      Xác nhận
                    </a>
                </td>
                <td>DH0'.$row['idDH'].'</td>
                <td>KH0'.$row['idKH'].'</td>
                <td>'.$row['ngaydathang'].'</td>
                <td>'.$row['tennguoinhan'].'</td>
                <td>'.$row['diachigiaohang'].'</td>
                <td>'.$row['tongtien'].'</td>';
                if($row['trangthai']==0)
                    echo'<td>Chưa xác nhận</td>';
                else if($row['trangthai']==1)
                    echo'<td>Đã xác nhận</td>';
                echo'
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

<script>
  function checkdate(){
    if(document.getElementById('date_1').value=="" || document.getElementById('date_2').value=="" ){
      alert("Vui lòng chọn ngày");
      return false;
    }
      return true;
  }
</script>