<link type="text/css" rel="stylesheet" href="../css/register.css">
<script src="../javascript/register.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<div class="register-form">
    <div class="register-container">
        <div class="register-title">Registration</div>
        <div id="note"></div>
        <form action="XuLy/XuLyRegister.php" id="RegisterForm"  method="get">
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
                <input id="reg-submit-btn" type="submit" value="Đăng ký" onclick="check_register();">
            </div>
            <div class="register-bottom-text">
                <p class="reg-text1">Đã sở hữu tài khoản ?</p>
                <a href="login.php"><p class="reg-text2">Đăng nhập</p></a>
            </div>
            
        </form>
    </div>
</div>

<script type="text/javascript">
    
    $(document).ready(function() {     
        $('#reg-name').on('blur',function(){
            var tendangnhap = $('#reg-name').val();
            $.ajax({
                url: "RegisterAjax.php",
                method: "GET",
                data:{tendangnhap:tendangnhap},
                success:function(data){
                    if(data=="name")
                    alert("Tên đăng nhập đã được sử dụng");
                    return false;
                }
            })   
        });
        $('#reg-phone').on('blur',function(){
            var sophone = $('#reg-phone').val();
            $.ajax({
                url: "RegisterAjax.php",
                method: "GET",
                data:{sophone:sophone},
                success:function(data){
                    if(data=="phone")
                    alert("Số điện thoại đã được sử dụng");
                    return false;
                }
            })   
        });
        $('#reg-mail').on('blur',function(){
            var email = $('#reg-mail').val();
            $.ajax({
                url: "RegisterAjax.php",
                method: "GET",
                data:{email:email},
                success:function(data){
                    if(data=="email")
                    alert("Email đã được sử dụng");
                    return false;
                }
            })   
        });
    })
    
</script>

<!-- <script type="text/javascript">
$(document).ready(function() {
    $('#reg-submit-btn').submit(function(e) {
        e.preventDefault();
        if(check_register()==true){
        $.ajax({
            type: "GET",
            url: "RegisterAjax.php",
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
                if (jsonData.success == "1")
                    alert("hi");
            }
       });
        }
     });
});
</script> -->
