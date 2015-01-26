<?php
include ('../koneksi.php');
session_start();


if(!isset($_SESSION['no'])){
    header("location:../index.php");
}

if($_SESSION['level']!="nasabah"){
    die("Anda Belum Login");
}
$query = mysql_query("SELECT nominal FROM transfer where idterima='$_SESSION[no]';");
?>
<style type="text/css">
font {
	color:white;
	font-family:'Century Gothic';
	font-size:25px;
}
</style>
<?php
    $query = mysql_query("SELECT * FROM transfer where idterima='$_SESSION[no]';");

    while ($data = mysql_fetch_array($query)) {
    ?>
<font>Anda Menerima Uang Dari <?php echo $data['idkirim'] ?> Sebesar Rp <?php echo $data['nominal'] ?></font><br>
<?php } ?>