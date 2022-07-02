<?php
    function luu_log_TEN($tenKS, $stt){
        $mydate=getdate(date("U"));
        $tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt"; 
        $fh = fopen($tenfile, 'a');
        fwrite($fh, "\n--------------------------------------------\n\n");
        fwrite($fh, "     STT: ".$stt."\n     Tên: ".$tenKS."\n");
        fclose($fh);
    }
    function luu_log_Thong_tin($DiaChi, $Gia, $HinhAnh, $LinkChiTiet, $Tranglay){
        $mydate=getdate(date("U"));
        $tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt"; 
        $fh = fopen($tenfile, 'a');
        fwrite($fh, " Địa chỉ: ".$DiaChi."\n     Giá:".$Gia."\nHình ảnh:".$HinhAnh."\nLink chi tiết:".$LinkChiTiet."\nĐược lấy từ trang: ".$Tranglay."\n" );
        fclose($fh);
    }
    
    function tongket($tenfile, $stt){
        $content = file_get_contents($tenfile);
        $fh = fopen($tenfile, 'w+');
        // fwrite($fh, "Hôm nay ".str_replace('log_data/','',str_replace(".txt", '', $tenfile)));
        fwrite($fh, "\n---------------------------\nTổng số hàng lấy được: ".$stt."\n" );
        fwrite($fh, $content);
        fclose($fh);
    }

?>