<?php 
if(isset($_POST['submit'])){
	$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("amrragab28090@gmail.com","My subject",$msg);
}
?>
