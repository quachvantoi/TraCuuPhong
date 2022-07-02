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
              <h3 class="page-title"> Biểu đồ ADMIN </h3>
            </div>
            <div class="row">
              <!-- <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Line chart</h4>
                    <canvas id="lineChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div> -->
              <div class="col-lg-1"></div>
              <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <canvas id="barChart" style="height:230px"></canvas>
                  </div>
                </div>
              </div>
            </div>
<!--             <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Area chart</h4>
                    <canvas id="areaChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doughnut chart</h4>
                    <canvas id="doughnutChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pie chart</h4>
                    <canvas id="pieChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Scatter chart</h4>
                    <canvas id="scatterChart" style="height:250px"></canvas>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

          <!-- partial -->
        </div>
    </div>



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
	<script>
          let myChart = document.getElementById('barChart').getContext('2d');
          // Global Options
          // Chart.defaults.global.defaultFontFamily = 'Lato';
          Chart.defaults.global.defaultFontSize = 18;
          Chart.defaults.global.defaultFontColor = '#111';
    
          let massPopChart = new Chart(myChart, {
            type:'pie', //loại biểu đồ: bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data:{
              labels:[
                  <?php
                    include('../ketnoi.php');
                    $data = '';
                    //lấy data
                    $tvc="select * from KhuVuc";
                    $tvc_1=mysqli_query($connect,$tvc);
                    while($tvc_2=mysqli_fetch_array($tvc_1))
                    {
                      if($tvc_2!=false)
                      {
                          echo "'".$tvc_2['TenKVTV']."', ";
                        $data = $data.$tvc_2['SoLanTimKiem'].",";
                      }
                    }
                      
                  ?>
                ],
              datasets:[{
                label:'Số lượt tìm kiếm',
                data:[<?php echo $data; ?>],
                //backgroundColor:'green',
                backgroundColor: [
			        'rgba(255, 99, 132, 0.5)',
			        'rgba(54, 162, 235, 0.5)',
			        'rgba(255, 206, 86, 0.5)',
			        'rgba(75, 192, 192, 0.5)',
			        'rgba(153, 102, 255, 0.5)',
			        'rgba(255, 159, 64, 0.5)',
			        'rgba(51, 102, 153,0.5)',
			        'rgba(0, 153, 153,0.5)',
			        'rgba(51, 204, 255,0.5)',
			        'rgba(153, 102, 255,0.5)',
			        'rgba(0, 255, 153,0.5)',
			        'rgba(255, 102, 255,0.5)',
			        'rgba(204, 255, 153,0.5)',
			        'rgba(255, 0, 102,0.5)',
			        'rgba(255, 204, 102,0.5)',
			        'rgba(204, 102, 0,0.5)',
			        'rgba(153, 51, 51,0.5)',
			        'rgba(255, 99, 132, 0.5)',
			        'rgba(54, 162, 235, 0.5)',
			        'rgba(255, 206, 86, 0.5)',
			        'rgba(75, 192, 192, 0.5)',
			        'rgba(153, 102, 255, 0.5)',
			        'rgba(255, 159, 64, 0.5)',
			        'rgba(51, 102, 153,0.5)',
			        'rgba(0, 153, 153,0.5)',
			        'rgba(51, 204, 255,0.5)',
			        'rgba(153, 102, 255,0.5)',
			        'rgba(0, 255, 153,0.5)',
			        'rgba(255, 102, 255,0.5)',
			        'rgba(204, 255, 153,0.5)',
			        'rgba(255, 0, 102,0.5)',
			        'rgba(255, 204, 102,0.5)',
			        'rgba(204, 102, 0,0.5)',
			        'rgba(153, 51, 51,0.5)',
			        'rgba(255, 99, 132, 0.5)',
			        'rgba(54, 162, 235, 0.5)',
			        'rgba(255, 206, 86, 0.5)',
			        'rgba(75, 192, 192, 0.5)',
			        'rgba(153, 102, 255, 0.5)',
			        'rgba(255, 159, 64, 0.5)',
			        'rgba(51, 102, 153,0.5)',
			        'rgba(0, 153, 153,0.5)',
			        'rgba(51, 204, 255,0.5)',
			        'rgba(153, 102, 255,0.5)',
			        'rgba(0, 255, 153,0.5)',
			        'rgba(255, 102, 255,0.5)',
			        'rgba(204, 255, 153,0.5)',
			        'rgba(255, 0, 102,0.5)',
			        'rgba(255, 204, 102,0.5)',
			        'rgba(204, 102, 0,0.5)',
			        'rgba(153, 51, 51,0.5)',
			      ],
			      borderColor: [
			        'rgba(255,99,132,1)',
			        'rgba(54, 162, 235, 1)',
			        'rgba(255, 206, 86, 1)',
			        'rgba(75, 192, 192, 1)',
			        'rgba(153, 102, 255, 1)',
			        'rgba(255, 159, 64, 1)',
			        'rgba(51, 102, 153,1)',
			        'rgba(0, 153, 153,1)',
			        'rgba(51, 204, 255,1)',
			        'rgba(153, 102, 255,1)',
			        'rgba(0, 255, 153,1)',
			        'rgba(255, 102, 255,1)',
			        'rgba(204, 255, 153,1)',
			        'rgba(255, 0, 102,1)',
			        'rgba(255, 204, 102,1)',
			        'rgba(204, 102, 0,1)',
			        'rgba(153, 51, 51,1)',
			        'rgba(255,99,132,1)',
			        'rgba(54, 162, 235, 1)',
			        'rgba(255, 206, 86, 1)',
			        'rgba(75, 192, 192, 1)',
			        'rgba(153, 102, 255, 1)',
			        'rgba(255, 159, 64, 1)',
			        'rgba(51, 102, 153,1)',
			        'rgba(0, 153, 153,1)',
			        'rgba(51, 204, 255,1)',
			        'rgba(153, 102, 255,1)',
			        'rgba(0, 255, 153,1)',
			        'rgba(255, 102, 255,1)',
			        'rgba(204, 255, 153,1)',
			        'rgba(255, 0, 102,1)',
			        'rgba(255, 204, 102,1)',
			        'rgba(204, 102, 0,1)',
			        'rgba(153, 51, 51,1)',
			        'rgba(255,99,132,1)',
			        'rgba(54, 162, 235, 1)',
			        'rgba(255, 206, 86, 1)',
			        'rgba(75, 192, 192, 1)',
			        'rgba(153, 102, 255, 1)',
			        'rgba(255, 159, 64, 1)',
			        'rgba(51, 102, 153,1)',
			        'rgba(0, 153, 153,1)',
			        'rgba(51, 204, 255,1)',
			        'rgba(153, 102, 255,1)',
			        'rgba(0, 255, 153,1)',
			        'rgba(255, 102, 255,1)',
			        'rgba(204, 255, 153,1)',
			        'rgba(255, 0, 102,1)',
			        'rgba(255, 204, 102,1)',
			        'rgba(204, 102, 0,1)',
			        'rgba(153, 51, 51,1)',
			      ],
                borderWidth:1,
                hoverBorderWidth:3,
                fill: false,
                hoverBorderColor:'#000'
              }]
            },
            options:{
              title:{
                display:true,
                text:'Biểu đồ số lượt tìm kiếm',
                fontSize:25
              },
              legend:{
                display:true,
                position:'right',
                labels:{
                  fontColor:'#000'
                }
              },
              layout:{
                padding:{
                  left:50,
                  right:0,
                  bottom:0,
                  top:0
                }
              },
              tooltips:{
                enabled:true
              }

            }
          });
        </script>
        <?php
            include("../RM_QC.php");
        ?>
</body>
</html>