<link type="text/css" rel="stylesheet" href="../css/register.css">
<script src="../javascript/register.js"></script>
<div class="register-form">
    <div class="register-container">
        <div class="register-title">Registration</div>
        <div id="note"></div>
        <form action="" onsubmit="return check_register();">
            <div class="user-details">
                <div class="reg-input-box">
                    <span class="details">Họ và tên</span>
                    <input type="text" id="reg-fullname" name="reg-fullname" placeholder="Nhập họ tên đầy đủ" required>
                </div>
                <div class="reg-input-box">
                    <span class="details">Tên Đăng Nhập</span>
                    <input type="text" id="reg-name" name="reg-name" placeholder="Nhập tên đăng nhập" required>
                </div>
                <div class="reg-input-box">
                    <span class="details">Địa chỉ</span>
                    <input type="text" id="reg-address" name="reg-address" placeholder="Nhập địa chỉ đang cư trú" required>
                </div>
                
                <div class="reg-input-box">
                    <span class="details">Mật khẩu</span>
                    <input type="password" id="reg-password" name="reg-password" placeholder="Nhập mật khẩu" required>
                </div>     
                <div class="reg-input-box">
                    <span class="details">Gmail</span>
                    <input type="email" id="reg-mail" name="reg-mail" placeholder="Nhập địa chỉ gmail" required>
                </div>
                 <div class="reg-input-box">
                    <span class="details">Xác nhận mật khẩu</span>
                    <input type="password" id="reg-repassword" placeholder="Nhập lại mật khẩu" required>
                </div>
                <div class="reg-input-box">
                    <span class="details">Số Điện Thoại</span>
                    <input type="text" id="reg-phone" name="reg-phone"placeholder="Nhập số điện thoại" required>
                </div>
            </div>
            <div class="register-button">
                <input type="submit" value="Đăng ký" onclick="check_register();">
            </div>
            <div class="register-bottom-text">
                <p class="reg-text1">Đã sở hữu tài khoản ?</p>
                <a href="login.php"><p class="reg-text2">Đăng nhập</p></a>
            </div>
            
        </form>
    </div>
</div>

