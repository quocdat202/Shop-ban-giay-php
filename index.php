<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="containert">
            <?php 
                require_once 'giaodien/header.php'
            ?>
            <div class="content">
                <?php
                    require_once 'giaodien/LeftContent.php';
                    require_once 'giaodien/center_content.php';
                ?>
            </div>
            <!-- <?php require_once 'giaodien/footer.php'; ?> -->
            <?php require_once 'data.php'; ?>
        </div>
    </div>
</body>
<script src="test.js"></script>
</html>