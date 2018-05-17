<?php
session_start();

    $From = 'claude.bugeja.b42219@mcast.edu.mt'; #later
    $Pass = "Mcast11001";
    $emailTo = $_SESSION['Email'];
    require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/PHPMailerAutoload.php'); #Superglobal

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->isHtml(true);
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.office365.com";
    #$mail->SMTPDebug = 2; #include client and server messages
    $mail->Port = 587;
    #$mail->Port = 465; #change to ssl SMTPSecure
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $From;
    $mail->Password = $Pass;

    $mail->From = $From;
    $mail->AddAddress($emailTo); #later
    $mail->Subject = 'test';
    $mail->Body = "Payment was successfully transmitted items will arrive shortly";

    #$mail->WordWrap = 50;


    if(!$mail->Send()) {
//        echo "<script type='text/javascript'>alert('Account unsuccessfully created');</script>";

        echo "There was a problem with payment";
    } else {
//        echo "<script type='text/javascript'>alert('Account successfully created');</script>";
        header('Location: Cart.php');
    }
?>