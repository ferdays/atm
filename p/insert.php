<?php
include('../koneksi.php');


$noatm=$_POST['noatm'];
$uang=$_POST['uang'];
$saldo = $_POST['saldo'];;
$tanggal=date('d/m/Y H:i:s');
$total = $saldo + $uang;
$update = mysql_query("update totaluang set uang='$total' where no ='$noatm'")or die (mysql_error());
if ($update){
	$query=mysql_query("insert into uang Values('$noatm','$uang','$tanggal','setor uang')") or die (mysql_error());
	if ($query){
        header('location:sukses.php');
        }
        }
?>
