<?php
session_start();
$user = $_SESSION["Account"];
if(!isset($_SESSION["Account"]) || ($_SESSION["Account"] == "")){
	header("Location:login.html");
}
else{
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>個人頁面</title>
	<style>
			html,body {
			  width: 100%;
			  height: 100%;
			  margin: 0;
			  padding: 0;
			  background:url('image/名片背面.png')  no-repeat center center;
			  background-size:cover;
			  background-attachment:fixed;
			  background-color:#CCCCCC;
			  color: white;  
			}

			#container {
			  width: 100%;
			  height: 100%;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			}
			.text{
				width: 500px;
				height: 30px;
			}
		</style>
		<style>
			.button {
			    background-color: #4CAF50; /* Green */
			    border: none;
			    color: white;
			    padding: 15px 32px;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    margin: 4px 2px;
			    cursor: pointer;
			    -webkit-transition-duration: 0.4s; /* Safari */
			    transition-duration: 0.4s;
			}
			.button1:hover {
			    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
			}
		</style>
</head>

<div id="container"><center>
<h2>嗨！<?php echo $user;?>， 歡迎使用</h2>
<a href="logout.php" ><button class="button button1">登出</button></a>

</div></center>
</body>
</html>
<?php } ?>