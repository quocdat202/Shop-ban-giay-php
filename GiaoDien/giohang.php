<?php
include_once 'GiaoDien/format_price.php';
    if(!isset($_SESSION['giohang'])){ 
        echo '
        <div>
        <img class="empty-cart" src="images/empty-bags.png"/>
        <div class="empty-cart-div"><a href="index.php">Quay Lại</a></div>
        </div>';
    }
    else{
        $total =0;
        echo
        '<div class="show-cart">
            <div><h1 class="cart-title">Giỏ Hàng</h1></div>
            <table border="1">
            <tr style="background:#f2f2f2;">
                <th>ID</th>
                <th class="img-title-cart">Ảnh</th>
                <th>Tên</th>
                <th>Màu</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Xóa</th>
           </tr>';
           for($i=0;$i < sizeof($_SESSION['giohang']);$i++){
                $tt=$_SESSION['giohang'][$i][6]*$_SESSION['giohang'][$i][5];
                $total+=$tt;
                echo
                '<tr >
                    <th class="fontweight500">SP-'.$_SESSION['giohang'][$i][0].'</th>
                    <th><img class="cart-img" src="images/'.$_SESSION['giohang'][$i][1].'"/></th>
                    <th class="fontweight500">'.$_SESSION['giohang'][$i][2].'</th>
                    <th class="fontweight500">'.$_SESSION['giohang'][$i][3].'</th>
                    <th class="fontweight500">'.$_SESSION['giohang'][$i][4].'</th>
                    <th class="fontweight500">'.$_SESSION['giohang'][$i][5].'</th>
                    ';
                if($_SESSION['giohang'][$i][7] == 2)
                    echo '
                        <th class="fontweight500">'.currency_format($_SESSION['giohang'][$i][6]*0.65).'</th>

                    ';
                else
                    echo '
                        <th class="fontweight500">'.currency_format($_SESSION['giohang'][$i][6]).'</th>
                    ';
                echo '
                    <th class="fontweight500"><a href="GiaoDien/AddCart.php?del='.$i.'" style="color:red;font-size:22px">X</a></th>
                </tr>';
           }
           echo
           '</table>
        </div>

        <div class="info-cart">
            <div><h1 class="cart-title">Thông tin giao hàng</h1></div>
            <div class="cart-bottom">
                <div class="insert-info-cart">
                    <input type="text" name="inf-name" placeholder="Nhập tên người nhận" class="cart-input-info1">
                    <input type="text" name="inf-email" placeholder="Email" class="cart-input-info2">
                    <input type="text" name="inf-phone" placeholder="Số điện thoại" class="cart-input-info3">
                    <input type="text" name="inf-address" placeholder="Địa chỉ nhận hàng" class="cart-input-info1">
                    <input type="text" placeholder="Ghi chú" class="cart-input-info4" >
                    <p class="cart-notice2">Nếu có bất kì thắc mắc xin vui lòng liên hệ Facebook hoặc @instagram để được bọn tớ giải đáp .MWC rất cảm ơn vì bạn đã ủng hộ bọn tớ, chúc bạn một năm mới thật nhiều niềm vui và may mắn :D</p>
                </div>
                <div class="cart-buy-area">
                    <div class="ThanhToan">
                        <p class="TT-title">Tóm tắt đơn hàng</p>
                        <table>
                            <tr>
                                <td>Thành tiền<td>
                                <td class="text-right" >'.currency_format($total*0.65).'<td>
                            <tr>
                            <tr>
                                <td>Phí vận chuyển<td>
                                <td class="text-right">0đ<td>
                            <tr>';
                            echo'
                            <tr>
                                <td>Tổng cộng<td>
                                <td class="text-right">'.currency_format($total*0.65).'<td>
                            <tr>
                        </table>
                        <h3 class="cart-notice1">
                            MWC áp dụng phí vận chuyển 0 VND cho toàn quốc . Bạn vui lòng KIỂM TRA email sau khi đặt hàng thành công và CHỜ NHẬN HÀNG.
                        </h3>
                        <input type="submit" value="Hoàn tất đơn hàng" class="input-cart-DH">
                    </div>
                    
                </div>
            </div>
        </div>';
    }
    
?>

        
        
        