<?php
include "connect.php";
$Id_Angsuran=$_POST['Id_Angsuran'];
$Id_Anggota=$_POST['Id_Anggota'];
$Id_Pinjaman=$_POST['Id_Pinjaman'];
$Id_Kategori=$_POST['Id_Kategori'];
$Id_Petugas=$_POST['Id_Petugas'];
$Tgl_Pmbyrn=$_POST['Tgl_Pmbyrn'];
$Angsuran_Ke=$_POST['Angsuran_Ke'];
$Ket=$_POST['Ket'];

$query=mysql_query("update angsuran set Id_Anggota='$Id_Anggota',Id_Pinjaman='$Id_Pinjaman',Id_Kategori='$Id_Kategori',
Id_Petugas='$Id_Petugas',Tgl_Pmbyrn='$Tgl_Pmbyrn',Angsuran_Ke='$Angsuran_Ke'
,Ket='$Ket' WHERE Id_Anggota='$Id_Anggota'");
?><script>document.location.href="angsuran.php"</script>
<?php
echo "gagal:".mysql_error();
?>