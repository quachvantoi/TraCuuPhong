<?php
    $id = $_GET['id'];
    if (session_id() === ''){
      @session_start();
    }
    
    if($_GET['trangthai'] == 'Kich Hoat')
    {
        $trangthai = 'Khoa';
        $_SESSION['thongbao'] = 'Khoá tài khoản '.$_GET['name'].' thành công!';
    }
    else{
        $trangthai = 'Kich Hoat';
        $_SESSION['thongbao'] = 'Kích hoạt tài khoản '.$_GET['name'].' thành công!';
    }
    
    include("../ketnoi.php");
    $tvc="UPDATE `TaiKhoan` SET `TrangThai`= '".$trangthai."' WHERE `IDTaiKhoan` = '".$id."'";
    $tvc_1=mysqli_query($connect,$tvc);
    
    
    
    
    header('Location: Admin_taikhoan.php');

?>