<?php
    function sendEmail(){   
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'hoaingodong1@gmail.com'; // SMTP username
        $mail->Password = '01644871180';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to    587/465            
        $mail->setFrom('hoaingodong1@gmail.com', 'Ngô Thị Mỹ Hoài' ); 
        $mail->addAddress('hoai.ngo23@student.passerellesnumeriques.org','Hoài xinh'); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = '[STUDENTS FORM CONTACT]';
        $noidungthu = '
        <strong>Firstname: </strong> '.$_POST['firstname'].'<br/>
        <strong>Lastname: </strong> '.$_POST['lastname'].'<br/>
        <strong>Email: </strong> '.$_POST['email'].'<br/>
        <strong>Subject: </strong> '.$_POST['subject'].'<br/>
        <strong>Message</strong>: </strong> '.$_POST['message'].'<br/>';
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        // echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        // echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
 }//function  GuiMail
    if (isset($_POST["add"])){
        if(!empty($_POST['firstname'])&&!empty($_POST['lastname'])&&!empty($_POST['email'])&&!empty($_POST['subject'])&& !empty($_POST['message'])){
            sendEmail();
        }
    }
?>