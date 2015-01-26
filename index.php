<?php
include ('koneksi.php')
?>
<?php
$query = mysql_query ("SELECT * FROM noatm where level='nasabah' ");
$jumlah= mysql_num_rows ($query);
$querytransaksi = mysql_query ("SELECT * FROM uang");
$jumlahtransaksi= mysql_num_rows ($querytransaksi);
$query = mysql_query("SELECT SUM(uang) FROM totaluang;");
list($total) = mysql_fetch_array($query);
?>
<html>
<head>
<title> E - Banking | Index </title>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body>
	<div id='wrapper'>
		<header>
			<img src='img/logo.png' height='100px' align='left'>
			<span class='menu'>
				<a href='#'>Home</a>
				<a href='#'>Service</a>
				<a href='#'>About</a>
				<a href='#'>Contact</a>
			</span>
		</header>
		<br><br><br><br><br><br><br>
		<article>
			<center> <font size='5px'>Selamat Datang Di <span class='yellow'><a href='#'>E - Banking</a></span> Kami Berusaha Membuat Anda <span class='green'><a href='#'>Nyaman</a></span> <br>Dengan Sistem Yang Kami Buat</font> </center>
			<br>
			<div id='form'>
				<br><?php include ('iframe1.php'); ?> <br><br>
			</div>
			<div id='jumlahorang'>
				<center><br><font class='b' style='margin-left:-10px;'><?php echo $jumlah ?><br></font><font class='sk'> Nasabah <br>Ada Disini</font></center>
			</div>
			<div id='jumlahsetia'>
				<center><br><font class='b' style='margin-left:-10px;'><?php echo $jumlahtransaksi ?><br></font><font class='sk'> Transaksi Berhasil<br> Dilakukan Disini</font></center>
			</div>
			<div id='jumlahpegawai'>
				<img src='img/like.png' height='150px' align='left' style='margin-top:10px;margin-left:15px;'><font class='s' style='margin-top:15px;display:inline-block;'> <center>Rp <?php echo $total; ?> </font><br> <font class='sk'>Uang Milik Seluruh Nasabah Ada Dibank Ini</font></center>
			</div>
		</article>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer>
			<br><br>
			<img src='img/partner/ayopay.png' style='margin-left:20px;'>
			<img src='img/partner/alfamart.png' style='margin-left:50px;'>
			<img src='img/partner/telkomsel.png' style='margin-left:50px;'>
			<img src='img/partner/xl.png' style='margin-left:50px;'>
			<img src='img/partner/smartfren.gif' style='margin-left:50px;'>
			<img src='img/partner/telkom.png' style='margin-left:50px;'>
		</footer>
	</div>
</body>
</html>