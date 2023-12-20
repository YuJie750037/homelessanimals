<?php
//連接資料庫
$connect = @mysqli_connect("localhost","root","","0619");
if(!$connect){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	exit;
}
mysqli_query($connect,"set names utf8");
$SignUp ="Insert into profile(Account,Passwd,Email,Name) values ('$_POST[Account]','$_POST[Passwd]','$_POST[Email]','$_POST[Name]')";
if(!mysqli_query($connect,$SignUp)){
	die('Error:' . mysqli_error($connect,$SignUp));
}
echo "<meta http-equiv=REFRESH content=0;url=login.html>";
$connect->close();
