<?php
    include_once 'DataProvider.php';
    $sql = "SELECT * FROM donhang WHERE idKH =".$_SESSION['iduser'];
    $result = DataProvider::executeQuery($sql);
    echo
        '<div class="show-cart">
            <div><h1 class="cart-title">Lịch Sử Đơn Hàng</h1></div>
            <table border="1">
            <thead>
            <tr style="background:#f2f2f2;">
                <th>Hành động</th>
                <th>Ngày đặt hàng</th>
                <th>Tên Người nhận</th>
                <th>Địa chỉ</th>
                <th>Tổng Hoá Đơn</th>
                <th>Trạng Thái</th>
           </tr>
           </thead>
           <tbody>';
           while($row = mysqli_fetch_array($result)){
            echo '
                  <tr>
                    <td>
                        <a href="index.php?act=ctdh&cthd_id='.$row['idDH'].'">Xem</a>
                    </td>
                    <td>'.$row['ngaydathang'].'</td>
                    <td>'.$row['tennguoinhan'].'</td>
                    <td>'.$row['diachigiaohang'].'</td>
                    <td>'.$row['tongtien'].'</td>';
                    if($row['trangthai']==0)
                        echo'<td>Chưa xác nhận</td>';
                    else if($row['trangthai']==1)
                        echo'<td>Đã giao</td>';
                    echo'
                  </tr>
                  ';
            
        }
         echo  '</tbody>
           </table>';
?>