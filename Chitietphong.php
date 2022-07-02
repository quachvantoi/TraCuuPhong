<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Trang chi tiết</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<script src="../css/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style type="text/css">
body {
	font-family:Arial, Helvetica, sans-serif;
	overflow-x: hidden;
}
img {
	max-width: 100%;
}
.preview {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-webkit-flex-direction: column;
	-ms-flex-direction: column;
	flex-direction: column;
}
 @media screen and (max-width: 996px) {
 .preview {
 margin-bottom: 20px;
}
}
.preview-pic {
	-webkit-box-flex: 1;
	-webkit-flex-grow: 1;
	-ms-flex-positive: 1;
	flex-grow: 1;
}
.preview-thumbnail.nav-tabs {
	border: none;
	margin-top: 15px;
}
.preview-thumbnail.nav-tabs li {
	width: 18%;
	margin-right: 2.5%;
}
.preview-thumbnail.nav-tabs li img {
	max-width: 100%;
	display: block;
}
.preview-thumbnail.nav-tabs li a {
	padding: 0;
	margin: 0;
	cursor:pointer;
}
.preview-thumbnail.nav-tabs li:last-of-type {
	margin-right: 0;
}
.tab-content {
	overflow: hidden;
}
.tab-content img {
	width: 100%;
	-webkit-animation-name: opacity;
	animation-name: opacity;
 -webkit-animation-duration: .3s;
 animation-duration: .3s;
}
.card {
	margin-top: 0px;
	padding: 3em;
	line-height: 1.5em;
}
 @media screen and (min-width: 997px) {
 .wrapper {
 display: -webkit-box;
 display: -webkit-flex;
 display: -ms-flexbox;
 display: flex;
}
}
.details {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-orient: vertical;
	-webkit-box-direction: normal;
	-webkit-flex-direction: column;
	-ms-flex-direction: column;
	flex-direction: column;
}
.colors {
	-webkit-box-flex: 1;
	-webkit-flex-grow: 1;
	-ms-flex-positive: 1;
	flex-grow: 1;
}
.product-title, .price, .sizes, .colors {
	text-transform: UPPERCASE;
	font-weight: bold;
}
.checked, .price span {
	color: #ff9f1a;
}
.product-title, .rating, .product-description, .price, .vote, .sizes {
	margin-bottom: 15px;
}
.product-title {
	margin-top: 0;
}
.size {
	margin-right: 10px;
}
.size:first-of-type {
	margin-left: 40px;
}
.color {
	display: inline-block;
	vertical-align: middle;
	margin-right: 10px;
	height: 2em;
	width: 2em;
	border-radius: 2px;
}
.color:first-of-type {
	margin-left: 20px;
}
.action {
    text-align: center;
}
.add-to-cart, .like {
	background: #ff9f1a;
	padding: 1.2em 1.5em;
	border: none;
	text-transform: UPPERCASE;
	font-weight: bold;
	color: #fff;
	text-decoration:none;
 -webkit-transition: background .3s ease;
 transition: background .3s ease;
}
.add-to-cart:hover, .like:hover {
	background: #b36800;
	color: #fff;
	text-decoration:none;
}
.not-available {
	text-align: center;
	line-height: 2em;
}
.not-available:before {
	font-family: fontawesome;
	content: "\f00d";
	color: #fff;
}
.orange {
	background: #ff9f1a;
}
.green {
	background: #85ad00;
}
.blue {
	background: #0076ad;
}
.tooltip-inner {
	padding: 1.3em;
}
 @-webkit-keyframes opacity {
 0% {
 opacity: 0;
 -webkit-transform: scale(3);
 transform: scale(3);
}
 100% {
 opacity: 1;
 -webkit-transform: scale(1);
 transform: scale(1);
}
}
 @keyframes opacity {
 0% {
 opacity: 0;
 -webkit-transform: scale(3);
 transform: scale(3);
}
 100% {
 opacity: 1;
 -webkit-transform: scale(1);
 transform: scale(1);
}
}

    .link_wrapper {
	    margin-left: 60px;
	}
	.comment_review{
		padding-top: 15px;
		
	}
	.duongke{
		width: 40%;
		margin-left: 30px;
		border-bottom: 1px solid #a5a5a5;
	}
	.comment_review a{
		font-size: 26px;
		color: black;

	}
	.comment_review p{
		margin-left: 10px;
	}
	input#binhluan {
	    width: 560px;
	    height: 35px;
	    padding: 10px 0 5px 15px;
	    border-radius: 20px;
	    border: 1px solid #606060;
	}
	button#send {
	    width: 90px;
	    height: 35px;
	    margin-left: 20px;
	    box-shadow: 0.5rem 0.5rem 1rem #707070;
	    border-radius: 50px;
	}
	button#send:hover {
	    background-color: #3e8cce;
        color: white;
	}
