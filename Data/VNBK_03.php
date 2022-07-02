<?php
include('../simple_html_dom.php');
include('Data_update.php');
include('log_data/log_data.php');
include("Data_VNBooking.php");


$mydate=getdate(date("U"));
$tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";
XoaBang();
$stt = Count_data() + 1;
$dsLink=array("Quang Ninh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-ninh.html",
            "Long An"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-long-an.html",
            "Quang Nam"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tai-quang-nam.html",
            "Ben Tre"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ben-tre.html",
            "Yen Bai"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-yen-bai.html",
            "Thanh Hoa"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-thanh-hoa.html",
            "Ha Tinh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ha-tinh.html",
            "Phu Tho"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phu-tho.html",
            "Quang Binh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-binh.html",
            "Binh Dinh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-binh-dinh.html");

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