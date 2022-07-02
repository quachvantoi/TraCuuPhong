<?php
// Define một function để xuất các file trong một thư mục
function outputFiles($path){
    // Kiểm tra thư mục có tồn tại hay không
    if(file_exists($path) && is_dir($path)){
        // Quét tất cả các file trong thư mục
        $result = scandir($path);
        
        // Lọc ra các thư mục hiện tại (.) và các thư mục cha (..)
        $files = array_diff($result, array('.', '..'));
        
        if(count($files) > 0){
            $data = "";
            // Lặp qua mảng đã trả lại
            foreach($files as $file){
                if(is_file("$path/$file")){
                    // Hiển thị tên File
                    $data = $data." - ".$file;
                } else if(is_dir("$path/$file")){
                    // Gọi đệ quy hàm nếu tìm thấy thư mục
                    outputFiles("$path/$file");
                }
            }
            return $data;
        } else{
            echo "ERROR: Không có file nào trong thư mục.";
            return FALSE;
        }
    } else {
        echo "ERROR: Thư mục không tồn tại.";
        return FALSE;
    }
}
 
// Gọi hàm
// $a = outputFiles("Image");
// echo $a;

// $pos = strpos($a,"modal_yone.png");
// if($pos != FALSE){
//     echo "co";
// }
// else
// {
//     echo "không";
// }
?>