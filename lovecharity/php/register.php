<?php
include ("database.php");
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
if ($email==null) {
	echo "email is null";
}else{
	echo $email;
}
if ($name==null) {
	echo "name is null";
}else{
	echo $name;
}

echo $password;
?>