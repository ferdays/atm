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
<title> E - Banking | Transfer Uang </title>
<link rel='stylesheet' type='text/css' href='../style.css'>
<script type="text/javascript" src="../js/jquery-1.4.2.js"></script>
<script type='text/javascript' src="../js/jquery.autocomplete.js"></script>
<link rel="stylesheet" type="text/css" href="../js/jquery.autocomplete.css" />
<script type="text/javascript">
$(document).ready(function() {
	$("#idterima").autocomplete("source.php", {
		width: 140,
		matchContains: true,
		selectFirst: true
	});
});
</script>
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
			<center> <font size='5px'>E - Banking Page <span class='yellow'><a href='nasabah.php'>Home Nasabah</a></span> / <span class='yellow'><a href='nasabah.php'>Menu</a></span> / <a href='transfer.php'><span class='yellow'> Transfer Uang</span></a></font> </center>
			<br>
			<div id='wadahmenu'>
			<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='setor.php'>&nbsp;Setor Uang</a></font></div>
			<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='transfer.php'>&nbsp;Transfer</a></font></div>
			<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='riwayat.php'>&nbsp;Riwayat</a></font></div>
			<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='bayar.php'>&nbsp;Bayar</a></font></div>
			<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='saldo.php'>&nbsp;Lihat Saldo</a></font></div>				
			</div>
			<div id="isi">
				<font class='s'> &nbsp; Transfer Uang</font>
				<br><br><br>
				<form action='inserttransfer.php' method='post'>
					<label for='noatm'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;No ATM Anda : </font></label>
					<br>&nbsp; &nbsp;&nbsp;&nbsp;<input name='idkirim' id='idkirim' value='<?php echo $_SESSION['no'] ?>' readonly></input><br><br>
					<label for='saldo'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;Sisa Saldo Anda : </font></label><br>
					&nbsp; &nbsp;&nbsp;&nbsp;<input name='saldo' id='saldo' value='<?php echo $total ?>' readonly><br><br>
					<label for='tujuan'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;No Rekening Tujuan : </font></label><br>
					&nbsp; &nbsp;&nbsp;&nbsp;<input name='idterima' id='idterima'></input><br><br>
					<label for='uang'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;Nominal Transfer : </font></label>
					<select name="nominal">
					<option value="500000">Rp 500.000</option>
					<option value="1000000">Rp 1.000.000</option>
					<option value="1500000">Rp 1.500.000</option>
					<option value="3000000">Rp 3.000.000</option>
					<option value="5000000">Rp 5.000.000</option>
					<option value="10000000">Rp 10.000.000</option>
					<option value="50000000">Rp 50.000.000</option>
					</select><br><br>
					<label for='pesan'><font class='sk'>&nbsp; &nbsp;&nbsp;&nbsp;Pesan : </font></label><br>
					&nbsp; &nbsp;&nbsp;&nbsp;<input name='pesan' id='pesan'></input><br><br>
					<input type='submit' id='submit' value='Submit'></input>
				</form>
			</div>
		</article>
	</div>
</body>
</html>