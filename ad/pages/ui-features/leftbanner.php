<?php
    include_once '../DataProvider.php';
    if(isset($_SESSION['Quyen'])){
      $sql="SELECT tendanhmuc,q_dm.madanhmuc FROM danhmuc,q_dm where danhmuc.madanhmuc=q_dm.madanhmuc and q_dm.idQuyen=".$_SESSION['Quyen'];
      $result = DataProvider::executeQuery($sql);
      echo'
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">';
        while($row = mysqli_fetch_array($result)){
          if($row['madanhmuc']==1)
          echo'';
          else
          echo'
          <li class="nav-item">
          <a href="index.php?act='.$row['madanhmuc'].'" class="nav-link" >
            <span class="menu-title">'.$row['tendanhmuc'].'</span>
          </a>
        </li>';
        }
        echo'
        <li class="nav-item" style="background:#4B49AC;border-radius:8px;">
          <a href="adlogout.php" class="nav-link" >
            <span style="color:#fff;" class="menu-title">Đăng Xuất</span>
          </a>
        </li>
      </ul>
    </nav>
      ';
    }
?>