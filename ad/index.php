<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sneaker Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="css/vertical-layout-light/newstyle.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body>
  <div class="container-scroller">
   
    <div class="container-fluid page-body-wrapper">

    <?php

      include_once 'pages/ui-features/leftbanner.php'
    ?>

    <?php
    if(isset($_GET['act'])){
      if($_GET['act'] == "qlsp")
        include_once 'pages/ui-features/sản phẩm/sanpham.php';

      else if($_GET['act'] =="addproduct")
        include_once 'pages/ui-features/sản phẩm/themsanpham.php';

      else if($_GET['act'] =="editpro")
        include_once 'pages/ui-features/sản phẩm/suasanpham.php';

      else if($_GET['act'] =="delete" || $_GET['act'] == "edit" || $_GET['act'] == "themsanpham")      
        include_once 'pages/xuly/xulysp.php';

      else if($_GET['act'] =="qldh")
        include_once 'pages/ui-features/hóa đơn/donhang.php';
      else if($_GET['act'] =="ctdh")
        include_once 'pages/ui-features/hóa đơn/ctdh.php';
      else if($_GET['act'] == "qldm")
         include_once 'pages/ui-features/quyền/qlquyen.php';
      else if($_GET['act'] =="qltk")
        include_once 'pages/ui-features/tài khoản/taikhoan.php';
      else if($_GET['act'] =="thongke")
        include_once 'pages/ui-features/Thống kê/thongkesp.php';
      else if($_GET['act'] =="tkkd")
        include_once 'pages/ui-features/Thống kê/thongkekinhdoanh.php';

      else if($_GET['act'] =="themtk")
        include_once 'pages/ui-features/tài khoản/themtaikhoan.php';
      
      else if($_GET['act'] =="editacc")
        include_once 'pages/ui-features/tài khoản/suataikhoan.php';

      else if($_GET['act'] =="deleteacc" || $_GET['act'] ="edittaikhoan" || $_GET['act'] ="themtaikhoan")
        include_once 'pages/xuly/xylytaikhoan.php';

      

     
      else if($_GET['act'] =="ctdh")
        include_once 'pages/ui-features/hóa đơn/ctdh.php';
    }
    // if(isset($_GET['act'])){
    //   if($_GET['act'] == "qldm")
    //     include_once 'pages/ui-features/hóa đơn/donhang.php';
    //   else if($_GET['act'] == "qldm")
    //     include_once 'pages/ui-features/quyền/qlquyen.php';
    // }
    // if(isset($_GET['action']) && isset($_GET['cthd_id'])){
    //   if($_GET['action'] =="ctdh")
    //     include_once 'pages/ui-features/hóa đơn/ctdh.php';
    // }
    
    
    else if(!isset($_GET['act']))
      include_once 'pages/ui-features/content.php';
  ?>


    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <script type="text/javascript">
      new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'chart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { year: '2008', value: 20 },
      { year: '2009', value: 10 },
      { year: '2010', value: 5 },
      { year: '2011', value: 5 }, 
      { year: '2012', value: 20 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Value']
  });
  </script>
</body>

</html>

