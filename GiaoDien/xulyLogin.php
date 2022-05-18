<?php
session_start();
    include_once '../DataProvider.php';
    $sql = "SELECT * FROM taikhoan WHERE tendangnhap='".$_GET['tendangnhap']."' AND matkhau='".$_GET['matkhau']."'";
    $result = DataProvider::executeQuery($sql);

    
        if (mysqli_num_rows($result) > 0){
            $_SESSION['user'] = $_GET['tendangnhap'];
            $_SESSION['checklogin'] = 1;
            while($row = mysqli_fetch_array($result))
            {
                if($row['idQuyen'] == 3){
                    $_SESSION['iduser'] = $row['idUser'];
                    header('location:../index.php');
                }
                    
                else if($row['idQuyen'] == 1 || $row['idQuyen'] == 2){
                    header('location:../ad/index.php');
                    $_SESSION['Quyen'] = $row['idQuyen'];
                }
                    
            }
        }
        else {
            // header('location:login.php');
            
            echo'
                <script>
                    
                    alert("Sai tên đăng nhập hoặc mật khẩu");
                    
                    location.replace("login.php");
                </script>
                
            ';

                }
?>