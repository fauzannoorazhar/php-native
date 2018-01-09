<?php
include 'connect.php';
$data = mysql_query("select * from pinjaman");
?>
<html>
<head>
	<title>Print Data Pinjaman</title>
	
</head>
<body>
<h3 align="center">Data Pinjaman</h3>
	<table border="1" width="90%" stvle="border-collapse:collapse;" align="center">
		<tr class="tableheader">
			<th rowspan="1">ID PINJAMAN</th>
			<th>ID ANGGOTA</th>
			<th>ID KATEGORI</th>
			<th>ID PETUGAS</th>
			<th>BESAR PINJAMAN</th>
			<th>TANGGAL PENGAJUAN</th>
			<th>TANGGAL ACC PINJAMAN</th>
			<th>TANGGAL PINJAMAN</th>
			<th>TANGGAL PELUNASAN</th>
			<th>KET</th>
		</tr>
<?php while($hasil = mysql_fetch_array($data)) { ?>
<tr id="rowHover">
	<td width="10%" align="center"><?php echo $hasil['Id_Pinjaman']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Anggota']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Kategori']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Petugas']; ?></td>
		<td width="14%" align="center" id="column_padding"><?php echo $hasil['Besar_Pinjaman']; ?></td>
		<td width="11%" align="center" id="column_padding"><?php echo $hasil['Tgl_Pengajuan_Pinjaman']; ?></td>
		<td width="11%" align="center" id="column_padding"><?php echo $hasil['Tgl_Acc_Pinjaman']; ?></td>
		<td width="9%" align="center" id="column_padding"><?php echo $hasil['Tgl_Pinjaman']; ?></td>
		<td width="11%" align="center" id="column_padding"><?php echo $hasil['Tgl_Penulisan']; ?></td>
		<td width="13%" align="center" id="column_padding"><?php echo $hasil['Ket']; ?></td>
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
