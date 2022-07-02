<?php
    function tongket(){
        $fh = fopen('TK_slData.txt', 'r+');
        
        $data = fgets($fh);
        $data = str_replace("\n","",$data);
        $labels = fgets($fh);
        fclose($fh);
        echo $data;
        echo $labels;
        include('../ketnoi.php');
        $tv="SELECT COUNT(IDThongTin) AS sl FROM ThongTinPhong";
        $tv_1 = mysqli_query($connect,$tv);
        $tv_2=mysqli_fetch_array($tv_1);
        
        $fh = fopen('TK_slData.txt', 'w+');
        $data = $data.",".$tv_2['sl'];
        $labels = $labels.",'".date("d/m/Y")."'" ;
        
        echo "<br>".$data;
        echo $labels;
        
        fwrite($fh, $data."\n".$labels );
        fclose($fh);
    }
    tongket();
    
?>