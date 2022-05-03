
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';

    echo'
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Thêm sản phẩm</p>
                </div>
            </div>
            <div class="row table-sp">
            <form class="form-edit" action="index.php?act=themsanpham" method="post">

                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="idSP" type="text" class="form-control" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Tên</span>
                    <input name="ten" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Mã loại</span>
                    <input name="idloai" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Số lượng</span>
                    <input name="soluong" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Giá</span>
                    <input name="gia" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Kiểu dáng</span>
                    <input name="kieudang" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Màu sắc</span>
                    <input name="mausac" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Chất liệu</span>
                    <input name="chatlieu" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Ngày phát hành</span>
                    <input name="ngayphathanh" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Hình ảnh</span>
                    <input name="hinhanh" type="text" class="form-control" aria-label="" >
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Hiển thị</span>
                    <input name="hienthi" type="text" class="form-control" aria-label="">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Mô tả</span>
                    <input name="mota" type="text" class="form-control" aria-label="" >
                </div>
    
                <div>
                    <input type="submit" name="btnthem" class="btn btn-primary" value="Lưu">
                </div>
            </form>
                
            </div>
        </div>
    ';
?>