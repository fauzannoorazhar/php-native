<html lang="id">
<head>
	<title>Ceklog</title>
	<link href="css/style_ceklog.css" rel="stylesheet">
</head>
<body>

<?php
	session_start();
	include"connect.php";
	$Username	=	$_POST['Username'];
	$Password	=	$_POST['Password'];
	$query		=	mysql_query("select * from login where Username='".$Username."'and Password='$Password'");
	$cek		=	mysql_num_rows($query);

	if ($cek) {
	$_SESSION['Username'] = $Username; {
		header('Location: anggota.php');
	} ?>
<?php } else { ?>
<center><a href="index.html">Login Gagal, Silahkan Login Kembali</a></center>
<?php
	echo mysql_error();
	} ?>

</body>