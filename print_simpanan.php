<?php
include 'connect.php';
$data = mysql_query("select * from simpanan");
?>
<html>
<head>
	<title>Print Data Simpanan</title>
	
</head>
<body>
<h3 align="center">Data Simpanan</h3>
	<table border="1" width="90%" stvle="border-collapse:collapse;" align="center">
		<tr class="tableheader">
			<th rowspan="1">ID SIMPANAN</th>
			<th>ID ANGGOTA</th>
			<th>ID PETUGAS</th>
			<th>NAMA SIMPANAN</th>
			<th>TANGGAL SIMPANAN</th>
			<th>BESAR SIMPANAN</th>
			<th>KET</th>
		</tr>
<?php while($hasil = mysql_fetch_array($data)) { ?>
<tr id="rowHover">
	<td width="10%" align="center"><?php echo $hasil['Id_Simpanan']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Anggota']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Petugas']; ?></td>
		<td width="12%" align="center" id="column_padding"><?php echo $hasil['Nm_Simpanan']; ?></td>
		<td width="15%" align="center" id="column_padding"><?php echo $hasil['Tgl_Simpanan']; ?></td>
		<td width="15%" align="center" id="column_padding"><?php echo $hasil['Besar_Simpanan']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Ket']; ?></td>
</tr>
<?php }?>
</table>
<script>
window.load=print_d();
function print_d() {
	window.print();
}
</script>
</body>
</html>
