<?php include('connect.php'); ?>

<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>DATA ANGSURAN</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/admin.css" rel="stylesheet">
</head>

<!-- Tambah Data -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="isimasuk">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h2 class="text-success"><center>Tambah Data Angsuran</center></h2>
			</div>
			
<?php
include "connect.php"; // Sambung Ke Mysql
// Mengambil Id Angsuran Terbesar Dari Table Angsuran
$query = mysql_query("SELECT MAX(Id_Angsuran) AS Id_Angsuran FROM angsuran");
$angsuran = mysql_fetch_array($query); //Pecah Data Ke Dalam Array
$kodebaru = $angsuran['Id_Angsuran']+111111;
?>
			
			<div class="modal-body">
				<form method="post" action="save_angsuran.php" enctype="multipart/form-data">
				<center><div class="panel panel-default">
					<div class="panel-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" name="Id_Angsuran" value="<?php echo $kodebaru?>" class="form-control" placeholder="ID ANGSURAN"required/>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name="Id_Anggota">
								<?php
									$sql=mysql_query("select * from anggota");
									while($rs=mysql_fetch_array($sql)){
									echo "<option value='$rs[Id_Anggota]'>$rs[Id_Anggota]</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name="Id_Pinjaman">
								<?php
									$sql=mysql_query("select * from pinjaman");
									while($rs=mysql_fetch_array($sql)){
									echo "<option value='$rs[Id_Pinjaman]'>$rs[Id_Pinjaman]</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name="Id_Kategori">
								<?php
									$sql=mysql_query("select * from kategori");
									while($rs=mysql_fetch_array($sql)){
									echo "<option value='$rs[Id_Kategori]'>$rs[Id_Kategori]</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<select class="form-control" name="Id_Petugas">
								<?php
									$sql=mysql_query("select * from petugas_koperasi");
									while($rs=mysql_fetch_array($sql)){
									echo "<option value='$rs[Id_Petugas]'>$rs[Id_Petugas]</option>";
									}
								?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" name="Tgl_Pmbyrn" class="form-control" placeholder="Tgl_Pmbyrn"required/>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" name="Angsuran_Ke" class="form-control" placeholder="ANGSURAN KE"required/>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" name="Ket" class="form-control" placeholder="KETERANGAN"required/>
							</div>
						</div>
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span></button>
					</div>
					</div></center>
				</form>
			</div>
			
		</div>
	</div>
</div>
<!-- Tambah Data -->
		
<body>

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
				<ul class="nav navbar-nav navbar-left">
					<li><a href="anggota.php">Anggota</a></li>
					<li><a href="pinjaman.php">Pinjaman</a></li>
					<li><a href="simpanan.php">Simpanan</a></li>
					<li class="active"><a href="angsuran.php">Angsuran</a></li>
				</ul>
		</div>
		
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="row">
	<div class="col-sm-2">
		<div class="container-fluid"><br>
			<div class="panel panel-primary">
				<div class="panel-heading">Selamat Datang</div>
					<div class="panel-body">Login : <b>Admin</b></div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-10">
		<div class="table-responsive">
			<div class="container-fluid"><br>
			<div class="panel panel-primary">
				<div class="panel-heading"><center>Data Angsuran Berhasil Terakses</center></div>
			</div>
				<table class="table table-bordered">
					<thead>
					<tr>
						<th style="text-align:center; word-break:break-all; width:200px;">ID</th>
						<th style="text-align:center; word-break:break-all; width:250px;">ANGGOTA</th>
						<th style="text-align:center; word-break:break-all; width:300px;">PINJAMAN</th>
						<th style="text-align:center; word-break:break-all; width:250px;">KATEGORI</th>
						<th style="text-align:center; word-break:break-all; width:300px;">PETUGAS</th>
						<th style="text-align:center; word-break:break-all; width:300px;">PEMBAYARAN</th>
						<th style="text-align:center; word-break:break-all; width:400px;">ANGSURAN KE</th>
						<th style="text-align:center; word-break:break-all; width:300px;">KET</th>
						<th style="text-align:center; word-break:break-all; width:250px;">
						<a href="<?php echo $id;?>" data-toggle="modal" data-target="#add" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span></a>
						<a href="print_angsuran.php" class="btn btn-info"><span class="glyphicon glyphicon-print"></span></a>
						</th>
					</tr>
					</thead>
					
					<tbody>
					
					<?php
						$result=mysql_query("select * from angsuran") or die(mysql_error());
						while ($row=mysql_fetch_array($result)) {
						$id=$row['Id_Angsuran'];
					?>
				<tr>
					<td style="text-align:center;"><?php echo $row ['Id_Angsuran'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Id_Anggota'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Id_Pinjaman'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Id_Kategori'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Id_Petugas'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Tgl_Pmbyrn'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Angsuran_Ke'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Ket'] ;?></td>
					<td style="text-align:center; width:450px;">
						<a data-target="#edit-modal<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
						<a data-target="#delete-modal<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
					</td>
					
			</div>
			
					<!-- Delete Data -->
					<div id="delete-modal<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<center><h2 id="myModalLabel"> Delete Data Angsuran </h2></center>
								</div>
								<div class="modal-body bg-danger">
									<p class="text-danger"> Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
								</div>
								
								<div class="modal-footer">
									<a href="delete_angsuran.php<?php echo '?Id_Angsuran='.$id;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- Delete Data -->
					
					<!-- Update Data -->
					<div id="edit-modal<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<center><h2 id="myModalLabel" class="text-primary"> Edit Data Angsuran </h2></center>
								</div>
								<div class="modal-body">
									<form class="form-horizontal" role="form" action="edit_angsuran.php" method="post">
										<div class="form-group">
											<label class="col-md-4 control-label">ID ANGSURAN</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Id_Angsuran" value="<?php echo  $row ['Id_Angsuran'];?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">ID ANGGOTA</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Id_Anggota" value="<?php echo $row ['Id_Anggota'] ;?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">ID PINJAMAN</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Id_Pinjaman" value="<?php echo $row ['Id_Pinjaman'] ;?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">ID KATEGORI</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Id_Kategori" value="<?php echo $row ['Id_Kategori'] ;?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">ID PETUGAS</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Id_Petugas" value="<?php echo $row ['Id_Petugas'] ;?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">TGL PEMBAYARAN</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Tgl_Pmbyrn" value="<?php echo $row ['Tgl_Pmbyrn'] ;?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">ANGSURAN KE</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Angsuran_Ke" value="<?php echo $row ['Angsuran_Ke'] ;?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">KETERANGAN</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Ket" value="<?php echo $row ['Ket'] ;?>">
											</div>
										</div><br>
								</div>
								<div class="modal-footer">
									<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></button>
								</div>
									</form>
							</div>
						</div>
					</div>
					<!-- Update Data -->
					
				</tr>
				<?php }?>
					</tbody>
				</table>
						</div>
					</div>
		</div>
	</div>
</div>

<!-- Rujukan Wajib File JS QUERY dan Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="https://code.jquery.com/jquery.js"></script>
<!--Include all compiled plugins (below),or include individu files as needed-->
<script src="js/bootstrap.min.js"></script>
</body>
</html>