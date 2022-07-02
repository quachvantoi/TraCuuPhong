<?php
function checkuser(){
    include("ketnoi.php");
    $tv="select * from TaiKhoan WHERE TenTaiKhoan = '".$_POST['username']."'";
    $tv_1=mysqli_query($connect,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    if($tv_2 != FALSE) { 
        return True;
    }
    else{
        return False;
    }
}
if (isset($_POST['btn_DangKy'])){
    if (session_id() === ''){
      @session_start();
    }
    $_SESSION['userdk'] = $_POST['username'];
    $_SESSION['passdk'] = $_POST['password'];
    $_SESSION['sdtdk'] = $_POST['SDT'];
    $pass = $_POST['password'];
    $repass = $_POST['repassword'];
    $sdt = trim($_POST['SDT']);
    $pattern = '/0(\d){9}/i';

    if($pass == $repass){
        if(checkuser()){
            //đã có r yêu cầu đổi tên user
            $_SESSION['doiuser'] = 'usersai';
            include("DangKy.php");
        }
        elseif(preg_match($pattern, $sdt) != 1){
            //sđt sai
            $_SESSION['doisdt'] = 'sdtsai';
            include("DangKy.php");
        }
        else{
            // gửi otp
            include("Login_otp.php");
            $otp = rand(100000,1000000);
            $body = "Mã OTP của bạn là: ". $otp .". Được gửi từ TraCuuPhong";
            guiotp($_SESSION['sdtdk'], $body);
            $_SESSION['MaOTP'] = $otp;
            include("otp-html.php");            
        }

    }
    else
    {
        $_SESSION['ktmk'] = 'kodungmk';
        include("DangKy.php");
    }
    
    
    
}       
?>