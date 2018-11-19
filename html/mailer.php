<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mail Sender</title>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
</head>

<body>
<?php

  $requestor      =     $_POST['sender_requestor'];
  $email          =     $_POST['sender_email'];
  $priority       =     $_POST['sender_priority'];

  $source         =     $_POST['source'];
  $destination    =     $_POST['destination'];
  $port           =     $_POST['port'];

  $app            =     $_POST['sender_app'];
  $time           =     $_POST['sender_time'];
  $purpose        =     $_POST['sender_purpose'];


require 'PHPMailerAutoload.php';

if (empty($source)) {
    echo "<H1>NOT COMPLETE</H1>";
    echo "You forgot to complete your form";
    exit();
}

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                // Enable verbose debug output

$mail->isSMTP();                       // Set mailer to use SMTP
$mail->Host     = 'smtp.example.com'; // Specify main and backup SMTP servers
$mail->Port     = 25;                  // TCP port to connect to

$mail->setFrom('example@mail.com', 'Example Mail');  // From email address

$mail->addAddress('example@mail.com', 'Example Mail');  // Add a recipient
$mail->addCC('example@mail.com');
$mail->addCC($email);

$mail->isHTML(true);  // Set email format to HTML

$mail->Subject   = 'Attn: Firewall Change Request from ' . $requestor;
$mail->Body   = '<b>From:</b> ' . $requestor . "<p></p>";
$mail->Body   .= '<b>E-mail:</b> ' . $email . "<p></p>";
$mail->Body   .= '<b>Priority:</b> ' . $priority . "<p></p>";


$mail->Body   .= "<TABLE>";
foreach ($source as $i => $value) {
    $mail->Body   .= "<TR>";
    $mail->Body   .= '<TD><b>Source:</b> ' . $source[$i] . "</TD>";
    $mail->Body   .= '<TD><b>Destination:</b> ' . $destination[$i] . "</TD>";
    $mail->Body   .= '<TD><b>Port:</b> ' . $port[$i] . "</TD>";
    $mail->Body   .= "</TR>";
}
$mail->Body   .= "</TABLE><p></p>";

$mail->Body   .= '<b>Application:</b> ' . $app . "<p></p>";
$mail->Body   .= '<b>How Long Needed:</b> ' . $time . "<p></p>";
$mail->Body   .= '<b>Justification:</b> ' . $purpose;

if (!$mail->send()) {
    echo '<b>Message could not be sent.</b>' . "<p></p>";
    echo 'Mailer Error: ' . $mail->ErrorInfo . "<p></p>";
    echo 'Please click to following link to email the error message to ';
    echo "<a href='"."mailto:example@mail.com?subject=Witty Subject Error&body= " . $mail->ErrorInfo . "'>Example From</a>";
} else {
    ?>

    <script language="javascript" type="text/javascript">
    alert('Email Sent! We will contact you shortly.');
    window.location = 'index.html';
  </script>

<?php
}

?>
Complete
</body>
</html>
