<?php
    echo $username = $_POST['username'];
    echo $SDT = $_POST['SDT'];
    echo $quyen = $_POST['quyen'];
    echo $password = $_POST['password'];
    
    include("../ketnoi.php");
    $t="select max(IDTaiKhoan) as ID from TaiKhoan";
    $tv=mysqli_query($connect,$t);
    $tv2=mysqli_fetch_array($tv);
    $idtk = $tv2['ID'] + 1;
    
    $tvc="INSERT INTO TaiKhoan VALUES ('".$idtk."' ,'".$username."','".$password."','".$SDT."','".$quyen."', null, 'Kich Hoat');";
    $tvc_1=mysqli_query($connect,$tvc);
    echo $tvc;
    
    
    if (session_id() === ''){
      @session_start();
    }
    $_SESSION['thongbao'] = 'Tạo tài khoản thành công!';
    header('Location: Admin_taikhoan.php');

?>