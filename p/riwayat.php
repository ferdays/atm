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
$pin = $_SESSION['no'];
?>
<html>
<head>
<title> E - Banking | Riwayat </title>
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
			<center> <font size='5px'>E - Banking Page <span class='yellow'><a href='nasabah.php'>Home Nasabah</a></span> / <span class='yellow'><a href='nasabah.php'>Menu</a></span> / <a href='riwayat.php'> <span class='yellow'> Riwayat Transaksi</span></a></font> </center>
			<br>
			<div id='wadahmenu'>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='setor.php'>&nbsp;Setor Uang</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='transfer.php'>&nbsp;Transfer</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='riwayat.php'>&nbsp;Riwayat</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='bayar.php'>&nbsp;Bayar</a></font></div>
				<div class='menu'><font class='k' style='margin-top:5px;display:inline-block;'><a href='saldo.php'>&nbsp;Lihat Saldo</a></font></div>
			</div>
			<div id="isi">
				<font class='s'> &nbsp; Riwayat Isi Uang</font>
				<br><br><br>
				<table width="600" border="0" align="center" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <td align="center"><font>No.</font></td>
            <td align="center"><font>Nominal</font></td>
            <td align="center"><font>Tanggal</font></td>
            <td align="center"><font>Type</font></td>
        </tr>
    </thead>
    <tbody>

    <?php
    $query = mysql_query("select * from uang where pin=$pin");

    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td align="center"><font><?php echo $no; ?></font></td>
            <td align="center"><font><?php echo $data['uang']; ?></font></td>
            <td align="center"><font><?php echo $data['tanggal']; ?></font></td>
            <td align="center"><font><?php echo $data['type']; ?></font></td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
			</div>
		</article>
	</div>
</body>
</html>