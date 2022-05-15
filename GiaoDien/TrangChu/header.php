<?php 
echo '<div class="home-tc">
      <section class="ftco-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light menu-top" id="ftco-navbar">
            <div class="container page">
                <a class="navbar-brand nav-home" href="index.php">Sneaker</a>
                <div class="social-media order-lg-last">
                    <p class="mb-0 d-flex">
                        <a href="https://www.facebook.com/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="mailto:mwcshop@gmail.com class="d-flex align-items-center justify-content-center"><span class="fa fa-envelope gmail"><i class="sr-only">Gmail</i></span></a>
                        <a href="https://www.instagram.com/" target="_blank" ta class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="https://www.youtube.com/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">Dribbble</i></span></a>
                    </p>
            </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
              </button>
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto mr-md-3">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Trang chủ</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Giới thiệu</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Bảo hành</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Bài viết</a></li>';
                    if(!isset($_SESSION['checklogin']))
                    echo '<li class="nav-item"><a href="GiaoDien/register.php" class="nav-link">Đăng ký</a></li>
                    <li class="nav-item"><a href="GiaoDien/login.php" class="nav-link">Đăng nhập</a></li>';
                    else                
                    echo '<li class="nav-item"><a href="index.php?act=history" class="nav-link">Lịch sử</a></li>
                    <li class="nav-item"><a href="GiaoDien/XuLy/Logout.php" class="nav-link">Đăng xuất</a></li>';
                    
                echo '</ul>
              </div>
            </div>
          </nav>
        </div>
      </section>';
    echo'
     <div class="container center-pg">
      <div class="center-page">
      <div class="logo-nav">
        <a href="index.php">
          <img src="images/logo.png" alt="logo" />
        </a>
      </div>
      <div class="menu-nav">
        <div class="navi-item">
          <ul>
            <li>
              <a href="index.php?act=sale">
                <div class="img-nav">
                  <img src="images/sale.png" />
                </div>
                <p>Siêu Sale</p>
              </a>
            </li>
            <li>
              <a href="index.php?idNameSP=Nike&act=XemSP&page=1">
                <div class="img-nav">
                  <img src="images/nike.png" />
                </div>
                <p>Nike</p>
              </a>
            </li>
            <li>
              <a href="index.php?idNameSP=Adidas&act=XemSP&page=1">
                <div class="img-nav">
                  <img src="images/Adidas.png" />
                </div>
                <p>Adidas</p>
              </a>
            </li>
            <li>
              <a href="index.php?idNameSP=Vans&act=XemSP&page=1">
                <div class="img-nav">
                  <img src="images/vans.png" />
                </div>
                <p>Vans</p>
              </a>
            </li>
            <li>
              <a href="index.php?idNameSP=Converse&act=XemSP&page=1">
                <div class="img-nav">
                  <img src="images/Converse.png" />
                </div>
                <p>Converse</p>
              </a>
            </li>
            <li>
              <a href="index.php?idNameSP=Balenciaga&act=XemSP&page=1">
                <div class="img-nav">
                  <img src="images/Balenciaga.png" />
                </div>
                <p>Balenciaga</p>
              </a>
            </li>
            <li class="ic-cart">
              <a class="icon-cart-a" href="index.php?act=cart">
                <img class="icon-cart-img" src="images/cart2.png" />';
              if(isset($_SESSION['giohang']))
              echo '<p class="icon-cart-number">('.sizeof($_SESSION['giohang']).')</p>';
              else
              echo '<p class="icon-cart-number">(0)</p>';
              echo'
              </a>
            </li>
          </ul>
        </div>
        <div class="nav-search">
          <form action="index.php?act=search" method="post" class="form-sr">
          <input type="hidden" name="page" value="1" />
            <input class="ip-search" name="query" placeholder="Bạn muốn tìm gì..." />
            <button type="submit" name="btnsearch" class="btn btn-search" ><img src="images/search.png" /></button>
          </form>
          <div class="phone-order">
            <i class="fa fa-phone phone-icon"></i>
            <div class="phone">
              <strong class="phones">ĐẶT HÀNG NHANH: </strong>
              <p class="phones">1900633349</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
      ';
?>