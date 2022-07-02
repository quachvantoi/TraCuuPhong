<style type="text/css"> 
    .search {
      width: 500px;
      height: 40px;
      margin-left: 70vh;
      margin-bottom: 25px;
      background: white;
      border-radius: 20px;
      border: 1px solid #fff;
    }
    .search input {
      width: 370px;
      padding: 10px 5px;
      float: left;
      color: black;
      font-size: 16px;
      border: 0;
      background: transparent;
      border-radius: 3px 0 0 3px;
    }
    .search input:focus {
      outline: 0;
      background: transparent;
    }
    .search button {
      position: relative;
      float: right;
      border: 0;
      padding: 0;
      font-size: 16px;
      cursor: pointer;
      height: 40px;
      width: 120px;
      color: black;
      background: transparent;
      border-left: 1px solid #c4c4c4;
      border-radius: 0 20px 20px 0;
    }
    .search button:hover {
      background: #c1c1c1;
      color: #444;
    }
    .search button:active {
      box-shadow: 0px 0px 12px 0px #e1e1e1;
    }
    .search button:focus {
      outline: 0;
    }
    
    
    .text_hiden {
        overflow: hidden;
        -webkit-line-clamp: 2;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }
    .Loc {
        margin-top: 50px;
        font-size: 16px;
    }
    .Loc select {
        margin-right: 20px;
        padding: 5px;
    }
    .search::after {
        content: 'Địa điểm:';
        position: relative;
        left: -16%;
        top: -185%;
        color: black;
        font-size: 16px;
    }
    .getfrom p {
        text-align: center;
    }
    img.anhlogo {
        width: 80px;
    }
</style>
<div style="padding-top: 90px;"></div>
<form class="search" action=""  method="post">
      <input type="search" name="Search" list="tim" placeholder="Nhập địa điểm..." value="
        <?php
            function get_user_ip() {
                if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
                        $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
                        return trim($addr[0]);
                    } else {
                        return $_SERVER['HTTP_X_FORWARDED_FOR'];
                    }
                } else {
                    return $_SERVER['REMOTE_ADDR'];
                }
            }
                
                if (isset($_POST['btn_tim'])){
                    echo trim($_POST['Search']) ;
                }
                else{
                    $ip = get_user_ip();
                    $res = file_get_contents("https://www.iplocate.io/api/lookup/$ip");
                    $res = json_decode($res);
                    echo trim($res->city);
                }
        ?>" required>
        <datalist id="tim"> 
            <?php
                $tvc="select * from KhuVuc";
                $tvc_1=mysqli_query($connect,$tvc);
                while($tvc_2=mysqli_fetch_array($tvc_1))
                {
                  if($tvc_2!=false)
                  {
                      echo "<option value='". $tvc_2['TenKVTV'] ."'/>";
                  }
                }
            ?>
            <!--<option value="Đà Nẵng"/>-->
            <!--<option value="Hà Nội"/>-->
            <!--<option value="Hồ Chí Minh"/>-->
        </datalist>
      <button type="submit" name="btn_tim">Search</button>
      <div class="Loc">
          <label for="cars">Loại Phòng:</label>
          <select name="Loai_phong" id="cars">
                <option value="%%">Tất Cả</option>
                <option value="KS" <?php if (isset($_POST['btn_tim'])){
                    if($_POST['Loai_phong'] == 'KS')
                        echo "selected";
                } ?> >Khách Sạn</option>
                <option value="PT" <?php if (isset($_POST['btn_tim'])){
                    if($_POST['Loai_phong'] == 'PT')
                        echo "selected";
                } ?> >Phòng Trọ</option>
          </select>
          <label for="Gia">Sắp xếp theo giá:</label>
          <select name="Gia_phong" id="Gia">
                <option value="ASC"
                <?php if (isset($_POST['Gia_phong'])){
                    if($_POST['Gia_phong'] == 'ASC')
                        echo " selected";
                } ?>
                >Tăng dần</option>
                <option value="DESC" 
                <?php if (isset($_POST['Gia_phong'])){
                    if($_POST['Gia_phong'] == 'DESC')
                        echo " selected";
                } ?>>Giảm dần</option>
          </select>
      </div>
    </form>
<!-- featured section starts  -->

