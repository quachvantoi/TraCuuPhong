<?php
include('../simple_html_dom.php');
include('Data_update.php');
include('log_data/log_data.php');
include("Data_VNBooking.php");


$mydate=getdate(date("U"));
$tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";
XoaBang();
$stt = Count_data() + 1;
$dsLink=array("Da Nang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-da-nang.html",
            "Ho Chi Minh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tp-ho-chi-minh.html",
            "Da Lat"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-da-lat.html",
            "Nha Trang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-nha-trang.html",
            "Vung Tau"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-vung-tau.html",
            "Phu Quoc"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phu-quoc.html",
            "Sa Pa"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-sapa.html",
            "Can Tho"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-can-tho.html",
            "Ha Noi"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ha-noi.html",
            "Phu Yen"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phu-yen.html");

foreach($dsLink as $diadiem=>$link)
  {
    $IDKV = KT_khuvuc($diadiem);
    if($IDKV != "False")
    {
        getdata($link, $IDKV);
    }
  }
KetThucCao();



tongket($tenfile, ($stt-1));
?>