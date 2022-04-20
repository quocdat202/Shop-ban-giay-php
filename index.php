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
	
	<link type="text/css" rel="stylesheet" href="css/style1.css">
	<link type="text/css" rel="stylesheet" href="css/home.css">
	<link type="text/css" rel="stylesheet" href="css/login.css">

    <title>Shop giày</title>
</head>

<body>
    <div class="page-ctn">
        <div class="">
            <?php 
                require_once 'giaodien/Trangchu/header.php';
            ?>
            <div class="content">
            <?php
                    // require_once 'giaodien/LeftContent.php';
                    // if (isset($_GET['act'])){
                    //     if ($_GET['act'] == "detailproduct")
                    //         require_once 'giaodien/detailproduct.php';
                    // }
                     if(isset($_GET['act'])){
                        if ($_GET['act'] == "XemSP")
                        require_once 'giaodien/TrangChu/center_content.php';
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
                    }
                    else 
                        require_once 'giaodien/TrangChu/center_content.php';
                ?>
            </div>
            <?php require_once 'giaodien/Trangchu/footer.php';  
                    echo $_SESSION['user'];
                    
            ?>
            
        </div>


        
    </div>
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="store.js"></script>
</html>