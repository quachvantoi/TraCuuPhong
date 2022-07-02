<?php
function luuanh($url, $imgpath){
    // Function to write image into file
    file_put_contents($imgpath, file_get_contents($url));
    // echo "Lưu ảnh thành công!".$imgpath;
}

?>