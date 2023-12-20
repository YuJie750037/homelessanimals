<?php session_start();
$title='登出中...';
unset($_SESSION['Account']);
echo '<meta http-equiv=REFRESH CONTENT=1;url=login.html>';