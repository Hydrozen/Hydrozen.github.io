<?php

require_once('PHPMailer-master/src/PHPMailer.php');



if (isset($_POST['submit']) {

  $InputName = $_POST['InputName'];
  $InputEmail = $_POST['InputEmail'];
  $InputSubject = $_POST['InputSubject'];
  $InputMessage = $_POST['InputMessage'];

  $mailTo = "";
  $headers = "From: ".$InputEmail;
  $txt = "You have recieved an e-mail from ".$InputName.".\n\n".$InputMessage;

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->SMTPAuth=true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = '587';
  $mail->Username = 'AmirMathiasenPortfolioWebsite@gmail.com';
  $mail->Password = 'kc9aqj5391';
  $mail->setFrom($InputEmail,$headers);
  $mail->addAddress('amirmathiasen@gmail.com');
  $mail->addReplyTo($InputEmail);
  $mail->isHTML();
  $mail->Subject = $InputSubject;
  $mail->Body = $txt;

  $mail->Send()

  //mail($mailTo, $InputSubject, $txt, $headers);
  //header("Location: contact?mailsend");
}

?>
