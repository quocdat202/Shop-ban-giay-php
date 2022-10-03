<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
	<link href='https://cdn.jsdelivr.net/gh/startinhit/font-awesome/css/all.css' rel='stylesheet'/>
	<link type="text/css" rel="stylesheet" href="css/style1.css">
	<link type="text/css" rel="stylesheet" href="css/home.css">
	<!-- <link type="text/css" rel="stylesheet" href="css/footer.css"> -->
	<link type="text/css" rel="stylesheet" href="css/login.css">

    <title>Sneaker</title>
</head>

<body>

    <div class="page-ctn">
        <div class="">
            <?php 
                require_once 'giaodien/Trangchu/header.php';
            ?>
            <div class="content">
                <?php
                        if(isset($_GET['act'])){
                            if ($_GET['act'] == "XemSP")
                                require_once 'giaodien/TrangChu/center_content.php';

                            if($_GET['act'] == "sale")
                                require_once 'giaodien/SanPham/SanphamSale.php';
                        }
                        else if(!isset($_GET['act']))
                            require_once 'giaodien/TrangChu/banner.php';
                    ?>
                    <?php 
                        if (isset($_GET['act'])){
                            if ($_GET['act'] == "detailproduct")
                                require_once 'giaodien/detailproduct.php';

                            else if($_GET['act']== "cart")
                                require_once 'giaodien/giohang.php';
                            else if($_GET['act']== "history")
                                require_once 'giaodien/history.php';
                            else if($_GET['act']== "ctdh")
                                require_once 'giaodien/historyDetail.php';
                            
                            else if($_GET['act'] =="search")
                                require_once 'giaodien/TrangChu/search.php';
                        }
                        else 
                            require_once 'giaodien/TrangChu/center_content.php';

                        if(!isset($_GET['act']))
                            require_once 'giaodien/SanPham/SanphamSale.php';

                        if(!isset($_GET['act']))
                            require_once 'giaodien/TrangChu/trangblog.php';
                    ?>
            </div>
            <?php require_once 'giaodien/Trangchu/footer.php';  
                    // echo $_SESSION['iduser'];
                    
            ?>
            <button onclick="topFunction()" id="myBtn" title="Go to top">
                    <i class="fa fa-long-arrow-up"></i>
            </button>
        </div>


        
    </div>
</body>
<script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        // document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        
    }
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="store.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</html>