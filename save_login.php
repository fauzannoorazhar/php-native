<?php
$Username=$_POST['Username'];
$Password=$_POST['Password'];

include"connect.php";//sambung ke mysql
//mengambil data dari form
$query=mysql_query("INSERT INTO login (Username, Password) VALUES
('$Username','$Password')");//query sql untuk insert data
if($query!=0){
//echo "sukses";
?><script>document.location.href="login.php"</script><?php
}else{
echo"gagal:".mysql_error();
}
?>