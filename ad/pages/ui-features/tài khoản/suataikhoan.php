
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';

    $sql = "SELECT * FROM taikhoan WHERE idUser='".$_GET['id']."'";
    $result = DataProvider::executeQuery($sql);

    echo'
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Sửa tài khoản</p>
                </div>
            </div>
            <div class="row table-sp">
            <form class="form-edit" action="index.php?act=edittaikhoan" method="post">
            ';
            while($row = mysqli_fetch_array($result))
            {
            echo'
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="idUser" type="text" class="form-control" value="'.$row['idUser'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tên đăng nhập</span>
                    <input name="tendangnhap" type="text" class="form-control"  value="'.$row['tendangnhap'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Mật khẩu</span>
                    <input name="matkhau" type="text" class="form-control"  value="'.$row['matkhau'].'">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Quyền</span>
                    <select name="idQuyen" class="form-select" aria-label="Default select example">';
                        if ($row['idQuyen']==1)
                            echo  ' <option value="1" selected>Admin</option>
                                    <option value="2">Nhân viên</option>
                                    <option value="3">Khách hàng</option>
                            ';
                        else if ($row['idQuyen']==2)
                            echo '  <option value="2" selected>Nhân viên</option>
                                    <option value="1">Admin</option>
                                    <option value="3">Khách hàng</option>
                            ';  
                        else 
                            echo '  <option value="3" selected>Khách hàng</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Nhân viên</option>
                            ';
                        echo'
                    </select>
                </div>
               
            ';
            }
            echo '
                <div>
                    <input type="submit" name="Saveacc" class="btn btn-primary" value="Lưu">
                </div>
            </form>
                
            </div>
        </div>
    ';
?>