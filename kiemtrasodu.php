<?php
// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value
 
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();
 
    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
 
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }
 
    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
 
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 
    $result = curl_exec($curl);
 
    curl_close($curl);
 
    return $result;
}
function laysodu(){
    // $datajson = CallAPI('GET', 'http://rest.esms.vn/MainService.svc/json/GetBalance/D7C564C0022D6C29BA19729F09C4E0/519E0B50BCC80730E5443C5296BF57');
    $datajson = CallAPI('GET', 'http://rest.esms.vn/MainService.svc/json/GetBalance/E93E4909EF8DDDBD03F9B906EA550E/4A4C582C8568E20EA5B54A25C41F19');
    $arrvalue = json_decode($datajson, true);
    return $arrvalue['Balance'];
    // return 500;
}
?>