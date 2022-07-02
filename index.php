<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
    #toast-container{
        transform: translateY(90px);
        
    }
    .toast-message{
        font-size: 20px;
    }
</style>
</head>
<body>
   <?php
        include("ketnoi.php");
        if (session_id() === ''){
          @session_start();
        }
        function checklogin($user, $pass){
            include("ketnoi.php");
            $tv="select * from TaiKhoan WHERE TenTaiKhoan = '".$user."' and MatKhau = '".$pass."'  ";
            $tv_1=mysqli_query($connect,$tv);
            $tv_2=mysqli_fetch_array($tv_1);
            if($tv_2 != FALSE && $tv_2['TrangThai'] == 'Kich Hoat') { 
                if (session_id() === ''){
                  @session_start();
                }
                $_SESSION['TenTaiKhoan'] = $tv_2['TenTaiKhoan'];
                $_SESSION['LoaiTK'] = $tv_2['MaLoaiTaiKhoan'];
                $_SESSION['IDTK'] = $tv_2['IDTaiKhoan'];
                $_SESSION['thongbao'] = 'Đăng nhập thành công!';
                return $tv_2['MaLoaiTaiKhoan'];
            }
            else{
                return "False";
            }
        }
        if (isset($_POST['btn_login'])){
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $check = checklogin($user, $pass);
            if($check != "False"){
                include("menu.php");
                include("Product_page.php");
            }
            else{
                
                $_SESSION['login_false'] = $check;
                // include("login.php");
                header('Location: login.php');
            }
        }
        else{
            include("menu.php");
            include("Product_page.php");
            // include("footer_page.php");
        }
        if (isset($_SESSION['thongbao'])){
            echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
                <script type="text/javascript">toastr.success("'.$_SESSION['thongbao'].'")</script>';
            unset($_SESSION['thongbao']);
        }
        include("RM_QC.php");
   ?>



<!-- javascript part  -->

<script>

let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}

</script>

</body>
</html>