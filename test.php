<?php
require_once './PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->setFrom('lithanm6@gmail.com', 'Admin');
//$mail->addAddress('knive.23@gmail.com', 'User1');
$mail->Subject = 'Test Email';
$mail->isHTML(TRUE);
$mail->Body = '<html>There is a test <strong>mail</strong>.</html>';
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = TRUE;
 
$mail->Username = 'lithanm6@gmail.com';
$mail->Password = 'H245hyt12';
$con=mysqli_connect("localhost","root","test123","m5project");
$sql ="select email , name from mail";
$result = $con->query($sql);
foreach($result as $row){
    $mail->addAddress($row["email"],$row["name"]);
  
}


if (!$mail->send())
{
    echo "Error: " . $mail->ErrorInfo;
}
else
{
    echo "Message sent.";
}
