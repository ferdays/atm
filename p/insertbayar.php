
<?php
include ('../koneksi.php');
$no = $_POST['noatm'];
$uang = $_POST['saldo'];
$bayar = $_POST['uang'];
$hasil = $uang - $bayar;


if ($uang > $bayar) {
	$query = mysql_query("update totaluang set uang='$hasil' where no ='$no'")or die (mysql_error());
	if ($query) {
		header ('location:suksesbayar.php');
	}
	
	else {
		header ("location:gagal.php");
	}
	}
else if ($uang < $bayar) {
	header ("location:gagal.php");
}
?>