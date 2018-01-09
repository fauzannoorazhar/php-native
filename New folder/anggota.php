<!DOCTYPE html>
<?php include('connect.php'); ?>
<?php include('header.php');?>
	<link rel="stylesheet" href="assets/css/dashboard.css">
	<script type="text/javascript" language="javascript" src="assets/DataTables/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="assets/DataTables/dataTables.bootstrap.js"></script>
	<script type="text/javascript" language="javascript" src="assets/DataTables/jquery.js"></script>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>

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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="simpanan.php"> Simpanan <span class="sr-only">(current)</span></a></li>
            <li><a href="pinjaman.php"> Pinjaman </a></li>
            <li class="active"><a href="anggota.php"> Anggota </a></li>
            <li><a href="angsuran.php"> Angsuran </a></li>
          </ul>
        </div>
		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="text-wrapper">
				<h3 id="text-header"> Database Koperasi <small> Data Anggota </small></h3>
			</div>
			<!-- Tombol Tambah Data yang ditampilkan pada dashboard -->
				<a class="btn btn-primary " data-toggle="modal" data-target="#add-modal">Tambah Data</a><p></p>
	<div class="alert alert-info">
		<button	type="button" class="close" data-dismiss="alert">&times;</button>
			<strong><i class="icon-user icon-large"></i>&nbsp;Data Anggota</strong>
	</div>
	<table class="table table-striped table-bordered table-condensed" id="example">
		<thead>
			<tr>
				<th style="text-align:center;"> ID Anggota </th>
				<th style="text-align:center;"> Nama </th>
				<th style="text-align:center;"> Alamat </th>
				<th style="text-align:center;"> Tanggal Lahir </th>
				<th style="text-align:center;"> Tempat Lahir </th>
				<th style="text-align:center;"> Jenis Kelamin </th>
				<th style="text-align:center;"> Status </th>
				<th style="text-align:center;"> No Telepon </th>
				<th style="text-align:center;"> Keterangan </th>
				<th style="text-align:center;"> Action </th>
			</tr>
		</thead>
				

		<tbody>	
		
			<?php
		$connect	= mysqli_connect("localhost","root","","koperasi_simpan_pinjam") or die("gagal terhubung ke server".mysqli_error($connect));
		$result		= mysqli_query($connect, "select * from anggota") or die (mysqli_error($connect));
			while ($row=mysqli_fetch_array($result)) {
		$id			= $row['id_anggota'];
	?>

			<tr>
				<td style="text-align:center; width:auto;"> <?php echo $row ['id_anggota']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['nama']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['alamat']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['tgl_lhr']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['tmp_lhr']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['j_kel']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['status']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['no_tlp']; ?></td>
				<td style="text-align:center; width:auto;"> <?php echo $row ['ket']; ?></td>
			<!-- Tombol Action -->
				<td style="text-align:center; width:125px;">
					<a data-target="#edit-modal<?php echo $id; ?>" data-toggle="modal" class="btn btn-info glyphicon glyphicon-pencil" > </a>
					<a data-target="#delete-modal<?php echo $id; ?>" data-toggle="modal" class="btn btn-danger glyphicon glyphicon-trash" > </a>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
		</div>
  </div>
	<?php
		$connect	= mysqli_connect("localhost","root","","koperasi_simpan_pinjam") or die("gagal terhubung ke server".mysqli_error($connect));
		$result		= mysqli_query($connect, "select * from anggota") or die (mysqli_error($connect));
			while ($row=mysqli_fetch_array($result)) {
		$id			= $row['id_anggota'];
	?>
	<!-- Modal Delete -->
	<div id="delete-modal<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 id="myModalLabel"> Delete Data Anggota </h3>
				</div>
				<div class="modal-body">
					<p class="text-warning"> Apakah anda yakin akan menghapus data ini?</p>
				</div>
				
				<div class="modal-footer">
					<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
					<a href="delete_anggota.php<?php echo '?id_anggota='.$id;?>" class="btn btn-danger">Yes</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal Edit -->
	<div id="edit-modal<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3 id="myModalLabel"> Edit Data Anggota </h3>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" action="edit_anggota.php" method="post">
					<div class="form-group">
						<label class="col-md-3 control-label"> ID Anggota </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="id_anggota" value="<?php echo  $row ['id_anggota'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Nama </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nama" value="<?php echo $row ['nama'] ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Alamat </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="alamat" value="<?php echo $row ['alamat'] ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Tanggal Lahir </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="tgl_lhr" value="<?php echo $row ['tgl_lhr'] ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Tempat Lahir </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="tmp_lhr" value="<?php echo $row ['tmp_lhr'] ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Jenis Kelamin </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="j_kel" value="<?php echo $row ['j_kel'] ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Status </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="status" value="<?php echo $row ['status'] ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> No Telepon </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="no_tlp" value="<?php echo $row ['no_tlp'] ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Keterangan </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="ket" value="<?php echo $row ['ket'] ;?>">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<a href="anggota.php" class="btn btn-danger" data-dismiss="modal" aria-hidden="true"> Tutup </a>
				<button type="submit" name="submit" class="btn btn-primary"> Ubah </button>
			</div>
				</form>
		</div>
	</div>
	</div> <!-- tag modal -->
	
<!-- Tambah Data Menggunakan Modal-->
	<div class="modal fade" tabindex="-1" role="dialog" id="add-modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="modal-header">
						<h3> Tambah Data Anggota </h3>
					</div>
						<br>
				<form class="form-horizontal" role="form" method="post" action="save_anggota.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-3 control-label"> ID Anggota </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="id_anggota" placeholder="id_anggota"></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Nama </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="nama" placeholder="nama" ></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Alamat </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="alamat" placeholder="alamat" ></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Tanggal Lahir </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="tgl_lhr" placeholder="tgl_lhr" ></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Tempat Lahir </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="tmp_lhr" placeholder="tmp_lhr" ></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Jenis Kelamin </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="j_kel" placeholder="j_kel" ></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Status </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="status" placeholder="status" ></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> No Telepon </label>
						<div class="col-md-9">	
							<input type="text" class="form-control" name="no_tlp" placeholder="no_tlp" ></td>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"> Keterangan </label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="ket" placeholder="ket"></td>
						</div>
					</div>
				
				</div>	
		<!-- Modal footer berisi button -->
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"> Close </button>
					<button type="submit" name="submit" class="btn btn-primary"> Add </button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<?php } ?>
	<script type="text/javascript">
		function openNav(){
			document.getElementById("mySidenav").style.width = "250px";
		}
		
		function closeNav(){
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>
</body>
</html>