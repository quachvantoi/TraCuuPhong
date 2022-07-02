<?php
    $bl = $_POST['ValueA'];
    // $bl = '123';
    include('../ketnoi.php');
    if(session_id() === ''){
        session_start(); 
    }
    if(isset($_SESSION['IDTK'])){
        $tv="INSERT INTO `DanhGia`(`IDKhachSan`, `IDTaiKhoan`, `DanhGia`) VALUES ('".$_SESSION['IDKS']."','".$_SESSION['IDTK']."','".$bl."')";
        echo $tv;
        mysqli_query($connect,$tv);
    }
    else{
        echo "chưa đăng nhập";
    }
    

?>