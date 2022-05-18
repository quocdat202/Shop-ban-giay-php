
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';

    $sql = "SELECT * FROM taikhoan ";
    $sort="ASC";
    if(isset($_GET['sort'])){
      if($_GET['sort']=="ASC")
        $sort="DESC";
      else
        $sort="ASC";
      $sql=$sql."Order by ".$_GET['col']." ".$sort;
    }
    $result = DataProvider::executeQuery($sql);  
    echo'
        <div class="container">
            <div class="row title-table-row">
                <div class="title">
                    <p class="p-table-row">Quản lý tài khoản</p>
                </div>
            </div>
            <div class="addacc">
              <a href="index.php?act=themtk"class="btn btn-primary">Thêm tài khoản</a>
            </div>
            <div class="row table-sp">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Hành động</th>
                <th scope="col"><a href="index.php?act=qltk&sort='.$sort.'&col=idUser">Mã tài khoản</a></th>
                <th scope="col"><a href="index.php?act=qltk&sort='.$sort.'&col=tendangnhap">Tên đăng nhập</a></th>
                <th scope="col"><a href="index.php?act=qltk&sort='.$sort.'&col=matkhau">Mật khẩu</a></th>
                <th scope="col"><a href="index.php?act=qltk&sort='.$sort.'&col=idQuyen">Quyền</a></th>
              </tr>
            </thead>
            <tbody>
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo '
              <tr>
                <td>
                    <a href="index.php?id='.$row['idUser'].'&act=editacc">Sửa</a>
                    <a href="index.php?id='.$row['idUser'].'&act=del">Xóa</a>
                </td>
                <td>'.$row['idUser'].'</td>
                <td>'.$row['tendangnhap'].'</td>
                <td>'.$row['matkhau'].'</td>';
                if ($row['idQuyen']==1)
                  echo '<td>Admin</td>';
                else if ($row['idQuyen']==2)
                  echo '<td>Nhân viên</td>';
                else
                  echo '<td>Khách hàng</td>';
              echo '
              </tr>
              ';
            }
            echo '
            </tbody>
          </table>
            </div>
        </div>
    ';
?>