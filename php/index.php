<?php 
if(isset($_POST['submit'])){
	$to = "amrragab28090@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@amrragab28090@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
