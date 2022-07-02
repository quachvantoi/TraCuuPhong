
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng Ký</title>
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

.usersai::after { 
  content: "Tên đăng nhập đã tồn tại!";
  position: relative;
  top: -15px;
  color: red;
  font-size:13px;
}
.kodungmk::after { 
  content: "Không đúng mật khẩu!";
  position: relative;
  top: -15px;
  color: red;
  font-size:13px;
}
.sdtsai::after { 
  content: "SĐT không đúng định dạng!";
  position: relative;
  top: -15px;
  color: red;
  font-size:13px;
}
.soduTK{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    font-size: 6px;
}
.baodong{
    color: red;
}
	</style>
</head>
<body>
    <?php 
        include("kiemtrasodu.php");
        $money = laysodu();
        echo '<p class="soduTK ';
        if($money < 600){
            echo ' baodong ';
        }
        echo '">Số dư trong tài khoản còn: '.$money.'Đ';
        if($money < 600){
            echo '.Không đủ để gửi mã OTP!';
        }
        echo '</p>';
    ?>
    
	<div class="login-box">
      <h2>Đăng ký</h2>
      <form action="XacNhan_OTP.php"  method="post">
        <div class="user-box 
            <?php
            if (session_id() === ''){
              @session_start();
            }
            if (isset($_SESSION['doiuser'])){
                echo $_SESSION['doiuser'];
            }?>">
          <input type="text" name="username" <?php
            if (isset($_SESSION['userdk'])){
                echo "value ='".$_SESSION['userdk']."' ";
            }?>
            required="">
          <label>Tên Đăng nhập</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" 
            <?php
            if (isset($_SESSION['passdk'])){
                echo "value ='".$_SESSION['passdk']."' ";
            }?>
          required="">
          <label>Mật khẩu</label>
        </div>
        <div class="user-box 
            <?php
            if (isset($_SESSION['ktmk'])){
                echo $_SESSION['ktmk'];
            }?>">
          <input type="password" name="repassword" required="">
          <label>Xác nhận mật khẩu</label>
        </div>
        <div class="user-box
            <?php
            if (isset($_SESSION['doisdt'])){
                echo $_SESSION['doisdt'];
            }?>
        ">
          <input type="text" name="SDT"
            <?php
            if (isset($_SESSION['sdtdk'])){
                echo "value ='".$_SESSION['sdtdk']."' ";
            }?>
          required="">
          <label>Số điện thoại</label>
        </div>
        <button type="submit" name="btn_DangKy">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Đăng ký
        </button>
  </form>
</div>
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded",function () {
      var x = document.querySelectorAll('.user-box');
      for (var i = 0; i < x.length; i++) {
      	
      	x[i].addEventListener('keydown', function(event) {
		  this.classList.remove(this.classList.item(1));
		});
  	  }
  }, false);
</script>
<?php
session_destroy();
include("RM_QC.php");
?>
</body>
</html>