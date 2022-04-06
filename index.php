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
	
	<link type="text/css" rel="stylesheet" href="css/style.css">
	<link type="text/css" rel="stylesheet" href="css/home1.css">
    <title>Shop giày</title>
</head>

<body>
    <div class="page-ctn">
        <div class="">
            <?php 
                require_once 'giaodien/header.php';
            ?>
            <div class="content">
                <?php
                    // require_once 'giaodien/LeftContent.php';
                    if (isset($_GET['act'])){
                        if ($_GET['act'] == "detailproduct")
                            require_once 'giaodien/detailproduct.php';
                    }
                    else
                        require_once 'giaodien/banner.php';
                ?>
                <?php 
                    if (isset($_GET['act'])){
                        if ($_GET['act'] == "detailproduct")
                            require_once 'giaodien/detailproduct.php';
                    }
                    else
                        require_once 'giaodien/center_content.php';
                ?>
            </div>
            <?php require_once 'giaodien/footer.php'; ?>
        </div>


        
    </div>
</body>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="store.js"></script>
</html>