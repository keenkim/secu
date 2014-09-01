<?php
$host = "localhost";
$user = "sec";
$passwd = "1234";

$connect = mysql_connect($host, $user, $passwd) or die ("mysql Server Connection Error");
mysql_select_db('apm_db',$connect) or die ("DB Connection Error");
?>
