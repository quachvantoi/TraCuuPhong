<?php
    $connect= mysqli_connect("localhost","id18703555_toi1234","g2ylbROWf(qnIR!y");
    // mysqli_select_db($connect, "DOAN1");
    mysqli_select_db($connect, "id18703555_doantotnghiep");
    mysqli_query($connect, "SET names 'utf8'");
    if(!$connect){
      echo "Không thể kết nối đến Database!".mysqli_connect_error($connect);
    }
?>