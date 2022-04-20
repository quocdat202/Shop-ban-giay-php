<?php
session_start();
    include_once '../DataProvider.php';
    $sql = "SELECT * FROM taikhoan WHERE tendangnhap='".$_GET['tendangnhap']."' AND matkhau='".$_GET['matkhau']."'";
    $result = DataProvider::executeQuery($sql);

    
        if (mysqli_num_rows($result) > 0){
            $_SESSION['user'] = $_GET['tendangnhap'];
            while($row = mysqli_fetch_array($result))
            {
                if($row['idQuyen'] == 3)
                    header('location:../index.php');
                else if($row['idQuyen'] == 1)
                    header('location:../ad/index.php');
            }
        }
        else
            header('location:login.php');
            echo'
                <script>
                    function thongbao(){
                        alert("Sai tên đăng nhập hoặc mật khẩu");
                    }
                    setTimeout(thongbao,3000);
                </script>
            ';
    
?>