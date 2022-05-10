
<?php
include_once '../DataProvider.php';
include_once '../GiaoDien/format_price.php';
class loaisanpham
{
    public static function theloaisp($loai)
    {
        $sql = "SELECT * FROM theloai";
        $result = DataProvider::executeQuery($sql);

                    while($row = mysqli_fetch_array($result))
                    {
                        
                        echo    '<option value="'.$row['idloai'].'"'; if ($row['idloai'] === $loai){echo 'selected';}echo '>'.$row['tentheloai'].'</option>';
                        
                        
                    }
    }
    public static function theloaisp1()
    {
        $sql = "SELECT * FROM theloai";
        $result = DataProvider::executeQuery($sql);

                    while($row = mysqli_fetch_array($result))
                    {
                        echo '<option value="'.$row['idloai'].'">'.$row['tentheloai'].'</option>';
                    }
    }
}
?>