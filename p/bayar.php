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
<title> E - Banking | Bayar </title>
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
			<center> <font size='5px'>E - Banking Page <span class='yellow'><a href='nasabah.php'>Home Nasabah</a></span> / <span class='yellow'><a href='nasabah.php'>Menu</a></span> / <a href='bayar.php'> <span class='yellow'> Pembayaran</span></a></font> </center>
			<br>
			<div id='wadahmenu'>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='setor.php'>&nbsp;Setor Uang</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='transfer.php'>&nbsp;Transfer</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='riwayat.php'>&nbsp;Riwayat</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='bayar.php'>&nbsp;bayar</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='saldo.php'>&nbsp;Lihat Saldo</a></font></div>
			</div>
			<div id="isi">
				<font class='s'> &nbsp; Pembayaran</font>
				<br><br><br>
				<form action='insertbayar.php' method='post'>
					<label for='noatm'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;No ATM Anda : </font></label><input name='noatm' id='noatm' value='<?php echo $_SESSION['no'] ?>' readonly></input><br><br>
					<label for='saldo'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;Sisa Saldo Anda : </font></label>
					<input name='saldo' id='saldo' value='<?php echo $total ?>' readonly><br><br>
					<label for='partner'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;Pilih Tujuan Pembayaran : </font></label>
					<select name="partner">
					<option value="ayopay">AyoPay</option>
					<option value="alfamart">Alfamart</option>
					<option value="smartfren">Smartfren</option>
					<option value="telkomsel">Telkomsel</option>
					<option value="telkomvoucher">Telkom Voucher</option>
					<option value="xl">XL</option>
					</select><br><br>
					<label for='uang'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;Nominal Bayar : </font></label>
					<select name="uang">
					<option value="5000">Rp 5.000</option>
					<option value="10000">Rp 10.000</option>
					<option value="15000">Rp 15.000</option>
					<option value="30000">Rp 30.000</option>
					<option value="50000">Rp 50.000</option>
					<option value="100000">Rp 100.000</option>
					<option value="500000">Rp 500.000</option>
					</select><br><br>
					<label for='noidentitas'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;Nomor : </font></label>
					<input name='noidentitas' id='noidentitas' required><br><br>
					<input type='submit' id='submit' value='Submit'></input>
				</form>
			</div>
		</article>
	</div>
</body>
</html>