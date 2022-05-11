<?php
    include_once '../DataProvider.php';
    $sql="SELECT tendanhmuc,q_dm.madanhmuc FROM danhmuc,q_dm where danhmuc.madanhmuc=q_dm.madanhmuc and q_dm.idQuyen=".$_SESSION['Quyen'];
    $result = DataProvider::executeQuery($sql);
    echo'
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">';
      while($row = mysqli_fetch_array($result)){
        echo'
        <li class="nav-item">
        <a href="index.php?act='.$row['madanhmuc'].'" class="nav-link" >
          <span class="menu-title">'.$row['tendanhmuc'].'</span>
        </a>
      </li>';
      }
      echo'
    </ul>
  </nav>
    ';
?>