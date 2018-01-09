<?php
include 'connect.php';
$data = mysql_query("select * from angsuran");
?>
<html>
<head>
	<title>Print Data Angsuran</title>
	
</head>
<body>
<h3 align="center">Data Angsuran</h3>
	<table border="1" width="90%" stvle="border-collapse:collapse;" align="center">
		<tr class="tableheader">
			<th rowspan="1">ID ANGSURAN</th>
			<th>ID ANGGOTA</th>
			<th>ID PINJAMAN</th>
			<th>ID KATEGORI</th>
			<th>ID PETUGAS</th>
			<th>TANGGAL PEMBAYARAN</th>
			<th>ANGSURAN KE</th>
			<th>KET</th>
		</tr>
<?php while($hasil = mysql_fetch_array($data)) { ?>
<tr id="rowHover">
	<td width="10%" align="center"><?php echo $hasil['Id_Angsuran']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Anggota']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Pinjaman']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Kategori']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Id_Petugas']; ?></td>
		<td width="15%" align="center" id="column_padding"><?php echo $hasil['Tgl_Pmbyrn']; ?></td>
		<td width="13%" align="center" id="column_padding"><?php echo $hasil['Angsuran_Ke']; ?></td>
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
