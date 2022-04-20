<link type="text/css" rel="stylesheet" href="../css/DangNhap.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
<div class="container jumbotron bg-warning">
    <h2 class="text-center text-danger">Login Page</h2><br>    
        <div class="login">    
            <form id="login" method="get" action="xulyLogin.php">  
                <div class="form-group">
                    <label><b>User Name</b></label><span class="content">(*)</span>
                    <input type="text" name="tendangnhap" class="form-control" placeholder="Username">    
                </div>  
                
                <div class="form-group">
                    <label><b>Password</b></label><span class="content">(*)</span>    
                    <input type="Password" name="matkhau" class="form-control" placeholder="Password">  
                </div>      
                <button type="" class="btn btn-primary w-100"> Đăng nhập </button>      
                <div class="form-group">
                    <span>Remember me</span> 
                    <input type="checkbox" id="check"> 
                    Bạn chưa có tài khoản? Hãy chọn <a href="register.php">Đăng Ký</a>         
                </div>   
            </form>     
        </div>  
</div>

