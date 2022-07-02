<?php
include('../simple_html_dom.php');
include('Data_update.php');
include('log_data/log_data.php');
include("Data_VNBooking.php");


$mydate=getdate(date("U"));
$tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";
XoaBang();
$stt = Count_data() + 1;
$dsLink=array("Quang Tri"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-tri.html",
            "Tuyen Quang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tuyen-quang.html",
            "Cao Bang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-cao-bang.html",
            "Bac Kan"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-bac-kan.html",
            "Thai Nguyen"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-thai-nguyen.html",
            "Kon Tum"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-kon-tum.html",
            "Lang Son"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-lang-son.html");

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