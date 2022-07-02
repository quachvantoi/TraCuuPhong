
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
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
  left: 25%;
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
.Bottom {
    padding-top: 20px;
    padding-left: 35px;
    text-align: center;
}
.Bottom a {
    color: white;
    padding-right: 20px;
    text-decoration: none;
}
.Bottom a:hover{
    color: #03e9f4;
}
.login_false{
    position: relative;
    top: -20px;
    text-align: center;
    color:red;
}
	</style>
</head>
<body>

	<div class="login-box">
      <h2>Login</h2>
      <?php 
        if(session_id() === ''){
        session_start(); }
        if(isset($_SESSION['login_false']))
        {
            echo '<h3 class="login_false">Đăng nhập thất bại!</h3>';
            unset($_SESSION['login_false']);
        }
      ?>
      <form action="index.php"  method="post">
        <div class="user-box">
          <input type="text" name="username" 
          <?php
            if (isset($_SESSION['userdk'])){
                echo "value ='".$_SESSION['userdk']."' ";
            } else echo "value = '1'";?>
          required="">
          <label>Username</label>
        </div>
        <div class="user-box">
          <input type="password" name="password"
          <?php
            if (isset($_SESSION['passdk'])){
                echo "value ='".$_SESSION['passdk']."' ";
            } else echo "value = '1'";?>
          required="">
          <label>Password</label>
        </div>
        <button type="submit" name="btn_login">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Đăng Nhập
        </button>
        <div class="Bottom">
            <a href="DangKy.php">Tạo tài khoản!</a>
            <a href="Doimk_bangtinnhan.php">Quên Mật khẩu?</a>
        </div>
  </form>
</div>
<?php
if(isset($_SESSION['doimk']))
{
    echo $_SESSION['doimk'];
}
session_destroy();
include("RM_QC.php");
?>
</body>
</html>