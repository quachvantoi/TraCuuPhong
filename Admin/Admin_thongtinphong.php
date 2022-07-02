<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN</title>
	<!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <style>
        .navbar .navbar-menu-wrapper {
            transition: width 0.25s ease;
            -webkit-transition: width 0.25s ease;
            -moz-transition: width 0.25s ease;
            -ms-transition: width 0.25s ease;
            color: #9c9fa6;
            padding-left: 39px;
            padding-right: 24px;
            width: calc(100% - 260px);
            height: 70px;
        }
        .data_table{
            height: 600px;
            width: 100%;
            overflow: scroll;
        }
        #toast-container{
        transform: translateY(90px);
        
        }
        .toast-message{
            font-size: 20px;
        }
    </style>
</head>
<body>
	<?php
	    include("header.php");
	?>
	<!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <?php
    	    include("menu.php");
    	?>
        <!-- partial -->
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Thông tin phòng </h3>
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <div class="search-form">
                        <div class="comtainer">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="btn-group" style="width: 700px;">
                                            <input type="text" class="form-control" name="" id="myInput" onkeyup="myFunction()" aria-describedby="helpId"
                                                placeholder="Tìm kiếm...">
                                            <select id="mySelect" class="btn-outline-dark" onchange="doihangcantim()">
                                              <option value="0">Tên</option>
                                              <option value="1">Giá</option>
                                              <option value="2">Địa chỉ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-8 data_table">
                                    <table id="myTable" class="table table-striped table-dark table-hover">
                                            <tr>
                                                <th>Tên</th>
                                                <th>Giá</th>
                                                <th>Địa chỉ</th>
                                                <th>Lấy từ</th>
                                                <th>Thao tác</th>
                                            </tr>
                                            <?php
                                                include("../ketnoi.php");
                                                $tvc="SELECT ThongTinPhong.`IDKhachSan`, `DiaChi`, `Gia`, `Tranglay`, Phong.TenKhachSan   FROM ThongTinPhong INNER JOIN Phong ON ThongTinPhong.`IDKhachSan` = Phong.`IDKhachSan`";
                                                $tvc_1=mysqli_query($connect,$tvc);
                                                
                                                while($tvc_2=mysqli_fetch_array($tvc_1))
                                                {
                                                    if($tvc_2!=false)
                                                    {
                                                        $address = $tvc_2['DiaChi'];
                                                        echo '<tr>
                                                                <td>'.$tvc_2['TenKhachSan'].'</td>
                                                                <td>'.number_format($tvc_2['Gia']).' VND</td>
                                                                <td>'.substr($address,0,strpos($address,",",20)).'<br></br>'.substr($address,strpos($address,",", 20)+1).' </td>
                                                                <td>'.$tvc_2['Tranglay'].'</td>
                                                                <td><a href = "Del_phong.php?id='.$tvc_2['IDKhachSan'].'"><div class="btn btn-danger"><i class="fa fa-delete"></i>Xoá</div></a></td>
                                                            </tr>';
                                                    }
                                                }
                                            ?>
                                    </table>
                                </div>
                                <!-- het cot ben trai -->
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>

          <!-- partial -->
        </div>
    </div>
    <?php
        if (session_id() === ''){
          @session_start();
        }
        if (isset($_SESSION['thongbao'])){
            echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
                <script type="text/javascript">toastr.success("'.$_SESSION['thongbao'].'")</script>';
            unset($_SESSION['thongbao']);
        }
    ?>
    <script>
        var hangcantim = 0;
        function doihangcantim() {
          var x = document.getElementById("mySelect").value;
          hangcantim = x;
        }
        
        function myFunction() {
            console.log(hangcantim);
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[hangcantim];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
    </script>



    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->

    <!-- biểu đồ -->
	<!-- <script src="assets/js/chart.js"></script> -->
	
        <?php
            include("../RM_QC.php");
        ?>
</body>
</html>