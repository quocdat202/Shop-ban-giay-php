<?php
    session_start();
    if(!isset($_SESSION['giohang']))
        $_SESSION['giohang']=[];
    if(isset($_GET['del'])){
        array_splice($_SESSION['giohang'],$_GET['del'],1);
        if(sizeof($_SESSION['giohang'])==0)
            unset($_SESSION['giohang']);
        header('location:../index.php?act=cart');
    }
        
    if( isset($_GET['buy']) || isset($_GET['add'])){
        $id=$_GET['id'];
        $img=$_GET['img'];
        $name=$_GET['name'];
        $color=$_GET['color'];
        $size=$_GET['checkbox'];
        $quantity=$_GET['soluong'];
        $price=$_GET['price'];   
        $hienthi=$_GET['hienthi'];
        $kiemtra=0;
        for($i=0;$i < sizeof($_SESSION['giohang']);$i++){
            if($_SESSION['giohang'][$i][0]==$id && $_SESSION['giohang'][$i][4]==$size){
                $kiemtra=1;
                $newQuantity=$quantity+$_SESSION['giohang'][$i][5];
                $_SESSION['giohang'][$i][5]=$newQuantity;
                break;
            }
        }
        if($kiemtra==0){
            $sp=[$id,$img,$name,$color,$size,$quantity,$price,$hienthi];
        $_SESSION['giohang'][]=$sp;
        }        
        if( isset($_GET['add']))
            header('location:../index.php?id='.$id.'&act=detailproduct');
        else if( isset($_GET['buy']))
            header('location:../index.php?act=cart');
    }
?>