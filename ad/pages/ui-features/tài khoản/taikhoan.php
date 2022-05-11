
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';

    $sql = "SELECT * FROM taikhoan ";
    $result = DataProvider::executeQuery($sql);

    echo'
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Quản lý tài khoản</p>
                </div>
            </div>
            <div class="row table-sp">
            <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Hành động</th>
                <th scope="col">Mã tài khoản</th>
                <th scope="col">Tên đăng nhập</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Quyền</th>
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