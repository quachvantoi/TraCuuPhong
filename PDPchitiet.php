<?php
// $link = $_GET['linkct'];
// $url = $_GET['url'];
// echo $link." ".$url;
?>
 
<!--<form method="post" action="https://www.vietnambooking.com/book-hotel">-->
<!--    <input type="hidden" name="txt_info_params" value="{&quot;id_post&quot;:&quot;302454&quot;,&quot;ds&quot;:&quot;26042022&quot;,&quot;de&quot;:&quot;27042022&quot;,&quot;r&quot;:&quot;1&quot;,&quot;a&quot;:&quot;1&quot;,&quot;c&quot;:&quot;0&quot;,&quot;ca&quot;:&quot;&quot;}">-->
<!--    <input type="hidden" name="txt_id_post" value="302454">-->
<!--    <input type="hidden" name="txt_id_room" value="29">-->
<!--    <input type="hidden" name="txt_id_price_room" value="room_1">-->
<!--    <button name="btn_submit_book_hotel_pro" class="btn-submit-room">Đặt ngay</button>-->
<!--</form>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chi tiết</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <?php
        include("ketnoi.php");
        include("menu.php");
        echo '<div style="padding-top: 90px;"></div>';
        
        if($_GET['url'] == "VNBooking.com"){
            include("simple_html_dom.php");
            include("ChiTietVNBK.php");
            [$tenKS, $DiaChi, $Gia, $hinhanh, $dichvu, $Diadanh, $GioiThieu] = getdataCT($_GET['linkct']);
        }
        else if($_GET['url'] == "phongtot.vn"){
            include("simple_html_dom.php");
            include("ChiTietPTot.php");
            [$tenKS, $DiaChi, $Gia, $hinhanh, $dichvu, $Diadanh, $GioiThieu] = getdataPTot($_GET['linkct']);
        }
        
        if(session_id() === ''){
            session_start(); 
        }
        $_SESSION['IDKS'] = $_GET['id'];
        // echo $tenKS. $DiaChi. $Gia;
        // for ($i = 0; $i < count($hinhanh); $i++) {
        //     echo "<br>".$hinhanh[$i]->src;
        // }
        
        
        include("ChitietSP.php");
        Chitiet($tenKS, $DiaChi, $Gia, $hinhanh, $dichvu, $Diadanh, $GioiThieu, $_GET['linkct']);
        include("RM_QC.php");
        
        
        // if(isset($_SESSION['IDTK'])){
        //     echo "đã đăng nhập";
        //     echo $_SESSION['IDTK'];
        // }
        // else{
        //     echo "x chưa đăng nhập";
        // }
        
   ?>



<!-- javascript part  -->
<script>

let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');
navbar.classList.remove('navbar');
navbar.classList.add('navbar1');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

</script>

</body>
</html>