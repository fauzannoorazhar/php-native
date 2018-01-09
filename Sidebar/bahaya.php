<?php include('connect.php'); ?>
<?php include('header.php'); ?>

<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>UJIKOM</title>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>


<center><h2>DATA ANGGOTA</h2></center>
<br>

<!-- Table -->
<div class="table-responsive">
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th style="text-align:center; word-break:break-all; width:300px;">ID ANGGOTA</th>
				<th style="text-align:center; word-break:break-all; width:300px;">NAMA</th>
				<th style="text-align:center; word-break:break-all; width:300px;">ALAMAT</th>
				<th style="text-align:center; word-break:break-all; width:300px;">TGL LHR</th>
				<th style="text-align:center; word-break:break-all; width:300px;">TMPT LHR</th>
				<th style="text-align:center; word-break:break-all; width:300px;">J Kel</th>
				<th style="text-align:center; word-break:break-all; width:300px;">STATUS</th>
				<th style="text-align:center; word-break:break-all; width:300px;">NO TLP</th>
				<th style="text-align:center; word-break:break-all; width:300px;">Ket</th>
				<th style="text-align:center; word-break:break-all; width:300px;"><a href="add_anggota.php">Tambah Data</a></th>
			</tr>
		</thead>
		
		<tbody>
<?php
	$result = mysql_query("select * from anggota") or die(mysql_error());
	while ($row = mysql_fetch_array($result)) {
	$id = $row['Id_Anggota'];
?>
	<tr>
		<td style="text-align:center;"><?= $row ['Id_Anggota'] ;?></td>
		<td style="text-align:center;"><?= $row ['Nama'] ;?></td>
		<td style="text-align:center;"><?= $row ['Alamat'] ;?></td>
		<td style="text-align:center;"><?= $row ['Tgl_Lhr'] ;?></td>
		<td style="text-align:center;"><?= $row ['Tmpt_Lhr'] ;?></td>
		<td style="text-align:center;"><?= $row ['J_Kel'] ;?></td>
		<td style="text-align:center;"><?= $row ['Status'] ;?></td>
		<td style="text-align:center;"><?= $row ['No_Telp'] ;?></td>
		<td style="text-align:center;"><?= $row ['Ket'] ;?></td>
		<td style="text-align:center; width:450px;">
			<a href="form_edit_anggota.php<?= '?Id_Anggota = '.$id; ?>" class="btn btn-primary">Update</a>
			<a href	="#delete<?= $id;?>" data-toggle="modal" class="btn btn-danger">Delete</a>
		</td>
	</div>
			
<!--Modal-->
<div id="delete<?= $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<h3 id="myModalLabel">Delete</h3>
		</div>
		<div class="modal-body">
			<p><div class="alert alert-danger">Are You Sure You Want Delete?</p></div>
			<hr>
			<div class="modal-footer">
				<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
				<a href="delete_barang.php<?= '?Id_Anggota='.$id;?>" class="btn btn-danger">Yes</a>
			</div>
		</div>
</div>
</tr>

<!--Modal Bigger Image-->
<div id="<?= $Id_Anggota;?>"class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<h3 id="myModalLabel"><b><?= $row['Nama']."".$row['Alamat'];?></b></h3>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
<?php }?>
  </tbody>
    </table>
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