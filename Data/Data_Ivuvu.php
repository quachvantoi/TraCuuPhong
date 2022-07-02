<?php
function getdata($link, $IDKV){
    $html = file_get_html($link);
    $tenKS = $html->find('p.name.limit-length');
    $DiaChi = $html->find('p.address.limit-length');
    $Gia = $html->find('p.price.primary span');
    $hinhanh = $html->find('.img-wrapper .image');
    $Linkchitiet = $html->find('.hotel-item__wrapper a');
    
    for ($i = 0; $i < count($tenKS); $i++) {
        echo "<br>".$i." ";
        echo "<br>".$tenKS[$i]->plaintext."<br>";
        
        echo $diaChi = str_replace(" - Xem bản đồ", '', $DiaChi[$i]->plaintext);
        echo "<br>";
        
        echo "<br>".rand(200,600).".000 VND";
        $gia = rand(200,600) * 1000;
        echo "<br>";
        $img = str_replace("background-image:url('//", '', $hinhanh[$i]->style);
        $img = str_replace("')", '', $img);
        echo $img = "https://".$img;
        echo "<br>";
        echo $linkchitiet = "https://www.ivivu.com/". $Linkchitiet[$i]->href;
        if($img == "https://")
            break;
        LuuPhong($IDKV ."-KS-ivivu". $i, $IDKV, $tenKS[$i]->plaintext);
        LuuThongTinPhong($IDKV ."-TTKS-ivivu".$i ,$IDKV ."-KS-ivivu". $i,$diaChi, $gia, $img, $linkchitiet, "Ivivu.com");
        
        luu_log_TEN($tenKS[$i]->plaintext, $GLOBALS["stt"]);
        luu_log_Thong_tin($diaChi, $gia, $img, $linkchitiet, 'VNBooking.com');
        $GLOBALS["stt"] ++;
        echo $GLOBALS["stt"];
    }
}

?>