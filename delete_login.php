<?php
include('connect.php');
$get_id=$_GET['Username'];
mysql_query("delete from login where Username='$get_id'") or die (mysql_error());
?><script language="javascript">document.location.href="login.php";</script>