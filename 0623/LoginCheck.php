<?php
session_start();
$connect = @mysqli_connect("localhost","root","","0619");
if(!$connect){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	exit;
}
mysqli_query($connect,"set names utf8");
if(!isset($_SESSION["Account"]) || ($_SESSION["Account"] == "")) {
	$InputAccount = $_POST["Account"];
	$InputPassWord = $_POST["Passwd"];
	$SearchDB = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM profile where Account ='$InputAccount'"));
	$AccountInDB = $SearchDB["Account"];
	$PassWordInDB = $SearchDB["Passwd"];
	$connect->close();
	if(($AccountInDB == $InputAccount) && ($PassWordInDB == $InputPassWord)){
		$_SESSION["Account"] = $AccountInDB;
		echo "<meta http-equiv=REFRESH content=0;url=personal.php>";
	} else {
		echo "<meta http-equiv=REFRESH content=0;url=login.html>";
	}
}
else{
	echo "<meta http-equiv=REFRESH content=0;url=personal.php>";
}