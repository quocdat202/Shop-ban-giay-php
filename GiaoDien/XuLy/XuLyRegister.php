<?php
    include_once '../../DataProvider.php';
    // =============== Add vào tài khoản
    $sql="insert into taikhoan(tendangnhap,matkhau,idQuyen) 
    values('".($_GET['reg-name'])."','".($_GET['reg-password'])."',3)";
    $Add=DataProvider::executeQuery2($sql);
    // =============== Add vào khách hàng
    $sql2="select idUser from taikhoan where tendangnhap='".($_GET['reg-name'])."'";
    $result=DataProvider::executeQuery($sql2);
    while($id=mysqli_fetch_array($result))
        $sql3="insert into khachhang(idUser,hoten,diachi,dienthoai,email,KHxau) 
        values('".$id['idUser']."','".($_GET['reg-fullname'])."','".($_GET['reg-address'])."','".($_GET['reg-phone'])."','".($_GET['reg-mail'])."',0)";
    $Add2=DataProvider::executeQuery2($sql3);  
    header('location:../login.php');
?>
