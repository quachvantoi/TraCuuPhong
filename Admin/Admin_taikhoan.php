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
              <h3 class="page-title"> Quản lý người dùng </h3>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <table id="myTable" class="table table-striped table-dark table-hover">
                                            <tr>
                                                <th>Tên tài khoản</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Ngày sinh</th>
                                                <th>Quyền</th>
                                                <th>Đổi Trạng thái</th>
                                            </tr>
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
                                                include("../ketnoi.php");
                                                $tvc="SELECT TaiKhoan.IDTaiKhoan, TenTaiKhoan, SDT, DiaChi, MaLoaiTaiKhoan, NgaySinh, TrangThai  FROM TaiKhoan left JOIN ThongTinCaNhan ON TaiKhoan.IDTaiKhoan = ThongTinCaNhan.IDTaiKhoan WHERE TenTaiKhoan != 'ADMIN'";
                                                $tvc_1=mysqli_query($connect,$tvc);
                                                
                                                while($tvc_2=mysqli_fetch_array($tvc_1))
                                                {
                                                    if($tvc_2!=false)
                                                    {
                                                        if($tvc_2['DiaChi'] == ''){
                                                           $diachi = 'chưa cập nhật';
                                                        }
                                                        else{
                                                            $diachi = $tvc_2['DiaChi'];
                                                        }
                                                        if($tvc_2['NgaySinh'] == ''){
                                                           $ngaysinh = 'chưa cập nhật';
                                                        }
                                                        else{
                                                            $ngaysinh = str_replace("00:00:00","",$tvc_2['NgaySinh']);
                                                        }
                                                        if($tvc_2['TrangThai'] == 'Kich Hoat'){
                                                           $trangthai = '<a href = "Doitrangthai.php?id='.$tvc_2['IDTaiKhoan'].'&name='.$tvc_2['TenTaiKhoan'].'&trangthai='.$tvc_2['TrangThai'].'"><div class="btn btn-danger"><i class="fa fa-trash"></i>Khóa</div></a>';
                                                        }
                                                        else{
                                                            $trangthai = '<a href = "Doitrangthai.php?id='.$tvc_2['IDTaiKhoan'].'&name='.$tvc_2['TenTaiKhoan'].'&trangthai='.$tvc_2['TrangThai'].'"><div class="btn btn-info"><i class="fa fa-edit"></i>Kích hoạt</div></a>';
                                                        }
                                                        echo '<tr>
                                                                <td>'.$tvc_2['TenTaiKhoan'].'</th>
                                                                <td>'.$tvc_2['SDT'].'</th>
                                                                <td>'.$diachi.'</th>
                                                                <td>'.$ngaysinh.'</th>
                                                                <td>'.$tvc_2['MaLoaiTaiKhoan'].'</th>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        '.$trangthai.'
                                                                    </div>
                            
                                                                </td>
                                                            </tr>';
                                                    }
                                                }
                                            ?>
                                    </table>
                                </div>
                                <!-- het cot ben trai -->
                                <div class="col-1"></div>
                                <div class="col-3">
                                    <form method="post" action="Add_user.php">
                                        <div class="card text-left">
                                            <div class="card border-primary">
                                                <div class="card-header">Thêm mới người dùng</div>
                                                <div class="card-body text-primary">
                                                    <div class="form-group">
                                                        <label for="">Tên tài khoản</label>
                                                        <input type="text" name="username" id="" class="form-control" placeholder="User Name"
                                                            aria-describedby="helpId">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Mật khẩu</label>
                                                        <input type="password" name="password" id="" class="form-control" placeholder="Password"
                                                            aria-describedby="helpId">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Số điện thoại</label>
                                                        <input type="text" name="SDT" id="" class="form-control" placeholder="Điện thoại"
                                                            aria-describedby="helpId">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Quyền</label>
                                                        <select class="form-control" name="quyen" id="">
                                                            <option>chọn quyền</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="user">User</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-block btn-outline-primary">Thêm mới</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- hett cot ben phai -->
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>

          <!-- partial -->
        </div>
    </div>
    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
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