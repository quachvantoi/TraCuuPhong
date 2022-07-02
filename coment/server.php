<?php 
    include("../ketnoi.php");
    if(session_id() === ''){
        session_start(); 
    }
    if(isset($_SESSION['IDKS']))
    {
        $where = "WHERE DanhGia.IDKhachSan = '" . $_SESSION['IDKS'] . "'";
    }
	$query = mysqli_query($connect, "SELECT * FROM DanhGia INNER JOIN TaiKhoan ON DanhGia.IDTaiKhoan = TaiKhoan.IDTaiKhoan ". $where);
// 	echo "SELECT * FROM DanhGia INNER JOIN TaiKhoan ON DanhGia.IDTaiKhoan = TaiKhoan.IDTaiKhoan ". $where;
	$codulieu = 0;
	if($query === FALSE){
	    pass;
	}
	else{
    	while($row = mysqli_fetch_array($query)){
            $codulieu = 1;
    		$danhgia = $row['DanhGia'];
    		$tennguoidung = $row['TenTaiKhoan'];
    		echo '
    		<div id="comment" class="comment_review">
    			<a href="#">'.$tennguoidung.'</a>
    			<p>'.$danhgia.'</p>
    			<div class="duongke"></div>
    		</div>';
    	}
	}
	if($codulieu == 0){
	    echo "<p>Chưa có đánh giá nào!!</p>";
	}
	if(isset($_SESSION['IDTK']) == FALSE){
	    echo "<p>Bạn chưa đăng nhập. Yêu cầu đăng nhập để có thể ghi đánh giá!!</p>";
	}
 ?>

