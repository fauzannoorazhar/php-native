<?php
include('connect.php');
$get_id=$_GET['Id_Petugas'];
mysql_query("delete from petugas_koperasi where Id_Petugas='$get_id'") or die (mysql_error());
?><script language="javascript">document.location.href="petugas_koperasi.php";</script>