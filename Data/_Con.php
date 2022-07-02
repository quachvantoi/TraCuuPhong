<?php
    function HoanThanhData(){
        include('ketnoi.php');
        $t="select max(ID) as ID from CronT";
        $tv=mysqli_query($connect,$t);
        $tv2=mysqli_fetch_array($tv);
        $a = substr($tv2['ID'],0) + 1;
        $mydate=getdate(date("U"));
        $tv="INSERT INTO `CronT`(`ID`, `NgayCapNhat`) VALUES ('". $a ."','". $mydate["mday"]." ". $mydate["mon"]." ". $mydate["year"] ."');";
        echo $tv;
        mysqli_query($connect,$tv);
    }
    // HoanThanhData();

?>