<?php
function getdataPT123($link, $IDKV){
    $html = file_get_html($link);
    $tenKS = $html->find('.block-room-item-title a');
    $DiaChi = $html->find('.block-room-item-address a');
    $Gia = $html->find('.block-room-item-price a');
    $hinhanh = $html->find('img.img-reponsive');
    $Linkchitiet = $html->find('.block-room-item-title a');
    
    for ($i = 0; $i < count($tenKS); $i++) {
        echo "<br>".$i." ";
        echo "<br>".$tenKS[$i]->plaintext;
        echo "<br>".$DiaChi[$i]->plaintext;
        $gia = str_replace(" Đ/tháng", '', $Gia[$i]->plaintext);
        $gia = str_replace(",", '', $gia);
        echo "<br>".$gia;
        echo "<br>".$hinhanh[$i]->src;
        // luuanh($hinhanh[$i]->src, '../Image/Anh-'.$IDKV .'-PT'. $i.'.png');
        echo "<br>".$Linkchitiet[$i]->href;
        
        LuuPhong($IDKV ."-PT". $i, $IDKV, $tenKS[$i]->plaintext);
        LuuThongTinPhong($IDKV ."-TTPT".$i ,$IDKV ."-PT". $i,$DiaChi[$i]->plaintext, $gia, '../Image/Anh-'.$IDKV .'-PT'. $i.'.png' , $Linkchitiet[$i]->href, "phongtot.vn");
        
        luu_log_TEN($tenKS[$i]->plaintext, $GLOBALS["stt"]);
        luu_log_Thong_tin($DiaChi[$i]->plaintext, $gia, $hinhanh[$i]->src, $Linkchitiet[$i]->href, 'phongtot.vn');
        $GLOBALS["stt"] ++;
    }
}


//trước khi thêm link cần kiểm tra trong bảng khu vực đã có hay chưa
$dsLink=array("Da Nang"=>"http://phongtot.vn/tim-kiem?k=&province=48&district=&type%5B%5D=1&price_from=0&price_to=6",
            "Ho Chi Minh"=>"http://phongtot.vn/tim-kiem?k=&province=79&district=&type%5B%5D=1&price_from=0&price_to=6",
            "Ha Noi"=>"http://phongtot.vn/tim-kiem?k=&province=1&district=&type%5B%5D=1&price_from=0&price_to=6");


foreach($dsLink as $diadiem=>$link)
  {
    $IDKV = KT_khuvuc($diadiem);
    if($IDKV != "False")
    {
        getdataPT123($link, $IDKV);
    }
  }

?>