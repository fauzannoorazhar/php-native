<?php
include "connect.php";
$Id_Pinjaman=$_POST['Id_Pinjaman'];
$Id_Anggota=$_POST['Id_Anggota'];
$Id_Kategori=$_POST['Id_Kategori'];
$Id_Petugas=$_POST['Id_Petugas'];
$Besar_Pinjaman=$_POST['Besar_Pinjaman'];
$Tgl_Pengajuan_Pinjaman=$_POST['Tgl_Pengajuan_Pinjaman'];
$Tgl_Acc_Pinjaman=$_POST['Tgl_Acc_Pinjaman'];
$Tgl_Pinjaman=$_POST['Tgl_Pinjaman'];
$Tgl_Penulisan=$_POST['Tgl_Penulisan'];
$Ket=$_POST['Ket'];

$query=mysql_query("update pinjaman set Id_Anggota='$Id_Anggota',Id_Kategori='$Id_Kategori',Id_Petugas='$Id_Petugas',
Besar_Pinjaman='$Besar_Pinjaman',Tgl_Pengajuan_Pinjaman='$Tgl_Pengajuan_Pinjaman',Tgl_Acc_Pinjaman='$Tgl_Acc_Pinjaman',
Tgl_Pinjaman='$Tgl_Pinjaman',Tgl_Penulisan='$Tgl_Penulisan',Ket='$Ket' WHERE Id_Pinjaman='$Id_Pinjaman'");
?><script>document.location.href="pinjaman.php"</script>
<?php
echo "gagal:".mysql_error();
?>