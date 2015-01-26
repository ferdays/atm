<?php
include ('../koneksi.php')
?>
<?php
session_start();


if(!isset($_SESSION['no'])){
    header("location:../index.php");
}


if($_SESSION['level']!="admin"){
    die("Anda Belum Login");
}

$query = mysql_query("select * from noatm");
$data = mysql_fetch_array($query);
?>
<html>
<head>
<title> E - Banking | Admin </title>
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
			<center> <font size='5px'>E - Banking Page <span class='yellow'><a href='#'>Home Admin</a></span> / <span class='yellow'><a href='#'>Menu</a></span> <br> Selamat Datang <span class='green'><a href='#'><?php echo $data['nama'] ?></a></span></font> </center>
			<br>
			<table width="600" border="0" align="center" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
        	<td align="center"><font>No</font></td>
            <td align="center"><font>Noatm.</font></td>
            <td align="center"><font>Saldo</font></td>
        </tr>
    </thead>
    <tbody>

    <?php
    $query = mysql_query("select * from totaluang");

    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td align="center"><font><?php echo $no; ?></font></td>
            <td align="center"><font><?php echo $data['no']; ?></font></td>
            <td align="center"><font><?php echo $data['uang']; ?></font></td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>
		</article>
	</div>
</body>
</html>