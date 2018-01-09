<?php
include('connect.php');
$get_id=$_GET['Id_Simpanan'];
mysql_query("delete from simpanan where Id_Simpanan='$get_id'") or die (mysql_error());
?><script language="javascript">document.location.href="simpanan.php";</script>