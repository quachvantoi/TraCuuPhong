<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
</head>
<body>

<?php

// InterContinental Đà Nẵng Sun Peninsula Resort
// Bãi Bắc, Bán Đảo Sơn Trà - Xem bản đồ
// background-image:url('//cdn1.ivivu.com/iVivu/2019/06/17/17/avatar-icdn-resort-panorama-from-distance-cr-374x280.png')
// /khach-san-da-nang/intercontinental-danang-sun-peninsula-resort

include('simple_html_dom.php');
function getdata($link){
    $html = file_get_html($link);

    $tenKS = $html->find('p.name.limit-length');
    $DiaChi = $html->find('p.address.limit-length');
    $Gia = $html->find('p.price.primary span');
    $hinhanh = $html->find('.img-wrapper .image');
    $Linkchitiet = $html->find('.hotel-item__wrapper a');
    
    for ($i = 0; $i < count($tenKS); $i++) {
        echo "<br>".$i." ";
        echo "<br>".$tenKS[$i]->plaintext;
        
        $diaChi = str_replace(" - Xem bản đồ", '', $DiaChi[$i]->plaintext);
        $img = str_replace("background-image:url('//", '', $hinhanh[$i]->style);
        $img = str_replace("')", '', $img);
        $linkchitiet = "https://www.ivivu.com/". $Linkchitiet[$i]->href;
        echo "<br>".$diaChi;
        // echo "<br>".$Gia[$i]->plaintext;
        echo "<br>".rand(200,600).".000 VND";
        echo "<br>".$img;
        echo "<br>".$linkchitiet;
    }
}

$dsLink=array("Da Nang"=>"https://www.ivivu.com/khach-san-da-nang",
            "Ho Chi Minh"=>"https://www.ivivu.com/khach-san-ho-chi-minh",
            "Da Lat"=>"https://www.ivivu.com/khach-san-da-lat");

foreach($dsLink as $diadiem=>$link)
  {
  echo "Key=" . $diadiem;
  echo "<br>";
  getdata($link);
  }

?>

</body>
</html>