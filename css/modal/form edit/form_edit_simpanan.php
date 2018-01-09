<?php 
include ('connect.php');
$id=$_GET['Id_Simpanan']
?>

<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>DATA SIMPANAN</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
</head>

<?php
$query=mysql_query("select * from simpanan WHERE Id_Simpanan='$id'")or die(mysql_error());
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
			  <strong><i class="icon-user icon-large"></i>Aksi Edit Data Simpanan</strong>
			</div>
				<form method="post" action="edit_simpanan.php" enctype="multipart/form-data">
				<input type="hidden" name="Id_Simpanan" value="<?php echo $row['Id_Simpanan'];?>" size="58">
					<center><div class="panel panel-primary">
					<div class="panel-body">
						<div class="form-group">
							<div class="input-group">
								<td>ID SIMPANAN</td>
								<td>: <input type="text" name="Id_Simpanan" value="<?php echo $row['Id_Simpanan'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>ID ANGGOTA</td>
								<td>: <input type="text" name="Id_Anggota" value="<?php echo $row['Id_Anggota'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>ID PETUGAS</td>
								<td>: <input type="text" name="Id_Petugas" value="<?php echo $row['Id_Petugas'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>NAMA SIMPANAN</td>
								<td>: <input type="text" name="Nm_Simpanan" value="<?php echo $row['Nm_Simpanan'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>TANGGAL SIMPANAN</td>
								<td>: <input type="text" name="Tgl_Simpanan" value="<?php echo $row['Tgl_Simpanan'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>BESAR SIMPANAN</td>
								<td>: <input type="text" name="Besar_Simpanan" value="<?php echo $row['Besar_Simpanan'];?>" size="58"/></td>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<td>KETERANGAN</td>
								<td>: <input type="text" name="Ket" value="<?php echo $row['Ket'];?>" size="58"/></td>
							</div>
						</div>
						<a href="simpanan.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span></button></a>
						<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
					</div>
						</div></center>
				</form>
			</div>
		
		<div class="col-md-8"><br>
			<div class="panel panel-danger">
					<div class="panel-heading"><center>PERINGATAN!!!</center></div>
						<div class="panel-body">
						<p class="text-justify">Beberapa field name pada tabel simpanan tidak dapat melakukan
						aksi edit, antara lain :<i>"id simpanan, id anggota, id petugas."</i> Itu terjadi karena
						beberapa sebab salah satunya, field name tersebut berperan ganda yaitu sebagai Foregn Key pada table pinjaman
						dan menjadi Primary Key di tabel masing - masingnya.</p>
						</div>
				</div>
		</div>
		</div>
	</div>
</div>

