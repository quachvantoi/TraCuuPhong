<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Thông tin cá nhân</title>
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style type="text/css">
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
}
.container{
  max-width: 700px;
  width: 100%;
  background: linear-gradient(90deg, #71b7e6, #9b59b6);
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  margin-top: 180px;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
  width: calc(100% - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  font-size: 13px;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
   transform: scale(0.99); 
  background: var(--red);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

select.form-control {
    width: 200px;
    height: 50px;
    text-align: center;
    font-size: 16px;
}

   </style>
<body>
    <?php
        include("menu.php");
        include("RM_QC.php");
        include('ketnoi.php');
        if (session_id() === ''){
          @session_start();
        }
        if (isset($_POST['btn_thongtincanhan']))
        {
            $tv="select * from ThongTinCaNhan WHERE IDTaiKhoan = '".$_SESSION['IDTK']."'";
            $tv_1=mysqli_query($connect,$tv);
            $tv_2=mysqli_fetch_array($tv_1);
            if($tv_2 != FALSE) {
                $tv="UPDATE `ThongTinCaNhan` SET `DiaChi`='".$_POST['diachi']."',`HoTen`='".$_POST['hoten']."',`GioiTinh`='".$_POST['gioitinh']."',`NgaySinh`='".$_POST['ngaysinh']."' WHERE `IDTaiKhoan`='".$_SESSION['IDTK']."'";
                mysqli_query($connect,$tv);
            }
            else
            {
                $tv="INSERT INTO `ThongTinCaNhan`(`IDTaiKhoan`, `DiaChi`, `NgaySinh`, `HoTen`, `GioiTinh`) VALUES ('".$_SESSION['IDTK']."','".$_POST['diachi']."','".$_POST['ngaysinh']."','".$_POST['hoten']."','".$_POST['gioitinh']."')";
                mysqli_query($connect,$tv);
            }
            
            $_SESSION['thongbao'] = 'Cập nhật thông tin thành công!';
            header('Location: index.php');
        }
    ?>
    
  <div class="container">
    <div class="title">Thông tin cá nhân</div>
    <div class="content">
      <form action="thongtincanhan.php" method="post">
        <div class="user-details">
        <?php 
        
        $tv="SELECT * FROM TaiKhoan LEFT JOIN ThongTinCaNhan ON TaiKhoan.IDTaiKhoan = ThongTinCaNhan.IDTaiKhoan WHERE TaiKhoan.IDTaiKhoan = '".$_SESSION['IDTK']."'";
        $tv1=mysqli_query($connect,$tv);
        $tv2=mysqli_fetch_array($tv1);
        $tentaikhoan = $tv2['TenTaiKhoan'];
        $sodienthoai = $tv2['SDT'];
        $diachi= $tv2['DiaChi'];
        $ngaysinh = $tv2['NgaySinh'];
        ?>
          <div class="input-box">
            <span class="details">Tên tài khoản:</span>
            <input type="text" value="<?php echo $tentaikhoan; ?>" disabled>
          </div>
          <div class="input-box">
            <span class="details">SĐT:</span>
            <input type="text" value="<?php echo $sodienthoai; ?>" disabled>
          </div>
          <div class="input-box">
            <span class="details">Họ và tên:</span>
            <input type="text" name="hoten" placeholder="Nhập họ tên của bạn" value="<?php echo $tv2['HoTen']; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Giới tính:</span>
            <select class="form-control" name="gioitinh">
              <option value="Nam" <?php if($tv2['GioiTinh'] == 'Nam') echo 'selected'; ?> >Nam</option>
              <option value="Nữ" <?php if($tv2['GioiTinh'] == 'Nữ') echo 'selected'; ?> >Nữ</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Địa Chỉ:</span>
            <input type="text" name="diachi" placeholder="Nhập địa chỉ của bạn" value="<?php echo $diachi; ?>" required>
          </div>
          <div class="input-box">
            <span class="details">Ngày sinh:</span>
            <input type="date" name="ngaysinh" placeholder="Ngày sinh" value="<?php echo substr($ngaysinh,0,10); ?>" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="btn_thongtincanhan" value="Lưu thay đổi" required>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
