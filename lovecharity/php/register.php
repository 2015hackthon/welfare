<?php
include ("database.php");
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
if (!preg_match('/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/', $email)) {
	echo "<meta charset='utf-8'><script type='text/javascript'>alert('email格式錯誤');location.replace('http://lovecharity.lionfree.net');</script>";
}else {
	$sql="INSERT INTO `membership`(`name`, `password`, `email`) VALUES ('$name','$password','$email')";
	$result=mysqli_query($conn,$sql) or die('insert error !');
	header("Location:http://lovecharity.lionfree.net");
}

?>