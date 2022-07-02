<?php
include('../simple_html_dom.php');
include('Data_update.php');
include('log_data/log_data.php');
include("Data_Ivuvu.php");


$mydate=getdate(date("U"));
$tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";
XoaBang();
$stt = Count_data() + 1;
$dsLink=array("Vung Tau"=>"https://www.ivivu.com/khach-san-ba-ria-vung-tau",
            "Quang Tri"=>"https://www.ivivu.com/khach-san-quang-tri",
            "Quang Binh"=>"https://www.ivivu.com/khach-san-tinh-quang-binh",
            "Gia Lai"=>"https://www.ivivu.com/khach-san-gia-lai",
            "Dak lak"=>"https://www.ivivu.com/khach-san-daklak");
            
            
            

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