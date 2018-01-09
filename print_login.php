<?php
include 'connect.php';
$data = mysql_query("select * from login");
?>
<html>
<head>
	<title>Print Data Login</title>
	
</head>
<body>
<h3 align="center">Data Login</h3>
	<table border="1" width="90%" stvle="border-collapse:collapse;" align="center">
		<tr class="tableheader">
			<th rowspan="1">USERNAME</th>
			<th>PASSWORD</th>
		</tr>
<?php while($hasil = mysql_fetch_array($data)) { ?>
<tr id="rowHover">
		<td width="5%" align="center"><?php echo $hasil['Username']; ?></td>
		<td width="5%" align="center" id="column_padding"><?php echo $hasil['Password']; ?></td>
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
