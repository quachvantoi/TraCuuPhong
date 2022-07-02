<?php
    include("PHPMailer/src/PHPMailer.php");
    include("PHPMailer/src/Exception.php");
    include("PHPMailer/src/OAuth.php");
    include("PHPMailer/src/POP3.php");
    include("PHPMailer/src/SMTP.php");
     
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    $mydate=getdate(date("U"));
    $tenfile = $mydate["mday"]."-". $mydate["mon"]."-". $mydate["year"].".txt";

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'quachvantoi1712@gmail.com';                 // SMTP username
        $mail->Password = 'ifiunpodskvpwcse';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
     
        //Recipients
        $mail->setFrom('quachvantoi1712@gmail.com', 'Toi');
        
        $mail->addAddress('toi01285462153@gmail.com', 'Văn Tới người nhận');     // Add a recipient
        // $mail->addAddress('luonghuyhoang98@gmail.com', 'Huy Hoàng');               // Name is optional
        
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
     
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('../log_data/'.$tenfile, $tenfile);    // Optional name
     
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'BOT log data - TraCuuPhong!!';
        $mail->Body    = 'Data đã log được ngày: '. date("d/m/Y");
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
?>