<?php
include('connect.php');
$get_id=$_GET['Id_Pinjaman'];
mysql_query("delete from pinjaman where Id_Pinjaman='$get_id'") or die (mysql_error());
?><script language="javascript">document.location.href="pinjaman.php";</script>