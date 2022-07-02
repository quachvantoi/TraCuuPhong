<?php
    $id = $_GET['id'];
    if (session_id() === ''){
      @session_start();
    }
    
    include("../ketnoi.php");
    $tvc="DELETE FROM ThongTinPhong WHERE IDKhachSan = '".$id."'";
    echo $tvc;
    $tvc_1=mysqli_query($connect,$tvc);
    
    $_SESSION['thongbao'] = 'Xoá thành công!';
    
    header('Location: Admin_thongtinphong.php');

?>