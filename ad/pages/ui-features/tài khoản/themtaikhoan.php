
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';

    echo'
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Thêm tài khoản</p>
                </div>
            </div>
            <div class="row table-sp">
            <form class="form-edit" action="index.php?act=themtaikhoan" method="post">

                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="idUser" type="text" class="form-control" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tên đăng nhập</span>
                    <input name="tendangnhap" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Mật khẩu</span>
                    <input name="matkhau" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Quyền</span>
                    <select name="idQuyen" class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Admin</option>
                        <option value="2">Nhân viên</option>
                        <option value="3">Khách hàng</option>
                    </select>
                </div>
                <div>
                    <input type="submit" name="themacc" class="btn btn-primary" value="Lưu">
                </div>
            </form>
                
            </div>
        </div>
    ';
?>