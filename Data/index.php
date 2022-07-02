<?php
include('../simple_html_dom.php');
include('../Image/dowimage.php');
include('Data_update.php');
include('log_data/log_data.php');

$mydate=getdate(date("U"));
$tenfile = "log_data/".$mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";
XoaBang();
$stt = Count_data() + 1;

include("Data_Phongtro123.php");
KetThucCao();
tongket($tenfile, ($stt-1));
?>