<?php include('connect.php'); ?>

<?php
session_start();
if (isset($_SESSION['Username'])) { 
		} else {
		die ("Anda tidak berhak masuk ke halaman ini!. Silahkan login <a href='index.html'>di sini</a>");
		}
?>

<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<title>DATA LOGIN</title>
	
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
			<h2 class="text-success"><center>Tambah Data Login</center></h2>
			</div>
			<div class="modal-body">
				<form method="post" action="save_login.php" enctype="multipart/form-data">
				<center><div class="panel panel-default">
					<div class="panel-body">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" name="Username" class="form-control" placeholder="USERNAME"required/>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"></span>
								<input type="text" name="Password" class="form-control" placeholder="PASSWORD"required/>
							</div>
						</div>
						<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span></button>
					</div>
					</div></center>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Tambah Data -->

<!-- Modal Logout -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<p><div class="alert alert-danger">Apakah <?php echo $_SESSION['Username']; ?> Yakin Ingin Keluar?</div></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				<a href="logout.php" class="btn btn-danger">Yes</a>
			</div>
		</div>
	</div>
</div>
<!-- Modal Logout -->
		
<body>

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
			<a class="navbar-brand">KOPERASI SYARIAH INDONESIA</a>
				<ul class="nav navbar-nav navbar-left">
					<li><a href="anggota.php">Anggota</a></li>
					<li><a href="pinjaman.php">Pinjaman</a></li>
					<li><a href="simpanan.php">Simpanan</a></li>
					<li><a href="angsuran.php">Angsuran</a></li>
				</ul>
		</div>
		
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
			
				<p class="navbar-right navbar-text">
					<?php
					echo "<p>Selamat Datang, <i>".$_SESSION['Username']."!</i></p>";
					?>
				</p>
			</ul>
		</div>
	</div>
</nav>
<!-- Navbar -->

	<div id="wrapper">

	<!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>Tabel Lainnya</a>
                </li>
				<li class="sidebar-baru"><a href="login.php">Login</a></li>
				<li><a href="petugas_koperasi.php">Petugas Koperasi</a></li><br>
                <li>
                   <button type="button" href="#logout" data-toggle="modal" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span></button>
                </li>
            </ul>
        </div>
    <!-- /#sidebar-wrapper -->
	
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="table-responsive">
				<div class="container-fluid">
					<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-list"></span></a>
						<br>
						<br>
					
					<ol class="breadcrumb">
						<li class="active"><span class="glyphicon glyphicon-user"> Data Login</span></li>
					</ol>
					
				<table class="table table-bordered">
					<thead>
					<tr>
						<th style="text-align:center; word-break:break-all; width:400px;">USERNAME</th>
						<th style="text-align:center; word-break:break-all; width:400px;">PASSWORD</th>
						<th style="text-align:center; word-break:break-all; width:300px;">
						<a href="<?php echo $id;?>" data-toggle="modal" data-target="#add" class="btn btn-success"><span class="glyphicon glyphicon-cloud-upload"></span></a>
						<a href="print_login.php" class="btn btn-info"><span class="glyphicon glyphicon-print"></span></a>
						</th>
					</tr>
					</thead>
					
					<tbody>
					
					<?php
						$result=mysql_query("select * from login") or die(mysql_error());
						while ($row=mysql_fetch_array($result)) {
						$id=$row['Username'];
					?>
				<tr>
					<td style="text-align:center;"><?php echo $row ['Username'] ;?></td>
					<td style="text-align:center;"><?php echo $row ['Password'] ;?></td>
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
									<center><h2 id="myModalLabel"> Delete Data Login </h2></center>
								</div>
								<div class="modal-body">
									<p><div class="alert alert-danger"> Apakah Anda Yakin Ingin Menghapus Data <?php echo $row ['Username']; ?> ? </div></p>
								</div>
								
								<div class="modal-footer">
									<a href="delete_login.php<?php echo '?Username='.$id;?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
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
									<center><h2 id="myModalLabel" class="text-primary"> Edit Data Login </h2></center>
								</div>
								<div class="modal-body">
									<form class="form-horizontal" role="form" action="edit_login.php" method="post">
										<div class="form-group">
											<label class="col-md-4 control-label">USERNAME</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Username" value="<?php echo  $row ['Username'];?>">
											</div>
										</div><br>
										<div class="form-group">
											<label class="col-md-4 control-label">PASSWORD</label>
											<div class="col-md-8">
												<input type="text" class="form-control" name="Password" value="<?php echo $row ['Password'] ;?>">
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
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>