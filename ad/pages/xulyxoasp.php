
<?php
include_once '../DataProvider.php';
        $sql = "DELETE FROM sanpham WHERE idSP ='".$_GET['id']."'";
        $result = DataProvider::executeQuery2($sql);
        
       
        // header("location:javascript://history.go(-1)");
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
        // exit;
            echo '<script>
                    window.history.back(-1);
                    function taitrang(){
                        window.location.reload();
                    };
                    setTimeout(function(){
                        taitrang();
                    }, 2000);
                </script>
                
                ';
?>