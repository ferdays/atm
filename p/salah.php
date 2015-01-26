<?php
include ('../koneksi.php')
?>
<?php
$query = mysql_query ("SELECT * FROM noatm where level='nasabah' ");
$jumlah= mysql_num_rows ($query);
?>
<html>
<head>
<title> Klinik </title>
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
			</span>
		</header>
		<br><br><br><br><br><br><br>
		<article>
			<center> <font size='5px'>Selamat Datang Di <span class='yellow'><a href='#'>E - Banking</a></span> Kami Berusaha Membuat Anda <span class='green'><a href='#'>Nyaman</a></span> <br>Dengan Sistem Yang Kami Buat</font> </center>
			<br>
			<div id='form'>
				<font class='sk'><center>PIN Anda Tidak Ada Di Database Kami </center> </font>
				<br><font class='lk'>Login Disini</font>
				<form method='post' action="../login.php?op=in" style='padding:20px;'>
					<label for='noatm'><font class='k'>16 Digit No ATM Anda</font></label><br>
					<input name='noatm' id='noatm' placeholder='' required ></input>
					<input name='submit' id='submit' type='submit' value='Login'></input>
				</form>
				<img src='../img/office.png' style='margin-left:15px;' height='100px' align='left'> <font class='k'> <br><br> &nbsp; +6281910320545 </font>
			</div>
			<div id='jumlahorang'>
				<center><br><font class='b' style='margin-left:-10px;'><?php echo $jumlah ?><br></font><font class='sk'> Nasabah <br>Ada Disini</font></center>
			</div>
			<div id='jumlahsetia'>
				<center><br><font class='b' style='margin-left:-10px;'>15<br></font><font class='sk'> Transaksi Berhasil<br> Dilakukan Disini</font></center>
			</div>
			<div id='jumlahpegawai'>
				<img src='../img/like.png' height='150px' align='left' style='margin-top:10px;margin-left:15px;'><font class='sk'> <br>Kembangkan Uang Anda Dengan <b>E - Banking</b> <br> Nikmati Bunga Deposito <b>7,75% P.A</b> Dengan Penempatan Mulai Dari Rp 8 Juta </font></center>
			</div>
		</article>
	</div>
</body>
</html>