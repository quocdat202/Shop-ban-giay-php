
<?php
include_once 'js/thongbao.js';

        if(isset($_GET['act']))
        {
            if($_GET['act']=="delete")
            {
                ConfirmDelete();
                include_once('../DataProvider.php');
                $sql="Delete from sanpham where idSP = '".$_GET['id']."' ";
                DataProvider::executeQuery2($sql);
                echo '<script> location.replace("index.php?act=qlsp"); </script>';
                
            }
                
        }
        if (isset($_POST['btnSave']))
        {
            include_once('../DataProvider.php');

            $idSP = $_POST['idSP'];
            $ten = $_POST['ten'];
            $idloai = $_POST['idloai'];
            $soluong = $_POST['soluong'];
            $gia = $_POST['gia'];
            $kieudang = $_POST['kieudang'];
            $mausac = $_POST['mausac'];
            $chatlieu = $_POST['chatlieu'];
            $ngayphathanh = $_POST['ngayphathanh'];
            $hinhanh = $_POST['hinhanh'];
            $hienthi = $_POST['hienthi'];
            $mota = $_POST['mota'];
        
        $sql="
        UPDATE sanpham
        SET ten = '$ten'         , 
            idloai = '$idloai'         , 
            soluong= '$soluong' , 
            gia='$gia',
            kieudang='$kieudang',
            mausac='$mausac',
            chatlieu='$chatlieu',
            ngayphathanh='$ngayphathanh',
            hinhanh='$hinhanh',
            hienthi='$hienthi',
            mota='$mota'
        WHERE idSP = ' $idSP' 
        ";
        DataProvider::executeQuery2($sql);
        
        echo '<script> location.replace("index.php?act=qlsp"); </script>';
        }

        if (isset($_POST['btnthem']))
        {
            include_once('../DataProvider.php');
  
            $idSP = $_POST['idSP'];
            $ten = $_POST['ten'];
            $idloai = $_POST['idloai'];
            $soluong = $_POST['soluong'];
            $gia = $_POST['gia'];
            $kieudang = $_POST['kieudang'];
            $mausac = $_POST['mausac'];
            $chatlieu = $_POST['chatlieu'];
            $ngayphathanh = $_POST['ngayphathanh'];
            $hinhanh = $_POST['hinhanh'];
            $hienthi = $_POST['hienthi'];
            $mota = $_POST['mota'];
        
        $sql="
          INSERT INTO sanpham (ten, idloai, soluong, gia, mota, kieudang, mausac, chatlieu, ngayphathanh, hinhanh, hienthi)
          VALUES ('$ten','$idloai','$soluong','$gia','$mota', '$kieudang', '$mausac','$chatlieu','$ngayphathanh','$hinhanh','$hienthi');
        ";
        DataProvider::executeQuery2($sql);
        echo '<script> location.replace("index.php?act=qlsp"); </script>';
        }
?>