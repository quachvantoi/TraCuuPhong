<?php 

function Chitiet($tenKS, $DiaChi, $Gia, $hinhanh, $dichvu, $Diadanh, $GioiThieu, $link_ct){
    include('laytenFile.php');
	include('Image/dowimage.php');
	$allimage = outputFiles("Image");
	$stack = array();
	foreach ($hinhanh as $itemimage) {
    	$image_ct = $itemimage->src;
        $imagethaydoi = str_replace("/","",substr($image_ct,24));
        $pos = strpos($allimage,$imagethaydoi);
        // hình ảnh không có và ko có vietnambooking trong link
        if($pos == FALSE && strpos($image_ct, 'phongtot.vn') == TRUE){
            //lưu ảnh
            $link_thay_anh = 'Image/'.$imagethaydoi;
            luuanh($image_ct, $link_thay_anh);
            //đổi $image_ct sang cái khác
            array_push($stack, $link_thay_anh);
        }
        else{
            if(strpos($image_ct, 'phongtot.vn') == TRUE){
               array_push($stack, 'Image/'.$imagethaydoi); 
            }else{
            array_push($stack, $image_ct);
            }
        }
	}
    
    echo '
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Học thiết kế web - Cách tạo trang chi tiết sản phẩm bằng Bootstrap | hocwebgiare.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<script src="../css/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="tab-content">
							<div class="tab-pane active" id="pic-1">
								<img src="'.$stack[0].'" />
							</div>';
							for ($i = 1; $i < count($stack); $i++) {
							    $so = $i +1;
							    echo '<div class="tab-pane" id="pic-'.$so.'"><img src="'.$stack[$i].'" /></div>';
                            }
						echo '</div>
						<ul class="preview-thumbnail nav nav-tabs">';
						    echo '
							<li class="active">
								<a data-target="#pic-1" data-toggle="tab">
									<img src="'.$stack[0].'" />
								</a>
							</li>';
							
							for ($i = 1; $i < count($stack); $i++) {
							    
							    $so = $i +1;
							    echo '<li><a data-target="#pic-'.$so.'" data-toggle="tab"><img src="'.$stack[$i].'" /></a></li>';
                            }
						echo'
						</ul>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><a href="'.$link_ct.'">'.$tenKS.'</a></h3>
						<div class="rating">
							<span class="review-no">Địa chỉ: '.$DiaChi.'</span> 
						</div>
						<h4 class="price"> Giá: '.$Gia.'</h4>
						<a class="btn btn-outline-danger" href="'.$link_ct.'" target="blank">Đặt ngay</a>
						<div class="rating">
							<h4> Giới thiệu:</h4>';
							for ($i = 0; $i < count($GioiThieu); $i++) {
    						    echo $GioiThieu[$i];
    						}
						echo '</div>
						<div class="row">
						  <div class="col-md-5">
						    <h3>Dịch vụ:</h3>
						    <p class="product-description">';
    						for ($i = 0; $i < count($dichvu); $i++) {
    						    if($dichvu[$i]->plaintext != "Chưa xác định"){
    						        echo '- '.$dichvu[$i]->plaintext.'<br>';
    						    }
    						}
    						echo '</p>
						  </div>';
						  if(isset($Diadanh)){
					        echo '<div class="col-md-7">
        						<h3>Địa điểm gần:</h3>';
        						for ($i = 0; $i < count($Diadanh); $i++) {
        						    echo '- '.$Diadanh[$i]->plaintext.'<br>';
        						}
    						echo '</div>';
						  }
					echo '</div></div>
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
</html>';
}

?>
