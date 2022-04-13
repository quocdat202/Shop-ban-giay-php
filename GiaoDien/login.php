<?php 
    echo '
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="xulyLogin.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="tendangnhap" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="matkhau" id="Pass" placeholder="Password">    
        <br><br>    
        <button type="" id="log" > Đăng nhập </button>      
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form>     
</div>    
    ';
?>