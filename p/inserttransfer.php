<?php
include('../koneksi.php');


$idkirim=$_POST['idkirim'];
$idterima=$_POST['idterima'];
$nominal=$_POST['nominal'];
$pesan=$_POST['pesan'];
$saldo=$_POST['saldo'];
$query = mysql_query("SELECT uang from totaluang where no='$idterima'");
list($total) = mysql_fetch_array($query);

if ($saldo > $nominal) {
	$hasil = $saldo - $nominal;
	$tambah = $total + $nominal;
	$insert = mysql_query("insert into transfer values ('$idkirim','$idterima','$nominal','$pesan')");
	if ($insert) {
		$update = mysql_query ("update totaluang set uang='$hasil' where no ='$idkirim'");
		$update2 = mysql_query ("update totaluang set uang='$tambah' where no ='$idterima'");
		header ('location:suksestransfer.php');
	}
	
	else {
		header ("location:gagal.php");
	}
	}
else if ($saldo < $nominal) {
	header ("location:gagal.php");
}

?>