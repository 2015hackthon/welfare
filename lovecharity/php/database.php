<?php
// lionfree 的帳號密碼
$host='localhost';
$user='u6381666'; // 登入MySQL 的使用者帳號
$pass='528-cxs'; // 使用者的密碼
$dbname='u6381666_lovecharity'; // 資料庫名稱

/*$host='localhost:3306';
$user='root';
$pass='root';
$dbname='lovecharity';*/

$conn = new mysqli($host,$user,$pass,$dbname)or die ("Error".mysqli_error($conn));
if ($conn){
  $conn -> set_charset('utf8');
  //echo "Build connection ! <br>";
}

?>