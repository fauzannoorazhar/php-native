<?php
include('connect.php');
$get_id = $_GET['Id_Anggota'];
mysql_query("delete from anggota where Id_Anggota = '$get_id'") or die (mysql_error());
?><script language="javascript">document.location.href="anggota.php";</script>