</style>
</head>
<body>
    <?php 
    include("menu.php");
    include("RM_QC.php");
    if(session_id() === ''){
        session_start(); 
    }
    $_SESSION['IDKS'] = 'DN-KS3';
    ?>
    <div style="padding-top: 90px;"></div>
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="tab-content">
							<div class="tab-pane active" id="pic-1">
								<img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/59031813a643463b7897d070e8828c5a.jpg">
							</div><div class="tab-pane" id="pic-2"><img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/394635704a3d70bd1a7e95e62d6f203f.jpg"></div><div class="tab-pane" id="pic-3"><img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/9195160559e935dc96ee6b6b2e061d84.jpg"></div><div class="tab-pane" id="pic-4"><img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/c690b1b2845e4c8386969061b30970ee.jpg"></div></div>
						<ul class="preview-thumbnail nav nav-tabs">
							<li class="active">
								<a data-target="#pic-1" data-toggle="tab">
									<img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/59031813a643463b7897d070e8828c5a.jpg">
								</a>
							</li><li><a data-target="#pic-2" data-toggle="tab"><img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/394635704a3d70bd1a7e95e62d6f203f.jpg"></a></li><li><a data-target="#pic-3" data-toggle="tab"><img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/9195160559e935dc96ee6b6b2e061d84.jpg"></a></li><li><a data-target="#pic-4" data-toggle="tab"><img src="https://cdn2.vietnambooking.com/wp-content/uploads/hotel_pro/hotel_334833/c690b1b2845e4c8386969061b30970ee.jpg"></a></li>
						</ul>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><a href="https://www.vietnambooking.com/hotel/vietnam/khach-san-paracel-da-nang.html">Khách sạn Paracel Đà Nẵng</a></h3>
						<div class="rating">
							<span class="review-no">Địa chỉ: 204 Võ Nguyên Giáp, Quận Sơn Trà, Đà Nẵng, Việt Nam</span> 
						</div>
						<h4 class="price"> Giá:  887,000 VND/ đêm </h4>
						<a class="btn btn-outline-danger" href="https://www.vietnambooking.com/hotel/vietnam/khach-san-paracel-da-nang.html" target="blank">Đặt ngay</a>
						<div class="rating">
							<h4> Giới thiệu:</h4><p style="text-align: justify">  	<a href="https://www.vietnambooking.com/hotel/vietnam/khach-san-paracel-da-nang.html"><strong>Khách sạn Paracel Đà Nẵng</strong></a> nằm ngay&nbsp;tại quận Sơn Trà, nơi có những cảnh đẹp thơ mộng của thành phố Đà Nẵng hiện đại. Khách sạn mang phong cách bán&nbsp;cổ điển vừa sang trọng, vừa thanh nhã. Đây được xem là chỗ nghỉ thích hợp để du khách lưu trú khi khám phá thành phố đáng sống nhất Việt Nam. Các <span style="color:#006400"><strong>địa điểm du lịch nổi tiếng gần khách sạn</strong></span> có: Cầu Sông Hàn, Chợ Hàn, Bảo tàng Chăm, bãi biển Mỹ An, Chùa Linh Ứng,...  </p><p style="text-align: justify">  	<strong>Paracel Danang Hotel</strong> cung cấp cho quý khách những căn phòng hiện đại, nhiều ánh sáng tự nhiên. Các phòng ốc đều có máy lạnh cũng như&nbsp;hệ thống cách âm. Ngoài ra, quý khách có thể giải trí với&nbsp;TV màn hình phẳng kèm các kênh truyền hình cáp. Trong phòng còn có đầy đủ các trang thiết bị cần thiết như:&nbsp;<span style="color:#006400"><strong>ghế sofa, bàn làm việc,&nbsp;minibar, két an toàn</strong></span> cá nhân, phòng tắm riêng với các vật dụng vệ sinh miễn phí và máy sấy tóc,...  </p><p style="text-align: justify">  	Ngoài các tiện nghi cơ bản, khách lưu trú tại khách sạn Paracel còn được tận hưởng các dịch vụ tiện ích như: nhà hàng,&nbsp;sân hiên và hồ bơi ngoài trời mở cửa quanh năm. Quý khách có thể thư giãn với&nbsp;với<span style="color:#006400"><strong> bể sục và phòng xông hơi khô&nbsp;</strong></span>tại&nbsp;trung tâm chăm sóc sức khỏe và spa hoặc thưởng thức các món đồ uống đặc sắc tại quầy bar. Bên cạnh đó, khách sạn còn cung cấp nhiều dịch vụ như:&nbsp;Wi-Fi miễn phí trong tất cả các khu vực, chỗ đỗ xe riêng miễn phí, lễ tân 24h, quầy đặt tour,&nbsp;dịch vụ đưa đón và vận chuyển sân bay (có phụ phí)....  </p><p style="text-align: justify">  	Vietnam Booking đang có ưu đãi đến <span style="color:#FF0000"><strong>50%</strong></span> cho khách sạn Paracel. Còn chờ gì mà chưa gọi ngay đến tổng đài&nbsp;<b><font color="#ff0000">1900.4698</font>&nbsp;</b>của Vietnam Booking để đặt ngay căn phòng&nbsp;<strong><a href="https://www.vietnambooking.com/hotel/vietnam/khach-san-da-nang.html">khách sạn Đà Nẵng</a>&nbsp;</strong>tuyệt vời này.</p></div>
						<div class="row">
						  <div class="col-md-5">
						    <h3>Dịch vụ:</h3>
						    <p class="product-description">-  Nhà hàng<br>-  Bồn tắm<br>-  Quầy bar<br>-  Hồ bơi ngoài trời<br>-  Spa<br>-  Wifi<br>-  Máy lạnh<br>-  Phòng không hút thuốc<br></p>
						  </div><div class="col-md-7">
        						<h3>Địa điểm gần:</h3>- Hoang Dai Hotel Danang 2 (1.33 km) <br>- Chùa An Phước (2.24 km) <br>- DHC Marina (2.32 km) <br>- An Thuong Parish Church (3.57 km) <br>- Zone Media (3.82 km) <br>- Da Nang Food Tour (3.37 km) <br>- Our Lady star of the sea (2.71 km) <br>- XQ Đà Nẵng (4.15 km) <br>- Đà Nẵng Museum of Cham Sculpture (3.12 km) <br></div></div></div>
				</div>
			</div>
		</div>
	</div>

