<style type="text/css">
    header {
        display: flex !important;
    }
    header .icons a {
        padding: 12px;
    }
    .navbar1 {
        position: relative;
        border: 1px solid transparent;
    }
    header .navbar1 a{
        color:#333;
        font-size: 2rem;
        padding:0 1.5rem;
    }
    
    header .navbar1 a:hover{
        color:var(--red);
    }
    @media (max-width:768px){
    
        header .navbar1{
            position: absolute;
            left:0; right:0; top:100%;
            background:#f7f7f7;
            border-top: .1rem solid #333;
            border-bottom: .1rem solid #333;
            transition: .2s linear;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        }
    
        header .navbar1.active{
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }
    
        header .navbar1 a{
            display: block;
            padding:1.5rem;
            margin:1.5rem;
            background:#fff;
            border:.1rem solid #333;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
            border-radius: .5rem;
        }
    
    }
    a {
        text-decoration: none !important;
    }
    .dropbtn {
  background-color: var(--red);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 27px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 220px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align: center;
  left: 50%;
  transform: translateX(-50%);
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  font-size: 15px;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #ff2700;
}
</style>
<header>

    <a href="../index.php" class="logo">Tra cứu phòng</a>

<?php 
    if(session_id() === ''){
    session_start(); }
    if(isset($_SESSION['TenTaiKhoan']))
    {
        echo '
        <nav class="navbar">
            <a href="index.php">Trang chủ</a>
            <a href="">Đăng tin</a>
            <a href="">Liên hệ</a>
        </nav>
        <div class="dropdown">
    	  <button class="dropbtn">Xin chào, '.$_SESSION['TenTaiKhoan'].'</button>
    	  <div class="dropdown-content">
    	  <a href="thongtincanhan.php">Xem thông tin cá nhân</a>
    	  <a href="DoiMK.php">Đổi mật khẩu</a>';
    	  
    	  if($_SESSION['LoaiTK'] == 'Admin'){
    	      echo '<a href="ADMIN_ThongkeSLPhong.php">Xem thống kê phòng</a>
    	            <a href="ADMIN_ThongkeTimKiem.php">Xem thống kê tìm kiếm</a>';
    	            header('Location: Admin/index.php');
    	  }
    	  
    	  echo '<a href="login.php">Đăng xuất</a>
    	  </div>
    	</div>';
        
    }
    else{
        echo '<div class="icons">
                <a href="DangKy.php">Đăng ký</a>
                <a href="login.php">Đăng nhập</a>
            </div>';
    }
?>

</header>

<!-- header section ends -->