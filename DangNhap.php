<?php
if (session_id() === ''){
  @session_start();
}
if (isset($_POST['btn_DangKy'])){
    if ($_SESSION['MaOTP'] == (int)$_POST['OTP']){
        
        include('ketnoi.php');
        $t="select max(IDTaiKhoan) as ID from TaiKhoan";
        $tv=mysqli_query($connect,$t);
        $tv2=mysqli_fetch_array($tv);
        $idtk = $tv2['ID'] + 1;
        $tv="INSERT INTO TaiKhoan 
        	VALUES ('".$idtk."' ,'".$_SESSION['userdk']."','".$_SESSION['passdk']."','".$_SESSION['sdtdk']."','User', null, 'Kich Hoat');";
        mysqli_query($connect,$tv);
        
        
        include("login.php");
    }
    else{
        include("otp-html.php"); 
    }
}

?>