<?php
include "connect.php";
$Username=$_POST['Username'];
$Password=$_POST['Password'];

$query=mysql_query("update login set Password='$Password' WHERE Username='$Username'");
?><script>document.location.href="login.php"</script>
<?php
echo "gagal:".mysql_error();
?>