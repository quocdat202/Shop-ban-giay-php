<?php
    session_start();
    if(!isset($_SESSION['giohang']))
        $_SESSION['giohang']=[];
    if( isset($_GET['buy']) || isset($_GET['add'])){
        $id=$_GET['id'];
        $img=$_GET['img'];
        $name=$_GET['name'];
        $color=$_GET['color'];
        $size=$_GET['checkbox'];
        $quantity=$_GET['soluong'];
        $price=$_GET['price'];   
        $sp=[$id,$img,$name,$color,$size,$quantity,$price];
        $_SESSION['giohang'][]=$sp;
        var_dump($_SESSION['giohang']);
    }
?>