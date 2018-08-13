<?php
include("common/header.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject= $_POST['subject'];
    $body = $_POST['body'];
}
require_once './PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->setFrom('lithanm6@gmail.com', 'Admin');
$mail->Subject = $subject;
$mail->isHTML(TRUE);
$mail->Body =$body ;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = TRUE;

$mail->Username = 'lithanm6@gmail.com';
$mail->Password = 'H245hyt12';
$con=mysqli_connect("localhost","root","test123","m5project");

$sql ="select email,firstname from user where subscription = 1";
$result = $con->query($sql);

foreach($result as $row){
   $mail->addAddress($row["email"],$row["firstname"]);
    
}


if (!$mail->send())
{
    echo 'Error:  . $mail->ErrorInfo';
    
}
else
{
    echo 'Mail successfully sent to all ';
    
}


include("common/footer.php");
?>
