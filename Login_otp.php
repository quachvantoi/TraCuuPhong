<?php 
function guiotp($YourPhone, $otp){
		//Visist http://http://esms.vn/SMSApi/ApiSendSMSNormal for more information about API
		//� 2013 esms.vn
		//Website: http://esms.vn/
		//Hotline: 0902.435.340      
	   
		//Huong dan chi tiet cach su dung API: http://esms.vn/blog/3-buoc-de-co-the-gui-tin-nhan-tu-website-ung-dung-cua-ban-bang-sms-api-cua-esmsvn
		//De lay Key cac ban dang nhap eSMS.vn v� vao quan Quan li API 
		// lấy brand name http://rest.esms.vn/MainService.svc/json/GetListBrandname/ApiKey/SecretKey
// 		$APIKey="D7C564C0022D6C29BA19729F09C4E0";
// 		$SecretKey="519E0B50BCC80730E5443C5296BF57";
		
		$APIKey="E93E4909EF8DDDBD03F9B906EA550E";
		$SecretKey="4A4C582C8568E20EA5B54A25C41F19";
        $ch = curl_init();

		
		$SampleXml = "<RQST>"
                               . "<APIKEY>". $APIKey ."</APIKEY>"
                               . "<SECRETKEY>". $SecretKey ."</SECRETKEY>"
                               . "<ISFLASH>0</ISFLASH>"
		               		   . "<SMSTYPE>2</SMSTYPE>"
							   . "<CONTENT>". $otp ."</CONTENT>"
							   . "<BRANDNAME>Baotrixemay</BRANDNAME>"
                               . "<CONTACTS>"
                               . "<CUSTOMER>"
                               . "<PHONE>". $YourPhone ."</PHONE>"
                               . "</CUSTOMER>"                               
                               . "</CONTACTS>"
							   . "</RQST>";
							   		
							   
		curl_setopt($ch, CURLOPT_URL,            "http://api.esms.vn/MainService.svc/xml/SendMultipleMessage_V4/" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,     $SampleXml ); 
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain')); 

		$result=curl_exec($ch);		
		$xml = simplexml_load_string($result);

		if ($xml === false) {
			die('Error parsing XML');   
		}

		//now we can loop through the xml structure
		//Tham khao them ve SMSTYPE de gui tin nhan hien thi ten cong ty hay gui bang dau so 8755... tai day :http://esms.vn/SMSApi/ApiSendSMSNormal
		
// 		print "Ket qua goi API: " . $xml->CodeResult . "\n";   		
}	
?>