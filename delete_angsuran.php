<?php
include('connect.php');
$get_id=$_GET['Id_Angsuran'];
mysql_query("delete from angsuran where Id_Angsuran='$get_id'") or die (mysql_error());
?><script language="javascript">document.location.href="angsuran.php";</script>