<!-- bình luận -->
	<div class="container">
		<h2>Bình luận</h2>
		<div id="comment" class="link_wrapper">
		
		</div>
		<div class="link_wrapper">
			<form action="coment/luubl.php" method="POST" >
				<input type="text" id="binhluan" name="ValueA" value="" placeholder="Viết bình luận của bạn về dịch vụ...">
				<button type="button"  id="send" name="send" onclick="ajac();">Đăng</button>
			</form>
		</div>
	</div>
	<div style="padding-top: 90px;"></div>
// <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
// luu bl
    function ajac() {
	    var binhluan = document.getElementById("binhluan").value;
	    console.log(binhluan);
	    var data = {
            ValueA: binhluan,
        };
 
        $.post("coment/luubl.php", data);
		document.getElementById("binhluan").value = "";
	}
</script> 
<script type="text/javascript">
    function loadXMLDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("comment").innerHTML =
          this.responseText;
        }
      };
      xhttp.open("GET", "coment/server.php", true);
      xhttp.send();
    }
    setInterval(function(){loadXMLDoc();},1000);
    window.onload = loadXMLDoc;
    
    
    
    //rm qc
  document.addEventListener("DOMContentLoaded",function () {
      var x = document.querySelectorAll("a");
      for (var i = 0; i < x.length; i++) {
      	
      	if(x[i].getAttribute("target") == "_blank")
      	{
      		x[i].parentNode.removeChild(x[i]);
      		// x[i].removeAttribute("target");
      		// x[i].removeAttribute("href");
      	}
  	  }
  }, false);
</script>

</body>
</html>