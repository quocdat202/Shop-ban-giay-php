
<link type="text/css" rel="stylesheet" href="../css/DangNhap1.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
<body>
    <header>
        <h1>Đăng nhập</h1>
    </header>
    <main>
        <form id="login_form" class="form_class" action="xulyLogin.php" >
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" name="tendangnhap" type="text" placeholder="Tên đăng nhập" autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" name="matkhau" type="password" placeholder="Mật khẩu">
                <button class="submit_class" type="submit" form="login_form" >Đăng nhập</button>
            </div>
            <div class="info_div">
                <p>Chưa có tài khoản: <a href="register.php">Đăng ký</a></p>
            </div>
        </form>
    </main>
    <footer>
    Copyright © 2012. Designed by
        <a href="#"> Team SGU</a>. All rights reseved
    </footer>
</body>

