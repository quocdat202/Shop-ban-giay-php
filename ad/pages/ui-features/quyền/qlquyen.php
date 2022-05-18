<?php
    include_once '../DataProvider.php';
    

            echo'<div class="container">
            <div class="row title-table-row">
                <div class="title">
                    <p class="p-table-row" >Quản lý quyền</p>
                </div>
            </div>
            <div class="row button">
                <a href="index.php?act=qldm&qldm_q=1"><button class="DM-btn">Admin</button></a>
                <a href="index.php?act=qldm&qldm_q=2"><button class="DM-btn">Nhân Viên</button></a>
                <a href="index.php?act=qldm&qldm_q=3"><button class="DM-btn">Khách Hàng</button></a>
            </div>';
            if(isset($_GET['qldm_q'])){
                $sql="SELECT idQuyen,tendanhmuc,q_dm.madanhmuc FROM `danhmuc`,`q_dm` WHERE danhmuc.madanhmuc=q_dm.madanhmuc and idQuyen=".$_GET['qldm_q'];
                $result=DataProvider::executeQuery($sql);
                echo
                '<div class="row table-sp">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Mã Danh mục</th>
                        <th scope="col">Tên Quyền</th>
                        <th scope="col">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    ';
                while($admin = mysqli_fetch_array($result)){   
                echo '
                    <tr>
                        <td>'.strtoupper($admin['madanhmuc']).'</td>
                        <td>'.$admin['tendanhmuc'].'</td>
                        <td>
                            <a href="pages/ui-features/quyền/deleteQuyen.php?ma='.$_GET['qldm_q'].'&ten='.$admin['madanhmuc'].'">
                                X
                            </a>
                        </td>
                    </tr>';
                }
                echo '
                    </tbody>
                </table>
                
                </div>
                <p>Chọn danh mục muốn thêm</p>';
                $sql2="SELECT * FROM `danhmuc` where madanhmuc not in
                (SELECT danhmuc.madanhmuc FROM `danhmuc`,`q_dm` WHERE danhmuc.madanhmuc=q_dm.madanhmuc and idQuyen=".$_GET['qldm_q'].")";
                $result2=DataProvider::executeQuery($sql2);
                echo'<form action="pages/ui-features/quyền/xuliQuyen.php">';
                $i=1;
                while($addDM = mysqli_fetch_array($result2)){                 
                    echo'
                    <div>
                    <input type="checkbox" name="madanhmuc_'.$i.'" value="'.$addDM['madanhmuc'].'">
                    <label>'.$addDM['tendanhmuc'].'</label>
                    </div>';
                    $i++;
                }
                echo'<input type="submit" value="Thêm" class="DM-btn">
                <input type="hidden" value="'.$i.'" name="SL_input" class="DM-btn">
                <input type="hidden" value="'.$_GET['qldm_q'].'" name="ID_quyen" class="DM-btn">
                </form>';
            }
            echo '</div>';      

?>
