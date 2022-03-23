<?php 
if(isset($_GET['id']) && isset($_GET['act']))
{
    if($_GET['id'] == '1' && $_GET['act'] =='l')
    echo "Hello các bạn bấm số 1";
    else if ($_GET['id'] == '2' && $_GET['act'] =='t')
    echo "Hi các bạn bấm số 2";
    else if ($_GET['id'] == '11' && $_GET['act']=='f')
    echo   '<div class="center-content">
                <form action="index.php" method="post">
                    <div class="form-tinhtong">
                        <div class="element">
                            <p>Số A</p>
                            <input id="soa" type="number" name="soa" value="if(isset($_GET["soa"])) echo $_GET["soa"];" />
                        </div>
                        <div class="element">
                            <p>Số B</p>
                            <input id="sob" type="number"/>
                        </div>
                        <div class="element">
                            <p class="kq">Kết quả: </p>
                            <span id="kq"></span>
                        </div>
                        <div class="element">
                            <button type="button" onclick="sum()">Tính</button>
                            <button type="button">Tính (PHP)</button>
                        </div>
                    </div>
                <form>
            </div>';
}
?>