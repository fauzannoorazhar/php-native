<?php 
include ('connect.php');
$id=$_GET['Id_Anggota']
?>

<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>DATA ANGGOTA</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
</head>

<?php
$query=mysql_query("select * from anggota WHERE Id_Anggota='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);
?>

<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#beranda">DATABASE KOPERASI</a>
		</div>
	</div>
</nav>
<!-- Navbar -->
	
<!--form-->
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"><br>
			<div class="alert alert-info">
			  <strong><i class="icon-user icon-large"></i>Aksi Edit Data Anggota</strong>
			</div>
				<form method="post" action="edit_anggota.php" enctype="multipart/form-data">
				<input type="hidden" name="Id_Anggota" value="<?php echo $row['Id_Anggota'];?>" size="58">
					<center><div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<div class="input-group">
								<td>ID ANGGOTA</td>
								<td>: <input type="text" name="Id_Anggota" value="<?php echo $row['Id_Anggota'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>NAMA ANGGOTA</td>
								<td>: <input type="text" name="Nama" value="<?php echo $row['Nama'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>ALAMAT ANGGOTA</td>
								<td>: <input type="text" name="Alamat" value="<?php echo $row['Alamat'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>TANGGAL LAHIR</td>
								<td>: <input type="text" name="Tgl_Lhr" value="<?php echo $row['Tgl_Lhr'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>TEMPAT LAHIR</td>
								<td>: <input type="text" name="Tmpt_Lhr" value="<?php echo $row['Tmpt_Lhr'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>JENIS KELAMIN</td>
								<td>: <input type="text" name="J_Kel" value="<?php echo $row['J_Kel'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>STATUS</td>
								<td>: <input type="text" name="Status" value="<?php echo $row['Status'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>NO TELEPON</td>
								<td>: <input type="text" name="No_Telp" value="<?php echo $row['No_Telp'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>KETERANGAN</td>
								<td>: <input type="text" name="Ket" value="<?php echo $row['Ket'];?>" size="58"/></td>
							</div>
						</div>
						<a href="anggota.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></button></a>
						<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
					</div>
						</div></center>
				</form>
			</div>
		
		<div class="col-md-8"><br>
			<div class="panel panel-danger">
					<div class="panel-heading"><center>PERINGATAN!!!</center></div>
						<div class="panel-body">
						<p class="text-justify">Field name <i>"id anggota"</i> adalah salah satu field name
						yang berperan sebagai Primary Key pada tabel Anggota, oleh karena itu aksi edit tidak
						akan bisa dilakukan pada field name tersebut.</p>
						</div>
				</div>
		</div>
		</div>
	</div>
</div>

