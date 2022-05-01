
<?php
      
        if(isset($_GET['act']))
        {
            if($_GET['act']=="delete")
            {
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
?>