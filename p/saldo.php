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
$query = mysql_query("SELECT uang from totaluang where no='$_SESSION[no]'");
list($total) = mysql_fetch_array($query);
?>
<html>
<head>
<title> E - Banking | Saldo Anda </title>
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
			<center> <font size='5px'>E - Banking Page <span class='yellow'><a href='nasabah.php'>Home Nasabah</a></span> / <span class='yellow'><a href='nasabah.php'>Menu</a></span> / <a href='saldo.php'> <span class='yellow'> Saldo Anda</span></a></font> </center>
			<br>
			<div id='wadahmenu'>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='setor.php'>&nbsp;Setor Uang</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='transfer.php'>&nbsp;Transfer</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='riwayat.php'>&nbsp;Riwayat</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='bayar.php'>&nbsp;Bayar</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='saldo.php'>&nbsp;Lihat Saldo</a></font></div>
			</div>
			<div id="isi">
				<font class='s'> &nbsp; Saldo Uang</font>
				<br><br><br>
				<font class='s'> &nbsp; Saldo Anda <span class='yellow'> Rp <?php echo $total; ?></span></font>
			</div>
		</article>
	</div>
</body>
</html>