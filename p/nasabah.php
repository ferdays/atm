<?php
include ('../koneksi.php')
?>
<?php
session_start();


if(!isset($_SESSION['no'])){
    header("location:../index.php");
}


if($_SESSION['level']!="nasabah"){
    die("Anda Belum Login");
}
$tampil = mysql_query("SELECT nama from noatm where no='$_SESSION[no]'");
list($nampil) = mysql_fetch_array($tampil);
?>
<html>
<head>
<title> E - Banking | Nasabah </title>
<link rel='stylesheet' type='text/css' href='../style.css'>
</head>
<body>
	<div id='wrapper'>
		<header>
			<img src='../img/logo.png' height='100px' align='left'>
			<span class='menu'>
				<a href='#'>Home</a>
				<a href='#'>Service</a>
				<a href='#'>About</a>
				<a href='#'>Contact</a>
				<a href=../login.php?op=out>Logout</a>
			</span>
		</header>
		<br><br><br><br><br><br><br>
		<article>
			<center> <font size='5px'>E - Banking Page <span class='yellow'><a href='#'>Home Nasabah</a></span> / <span class='yellow'><a href='#'>Menu</a></span> <br> Selamat Datang <span class='green'><a href='#'><?php echo $nampil ?></a></span></font> </center>
			<br>
			<a href='setor.php'><div id='menu1'>
				<br><br><br><br><br><br><br>
				<center><font class='k'> Setor Uang </font></center>
			</div>
			</a>
			<a href="bayar.php"><div id='menu6'>
				<br><br><br><br><br><br><br>
				<center><font class='k'> Pembayaran </font></center>
			</div>
			</a>
			<a href="transfer.php"><div id='menu2'>
				<br><br><br><br><br><br><br>
				<center><font class='k'> Transfer Uang </font></center>
			</div>
			</a>
			<a href="riwayat.php"><div id='menu3'>
				<br><br><br><br><br><br><br>
				<center><font class='k'> Riwayat Isi Uang </font></center>
			</div>
			</a>
			<a href="saldo.php"><div id='menu5'>
				<br><br><br><br><br><br><br>
				<center><font class='k'> Lihat Saldo </font></center>
			</div>
			</a>
			<a href="saldo.php"><div id='menu4'>
				<center><font class='k'> Pemberitahuan </font></center>
				<center><iframe src='pemberitahuan.php' width='700px' style='border:none;'></iframe></center>
			</div>
			</a>
		</article>
	</div>
</body>
</html>