<?php
    session_start();
    include_once '../DataProvider.php';
    if(isset($_SESSION['checklogin'])){
        if($_SESSION['checklogin']==1){
            $idDH;
            $date = date('Y/m/d', time());
    // ==================  insert vào đơn hàng  =============================
        for($i=0;$i < sizeof($_SESSION['giohang']);$i++){
            $sale = $_SESSION['giohang'][$i][7];
            if($sale == 2){ 
            $gia = $_GET['total'] * 0.65;
            $sql = "insert into donhang(idKH,ngaydathang,tennguoinhan,diachigiaohang,tongtien,trangthai,ghichu)
                    values
                    (
                    '".$_SESSION['iduser']."',
                    '".$date."',
                    '".$_GET['inf-name']."',
                    '".$_GET['inf-address']."',
                    '".$gia."',
                    '0',
                    ''
                    )";
            }
            else
            $sql = "insert into donhang(idKH,ngaydathang,tennguoinhan,diachigiaohang,tongtien,trangthai,ghichu)
                    values
                    (
                    '".$_SESSION['iduser']."',
                    '".$date."',
                    '".$_GET['inf-name']."',
                    '".$_GET['inf-address']."',
                    '".$_GET['total']."',
                    '0',
                    ''
                    )";
        }
            $result = DataProvider::executeQuery2($sql);
            $sql2="select * from donhang order by idDH DESC LIMIT 1";
            $result2=DataProvider::executeQuery($sql2);
    // ==================  insert vào chi tiết đơn hàng  =============================
            while($row=mysqli_fetch_array($result2))
                $idDH = $row['idDH'];
                for($i=0;$i < sizeof($_SESSION['giohang']);$i++){
                    $sale = $_SESSION['giohang'][$i][7];
                    if($sale == 2){
                    $gia = $_SESSION['giohang'][$i][6]*0.65;
                    $sql3="insert into chitietdonhang(idDH,idSP,Size,soluong,gia)
                    values
                    (
                    '".$idDH."',
                    '".$_SESSION['giohang'][$i][0]."',
                    '".$_SESSION['giohang'][$i][4]."',
                    '".$_SESSION['giohang'][$i][5]."',
                    '".$gia."'
                    )";
                    }
                    else
                        $sql3="insert into chitietdonhang(idDH,idSP,Size,soluong,gia)
                        values
                        (
                        '".$idDH."',
                        '".$_SESSION['giohang'][$i][0]."',
                        '".$_SESSION['giohang'][$i][4]."',
                        '".$_SESSION['giohang'][$i][5]."',
                        '".$_SESSION['giohang'][$i][6]."'
                        )";
                    $result3=DataProvider::executeQuery2($sql3);
                }
    // ==============  Trừ số lượng trng bảng sản phẩm  =============================
                for($i=0;$i < sizeof($_SESSION['giohang']);$i++){
                    $idSP;
                    $sql4="select * from sanpham where idSP='".$_SESSION['giohang'][$i][0]."'";
                    $result4=DataProvider::executeQuery($sql4);
                    while($row=mysqli_fetch_array($result4))
                    {   $soluongmoi=$row['soluong']-$_SESSION['giohang'][$i][5];
                        $sql5=" update sanpham 
                            set soluong=".$soluongmoi."
                            where idSP = '".$_SESSION['giohang'][$i][0]."'";
                        echo $sql5;
                        $result5=DataProvider::executeQuery2($sql5);
                    }
                    
                }
            unset($_SESSION['giohang']);
            header('location:../index.php');
            }
        else{
            header('location:../index.php?act=cart');
            echo'<script>alert("Bạn chưa đăng nhập");</script>';
        }
        
    }
    else{
        header('location:../index.php?act=cart');
        echo'<script>alert("Bạn chưa đăng nhập");</script>';
    }
?>