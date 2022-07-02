<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

</head>
<body>
    <?php
        include("ketnoi.php");
        include("menu.php");
    ?>
    <div style="padding-top: 90px;"></div>
      <div class="container">
        <div class="row">
          <div style="width: 500px; height: 500px; margin: 0 auto;">
            <canvas id="canvas" ></canvas>
          </div>
        </div>
      </div>
      <script>
          let myChart = document.getElementById('canvas').getContext('2d');
          // Global Options
          // Chart.defaults.global.defaultFontFamily = 'Lato';
          Chart.defaults.global.defaultFontSize = 18;
          Chart.defaults.global.defaultFontColor = '#111';
    
          let massPopChart = new Chart(myChart, {
            type:'pie', //loại biểu đồ: bar, horizontalBar, pie, line, doughnut, radar, polarArea
            data:{
              labels:[
              <?php
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
                label:'Population',
                data:[
                  <?php echo $data; ?>
                ],
                //backgroundColor:'green',
                backgroundColor:[
                  'rgba(255, 99, 132)',
                  'rgba(54, 162, 235)',
                  'rgba(120,63,4)',
                  'rgba(76,17,48)',
                  'rgba(153, 102, 255)',
                  'rgba(255, 159, 64)',
                  'rgba(39,123,74)',
                  'rgba(16,0,103)',
                  'rgba(204,0,0)'
                ],
                borderWidth:1,
                borderColor:'#777',
                hoverBorderWidth:3,
                hoverBorderColor:'#000'
              }]
            },
            options:{
              title:{
                display:true,
                text:'Biểu đồ số lần tìm kiếm',
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
    include("RM_QC.php");
?>

</body>
</html>