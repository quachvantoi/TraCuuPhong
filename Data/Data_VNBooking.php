<?php
function getdata($link, $IDKV){
    $html = file_get_html($link);

    $tenKS = $html->find('h3.title');
    $DiaChi = $html->find('h4.address');
    $Gia = $html->find('div.price-feature');
    $hinhanh = $html->find('.box-img a img');
    $Linkchitiet = $html->find('.box-img a');
    
    for ($i = 0; $i < count($tenKS); $i++) {
        echo "<br>".$i." ";
        echo "<br>".$tenKS[$i]->plaintext;
        echo "<br>".$DiaChi[$i]->plaintext;
        $gia = str_replace(",", '', $Gia[$i]->plaintext);
        $gia = str_replace("VND", '', $gia);
        echo "<br>".$gia;
        echo "<br>".$hinhanh[$i]->src;
        echo "<br>".$Linkchitiet[$i]->href;
        
        LuuPhong($IDKV ."-KS". $i, $IDKV, $tenKS[$i]->plaintext);
        LuuThongTinPhong($IDKV ."-TTKS".$i ,$IDKV ."-KS". $i,$DiaChi[$i]->plaintext, $gia, $hinhanh[$i]->src, $Linkchitiet[$i]->href, "VNBooking.com");
        
        luu_log_TEN($tenKS[$i]->plaintext, $GLOBALS["stt"]);
        luu_log_Thong_tin($DiaChi[$i]->plaintext, $gia, $hinhanh[$i]->src, $Linkchitiet[$i]->href, 'VNBooking.com');
        $GLOBALS["stt"] ++;
        echo $GLOBALS["stt"];
    }
}

//trước khi thêm link cần kiểm tra trong bảng khu vực đã có hay chưa
// $dsLink=array("Da Nang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-da-nang.html",
//             "Ho Chi Minh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tp-ho-chi-minh.html",
//             "Da Lat"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-da-lat.html",
//             "Nha Trang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-nha-trang.html",
//             "Vung Tau"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-vung-tau.html",
//             "Phu Quoc"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phu-quoc.html",
//             "Sa Pa"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-sapa.html",
//             "Can Tho"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-can-tho.html",
//             "Ha Noi"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ha-noi.html",
//             "Phu Yen"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phu-yen.html",
//             "Binh Thuan"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-binh-thuan.html",
//             "Ninh Thuan"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ninh-thuan.html",
//             "Thua Thien Hue"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-thua-thien-hue.html",
//             "Ha Giang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ha-giang.html",
//             "Phan Thiet"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phan-thiet.html",
//             "Nghe An"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-nghe-an.html",
//             "Ca Mau"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ca-mau.html",
//             "An Giang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-an-giang.html",
//             "Quang Ngai"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-ngai.html",
//             "Tay Ninh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tay-ninh.html",
//             "Quang Ninh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-ninh.html",
//             "Long An"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-long-an.html",
//             "Quang Nam"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tai-quang-nam.html",
//             "Ben Tre"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ben-tre.html",
//             "Yen Bai"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-yen-bai.html",
//             "Thanh Hoa"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-thanh-hoa.html",
//             "Ha Tinh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ha-tinh.html",
//             "Phu Tho"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phu-tho.html",
//             "Quang Binh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-binh.html",
//             "Binh Dinh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-binh-dinh.html",
//             "Quang Tri"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-tri.html",
//             "Tuyen Quang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tuyen-quang.html",
//             "Cao Bang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-cao-bang.html",
//             "Bac Kan"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-bac-kan.html",
//             "Thai Nguyen"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-thai-nguyen.html",
//             "Kon Tum"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-kon-tum.html",
//             "Lang Son"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-lang-son.html");

?>