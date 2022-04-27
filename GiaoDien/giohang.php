<?php
    if(!isset($_SESSION['giohang'])){ 
        echo '<p>Giỏ hàng trống</p>';
    }
    else{
        echo
        '<div class="show-cart">
            <div><h1>Giỏ Hàng</h1></div>
            <table border="1">
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Màu</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Xóa</th>
           </tr>';
           for($i=0;$i < sizeof($_SESSION['giohang']);$i++){
                echo
                '<tr>
                    <th>SP-'.$_SESSION['giohang'][$i][0].'</th>
                    <th>'.$_SESSION['giohang'][$i][1].'</th>
                    <th>'.$_SESSION['giohang'][$i][2].'</th>
                    <th>'.$_SESSION['giohang'][$i][3].'</th>
                    <th>'.$_SESSION['giohang'][$i][4].'</th>
                    <th>'.$_SESSION['giohang'][$i][5].'</th>
                    <th>'.$_SESSION['giohang'][$i][6].'</th>
                </tr>';
           }
           echo 
           '</table>
        </div>

        <div class="info-cart">
            <div><h1>Thông tin giao hàng</h1></div>
            <div class="insert-info-cart">
                <input type="text" name="inf-name" placeholder="Nhập tên người nhận">
                <input type="text" name="inf-email" placeholder="Email">
                <input type="text" name="inf-phone" placeholder="Số điện thoại">
                <input type="text" name="inf-address" placeholder="Địa chỉ nhận hàng">
                <input type="text" placeholder="Ghi chú">
            </div>
        </div>';
    }
    
?>

        
        
        