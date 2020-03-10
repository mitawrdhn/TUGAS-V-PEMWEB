<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if(empty($_POST['namalengkap'])){
	header("Location:tugaskosong.php");
} elseif(empty($_POST['tempatlahir'])){
	header("Location:tugaskosong.php");
} elseif(empty($_POST['tanggallahir'])){
	header("Location:tugaskosong.php");
} elseif(empty($_POST['nomorhp'])){
	header("Location:tugaskosong.php");
} elseif(empty($_POST['email'])){
	header("Location:tugaskosong.php");
} elseif(empty($_POST['pekerjaan'])){
	header("Location:tugaskosong.php");
} elseif(empty($_POST['hobi'])){
	header("Location:tugaskosong.php");
} else {
	echo "<center>";
	echo "Nama Lengkap : ".$_POST['namalengkap']."<br>";
	echo "Tempat Lahir : ".$_POST['tempatlahir']."<br>";
	echo "Tanggal lahir : ".$_POST['tanggallahir']."<br>";
	echo "Nomor HP : ".$_POST['nomorhp']."<br>";
	echo "Email : ".$_POST['email']."<br>";
	echo "Pekerjaan : ".$_POST['pekerjaan']."<br>";
	echo "Hobi : ".$_POST['hobi']."<br>";
	date_default_timezone_set('Asia/Jakarta');
	echo "Login pada " .date("D, d F Y") ." pukul " .date("G:i:s");}
?>
</body>
</html>