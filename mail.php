<?php 
if(isset($_POST['umail']) && $_POST['umail'] !="" ){

$uname=$_POST['name'];
$umail=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];

$to ="workprograz@gmail.com";

$body .= "Kimdən:".$uname. "\r\n";
$body .= "Email:".$umail. "\r\n";
$body .= "Mesaj:".$message. "\r\n";

mail($to,$subject,$body);

}


?>