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
  //$mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = '587';
  $mail->SMTPAuth=true;
  $mail->SMTPSecure = 'tls';

  $mail->isHTML(true);
  $mail->Username = 'AmirMathiasenPortfolioWebsite@gmail.com';
  $mail->Password = 'kc9aqj5391';

  $mail->setFrom($InputEmail,$headers);
  $mail->addAddress('amirmathiasen@gmail.com');
  $mail->addReplyTo($InputEmail);

  $mail->Subject = $InputSubject;
  $mail->Body = $txt;

  if (!$mail->send()) {
    echo "Message could not be sent!";
  }
  else {
    echo "Message has been sent!";
  }

  //mail($mailTo, $InputSubject, $txt, $headers);
  header("Location: contact?mailsend");
}

?>
