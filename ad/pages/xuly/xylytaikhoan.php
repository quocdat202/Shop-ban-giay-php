
<?php
      
      if(isset($_GET['act']) && isset($_GET['id']))
      {
          if($_GET['act']=="del" )
          {
              include_once('../DataProvider.php');
              $sql="Delete from taikhoan where idUser = '".$_GET['id']."' ";
              DataProvider::executeQuery2($sql);
              echo '<script> location.replace("index.php?act=qltk"); </script>';
          }
              
      }
     if (isset($_POST['Saveacc']))
      {
          include_once('../DataProvider.php');

          $idUser = $_POST['idUser'];
          $tendangnhap = $_POST['tendangnhap'];
          $matkhau = $_POST['matkhau'];
          $idQuyen = $_POST['idQuyen'];
      
      $sql="
      UPDATE taikhoan
      SET tendangnhap = '$tendangnhap'         , 
          matkhau = '$matkhau'         , 
          idQuyen= '$idQuyen' 
      WHERE idUser = ' $idUser' 
      ";
      echo $sql;

      DataProvider::executeQuery2($sql);
      echo '<script> location.replace("index.php?act=qltk"); </script>';
      }

      if (isset($_POST['themacc']))
      {
          include_once('../DataProvider.php');

          $idUser = $_POST['idUser'];
          $tendangnhap = $_POST['tendangnhap'];
          $matkhau = $_POST['matkhau'];
          $idQuyen = $_POST['idQuyen'];
      
      $sql="
        INSERT INTO taikhoan (tendangnhap, matkhau, idQuyen)
        VALUES ('$tendangnhap','$matkhau','$idQuyen');
      ";
      DataProvider::executeQuery2($sql);
      echo '<script> location.replace("index.php?act=qltk"); </script>';
      }
?>