<section class="featured" id="featured">

    

    <div class="box-container">
        <?php
            $ip = get_user_ip();
            $res = file_get_contents("https://www.iplocate.io/api/lookup/$ip");
            $res = json_decode($res);
            $DieuKien = $res->city;
            $loaiphong = '';
            $loaigia = ' ORDER BY Gia ASC';
            
            if (isset($_POST['btn_tim'])){
                $DieuKien = trim($_POST['Search']) ;
                $loaiphong = $_POST['Loai_phong'];
                $loaigia = " ORDER BY Gia ". $_POST['Gia_phong'];
            }
            
            $IDKV = 'WHERE ' ;
            
            $t="select * from KhuVuc WHERE TenKVTV like '%". $DieuKien ."%' or TenKhuVuc like '%".$DieuKien."%';";
            $tv=mysqli_query($connect,$t);
            $tv2=mysqli_fetch_array($tv);
            if($tv2!=false){
                $IDKV = $IDKV." (DiaChi Like '%".$tv2['TenKhuVuc']."%' or  DiaChi Like '%".$tv2['TenKVTV']."%') and Phong.IDKhachSan like '%".$loaiphong."%' and IDKhuVuc ='" .$tv2['IDKhuVuc']."'";
                
                $Solantimkiem = $tv2['SoLanTimKiem'] +1;
                //số lân tìm kiếm
            
            
                $tv="UPDATE `KhuVuc` SET `SoLanTimKiem`= ".$Solantimkiem." WHERE TenKVTV Like '%". $DieuKien ."%' Or TenKhuVuc Like '%". $DieuKien ."%';";
                mysqli_query($connect,$tv);
                
            }
            else{
                //tìm kiếm không có địa điểm đã nhập
                //cần thông báo
                // đã hiển thị tất cả địa điểm
                $IDKV = '';
            }
            
            //điều kiện tìm kiếm nâng cao
            $IDKV = $IDKV . " " . $loaigia;
            
            
            $tv="SELECT * FROM  Phong INNER JOIN ThongTinPhong ON Phong.IDKhachSan = ThongTinPhong.IDKhachSan ".$IDKV;
            $tv_1=mysqli_query($connect,$tv);
            // echo $tv;
            $sodata_layduoc = 0;
            while($tv_2=mysqli_fetch_array($tv_1))
            {
              if($tv_2!=false)
                {
                    $sodata_layduoc ++;
                    if($tv_2['Tranglay'] == "Ivivu.com")
                    {
                        $link_chi_tiet = $tv_2['LinkChiTiet'].'" target="_blank ';
                    }
                    else{
                        $link_chi_tiet="PDPchitiet.php?ten=".$tv_2['TenKhachSan']."&diachi=".$tv_2['DiaChi']."&linkct=".$tv_2['LinkChiTiet']."&id=".$tv_2['IDKhachSan']."&url=".$tv_2['Tranglay'];
                    }
                    $logo = "";
                    if($tv_2['Tranglay'] == "Ivivu.com"){
                        $logo = '<div class="getfrom">
                                    <p>được lấy từ</p>
                                    <a href="'.$tv_2['LinkChiTiet'].'"  target="_blank" ><img class="anhlogo" src="Image/Ivivu.png" alt="Hình Ảnh"></a>
                                </div>';
                    }
                    else if($tv_2['Tranglay'] == "VNBooking.com"){
                        $logo = '<div class="getfrom">
                                    <p>được lấy từ</p>
                                    <a href="'.$tv_2['LinkChiTiet'].'"  target="_blank" ><img class="anhlogo" src="Image/VNBooking.png" alt="Hình Ảnh"></a>
                                </div>';
                    }
                    else{
                        $logo = '<div class="getfrom">
                                    <p>được lấy từ</p>
                                    <a href="'.$tv_2['LinkChiTiet'].'"  target="_blank" ><img class="anhlogo" src="Image/phongtot_logo.png" alt="Hình Ảnh"></a>
                                </div>';
                    }
                    
                    echo '<div class="box">
                    <div class="image-container">
                        <img src="'. $tv_2['HinhAnh'] .'" alt="Hình Ảnh">
                        <!--<div class="icons">
                            <a href="#" class="fas fa-film"><h3>1</h3></a>
                            <a href="#" class="fas fa-camera"><h3>4</h3></a>
                        </div>-->
                    </div>
                    <div class="content">
                        <div class="price">
                            <h3>Giá: '. number_format($tv_2['Gia']) .' VNĐ</h3>
                            '.$logo.'
                        </div>
                        <div class="location">
                            <h3><a class = "text_hiden" href="'. $tv_2['LinkChiTiet'] .'">'. $tv_2['TenKhachSan'] .'</a></h3>
                            <p class = "text_hiden">Địa chỉ: '. $tv_2['DiaChi'] .'</p>
                        </div>
                        <div class="buttons">
                            <a href="'.$link_chi_tiet.'" class="btn">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>';
                }
            }
            if($sodata_layduoc == 0){
                echo 'Không tìm thấy dữ liệu!!!';
            }
        ?>

    </div>
    
</section>

<!-- featured section ends -->
