<?php
    function LuuPhong($IDKS ,$IDKhuVuc,$TenKS){
        include('ketnoi.php');
        $tv="INSERT INTO Phong 
        	VALUES ('".$IDKS."' ,'".$IDKhuVuc."','".$TenKS."');";
        mysqli_query($connect,$tv);
    }
    
    function LuuThongTinPhong($IDThongTin ,$IDKhachSan,$DiaChi, $Gia, $HinhAnh, $LinkChiTiet, $Tranglay){
        include('ketnoi.php');
        $tv="INSERT INTO ThongTinPhong 
        	VALUES ('".$IDThongTin."' ,'".$IDKhachSan."','".$DiaChi."',".$Gia.",'".$HinhAnh."','".$LinkChiTiet."','".$Tranglay."');";
        mysqli_query($connect,$tv);
    }
    
    function LuuKhuVuc($IDKhuVuc ,$TenKhuVuc){
        include('ketnoi.php');
        $tv="INSERT INTO KhuVuc (IDKhuVuc, TenKhuVuc)
        	VALUES ('".$IDKhuVuc."' ,'".$TenKhuVuc."');";
        mysqli_query($connect,$tv);
    }
    
    function XoaBang(){
        include('ketnoi.php');
        
        $tv="select * from CronT where ID = '1' ";
        $tv_1=mysqli_query($connect,$tv);
        $tv_2=mysqli_fetch_array($tv_1);
        $mydate=getdate(date("U"));
        $today = $mydate["mday"]." ". $mydate["mon"]." ". $mydate["year"];
        if($tv_2['NgayCapNhat'] != $today){
            $tv="DELETE FROM ThongTinPhong";
            mysqli_query($connect,$tv);
            
            
            $tv="DELETE FROM Phong";
            mysqli_query($connect,$tv);
        }
    }
    function KetThucCao(){
        include('ketnoi.php');
        $mydate=getdate(date("U"));
        $today = $mydate["mday"]." ". $mydate["mon"]." ". $mydate["year"];
        $tv="UPDATE `CronT` SET `NgayCapNhat`= '".$today."' WHERE `ID` = '1'";
        echo $tv;
        mysqli_query($connect,$tv);
    }
    function Count_data(){
        include('ketnoi.php');
        $tv="SELECT COUNT(IDThongTin) AS sl FROM ThongTinPhong";
        $tv_1 = mysqli_query($connect,$tv);
        $tv_2=mysqli_fetch_array($tv_1);
        return (int)$tv_2['sl'];
    }
    
    function KT_khuvuc($khuvuc){
        include('ketnoi.php');
        $tv="SELECT * FROM KhuVuc
            WHERE TenKhuVuc = '".$khuvuc."'  ";
        $tv_1= mysqli_query($connect,$tv);
        while($tv_2=mysqli_fetch_array($tv_1))
        {
          if($tv_2!=false)
          {
              return $tv_2["IDKhuVuc"];
          }
        }
        return "False";
    }
    
    function HoanThanhData(){
        include('ketnoi.php');
        $t="select max(ID) as ID from CronT";
        $tv=mysqli_query($connect,$t);
        $tv2=mysqli_fetch_array($tv);
        $a = substr($tv2['ID'],0) + 1;
        $mydate=getdate(date("U"));
        $tv="INSERT INTO `CronT`(`ID`, `NgayCapNhat`) VALUES ('". $a ."','". $mydate["mday"]." ". $mydate["mon"]." ". $mydate["year"] ."');";
        mysqli_query($connect,$tv);
    }
?>