<?php
include 'connect.php';
$data = mysql_query("select * from petugas_koperasi");
?>
<html>
<head>
	<title>Print Data Petugas</title>
	
</head>
<body>
<h3 align="center">Data Petugas</h3>
	<table border="1" width="90%" stvle="border-collapse:collapse;" align="center">
		<tr class="tableheader">
			<th rowspan="1">ID PETUGAS</th>
			<th>USERNAME</th>
			<th>NAMA</th>
			<th>ALAMAT</th>
			<th>NO TELEPON</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>KET</th>
		</tr>
<?php while($hasil = mysql_fetch_array($data)) { ?>
<tr id="rowHover">
	<td width="10%" align="center"><?php echo $hasil['Id_Petugas']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Username']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Nama']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['Alamat']; ?></td>
		<td width="10%" align="center" id="column_padding"><?php echo $hasil['No_Telp']; ?></td>
		<td width="15%" align="center" id="column_padding"><?php echo $hasil['Tmpt_Lhr']; ?></td>
		<td width="13%" align="center" id="column_padding"><?php echo $hasil['Tgl_Lhr']; ?></td>
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
