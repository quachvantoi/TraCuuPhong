<?php
include('../simple_html_dom.php');
include('Data_update.php');
include('log_data/log_data.php');
include("Data_VNBooking.php");


$mydate=getdate(date("U"));
$tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";
XoaBang();
$stt = Count_data() + 1;
$dsLink=array("Binh Thuan"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-binh-thuan.html",
            "Ninh Thuan"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ninh-thuan.html",
            "Thua Thien Hue"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-thua-thien-hue.html",
            "Ha Giang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ha-giang.html",
            "Phan Thiet"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-phan-thiet.html",
            "Nghe An"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-nghe-an.html",
            "Ca Mau"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-ca-mau.html",
            "An Giang"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-an-giang.html",
            "Quang Ngai"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-quang-ngai.html",
            "Tay Ninh"=>"https://www.vietnambooking.com/hotel/vietnam/khach-san-tay-ninh.html");

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