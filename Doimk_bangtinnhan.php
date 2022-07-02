
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Xác nhận OTP</title>
	<style>
	    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form button {
  position: relative;
  display: inline-block;
  background: transparent;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box button:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box button span {
  position: absolute;
  display: block;
}

.login-box button span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box button span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box button span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box button span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
.sdtsai::after { 
  content: "SĐT không đúng định dạng!";
  position: relative;
  top: -15px;
  color: red;
  font-size:13px;
}
.sdtchuadangky::after { 
  content: "SĐT chưa đăng ký tài khoản!";
  position: relative;
  top: -15px;
  color: red;
  font-size:13px;
}
	</style>
</head>
<body>
<?php
$cl_sdt = "";
if (isset($_POST['btn_DoiMK'])){
    $pattern = '/0(\d){9}/i';
    
    if(preg_match( $pattern, trim($_POST['SDT']) ) != 1){
        //sđt sai
        $cl_sdt = 'sdtsai';
    }
    else
    {
        //kiểm tra số có trong data hay ko
        include('ketnoi.php');
        $tv="select * from TaiKhoan WHERE SDT = '".$_POST['SDT']."'";
        $tv_1=mysqli_query($connect,$tv);
        $tv_2=mysqli_fetch_array($tv_1);
        if($tv_2 != FALSE) {
            // gửi otp
            include("Login_otp.php");
            $mk = base64_encode(random_bytes(6));
            $otp = "Mật khẩu mới của bạn là: '". $mk ."'. Được gửi từ TraCuuPhong";
            echo $otp;
            guiotp($_POST['SDT'], $otp);
            
            //cập nhật mật khẩu
            $tv="UPDATE `TaiKhoan` SET `MatKhau`='".$mk."' WHERE `SDT`='".$_POST['SDT']."'";
            mysqli_query($connect,$tv);
            if (session_id() === ''){
              @session_start();
            }
            echo $_SESSION['doimk'] = '<script type="text/javascript">
                        alert("Mật khẩu 8 ký tự sẽ gửi đến sđt của bạn!!");
                    </script>';
            header('Location: login.php');
        }
        else{
            $cl_sdt = 'sdtchuadangky';
        }
        
        
    }
}
?>
	<div class="login-box">
      <h2>Quên mật khẩu</h2>
      <form action="Doimk_bangtinnhan.php"  method="post">
        <div class="user-box <?php echo $cl_sdt; ?>">
          <input type="text" name="SDT" required="">
          <label>Số điện thoại của bạn</label>
        </div>
        <button type="submit" name="btn_DoiMK">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Xác nhận
        </button>
  </form>
</div>
<?php
include("RM_QC.php");
?>
</body>
</html>