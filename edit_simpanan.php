<?php
include "connect.php";
$Id_Simpanan=$_POST['Id_Simpanan'];
$Id_Anggota=$_POST['Id_Anggota'];
$Id_Petugas=$_POST['Id_Petugas'];
$Nm_Simpanan=$_POST['Nm_Simpanan'];
$Tgl_Simpanan=$_POST['Tgl_Simpanan'];
$Besar_Simpanan=$_POST['Besar_Simpanan'];
$Ket=$_POST['Ket'];

$query=mysql_query("update simpanan set Id_Anggota='$Id_Anggota',Id_Petugas='$Id_Petugas',Nm_Simpanan='$Nm_Simpanan',
Tgl_Simpanan='$Tgl_Simpanan',Besar_Simpanan='$Besar_Simpanan',Ket='$Ket' WHERE Id_Anggota='$Id_Anggota'");
?><script>document.location.href="simpanan.php"</script>
<?php
echo "gagal:".mysql_error();
?>