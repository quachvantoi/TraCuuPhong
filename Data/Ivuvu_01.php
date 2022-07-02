<?php
include('../simple_html_dom.php');
include('Data_update.php');
include('log_data/log_data.php');
include("Data_Ivuvu.php");


$mydate=getdate(date("U"));
$tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";
XoaBang();
$stt = Count_data() + 1;
$dsLink=array("Da Nang"=>"https://www.ivivu.com/khach-san-da-nang",
            "Quang Ninh"=>"https://www.ivivu.com/khach-san-quang-ninh",
            "Ninh Thuan"=>"https://www.ivivu.com/khach-san-ninh-thuan",
            "Son La"=>"https://www.ivivu.com/khach-san-son-la",
            "Kon Tum"=>"https://www.ivivu.com/khach-san-kon-tum");

foreach($dsLink as $diadiem=>$link)
  {
    $IDKV = KT_khuvuc($diadiem);
    if($IDKV != "False")
    {
        getdata($link, $IDKV);
    }
  }
KetThucCao();


tongket($tenfile, Count_data());
// tongket($tenfile, ($stt-1));
?>