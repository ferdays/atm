<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="atm"; // Database name
$con =  mysql_connect($host,$username,$password)   or die(mysql_error());
		mysql_select_db($db_name, $con)  or die(mysql_error());
$q = strtolower($_GET["q"]);
if (!$q) return;
$sql = "select * from noatm where no LIKE '%$q%'";
$querysql = mysql_query($sql);
while($kt = mysql_fetch_array($querysql)) {
	$kata = $kt['no'];
	echo "$kata\n";
}
?>
