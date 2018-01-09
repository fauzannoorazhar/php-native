<?php
include "connect.php";
$Id_Anggota = $_POST['Id_Anggota'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Tgl_Lhr = $_POST['Tgl_Lhr'];
$Tmpt_Lhr = $_POST['Tmpt_Lhr'];
$J_Kel = $_POST['J_Kel'];
$Status = $_POST['Status'];
$No_Telp = $_POST['No_Telp'];
$Ket = $_POST['Ket'];

$query=mysql_query("update anggota set Nama='$Nama',Alamat='$Alamat',Tgl_Lhr='$Tgl_Lhr',
Tmpt_Lhr='$Tmpt_Lhr',J_Kel='$J_Kel',Status='$Status',
No_Telp='$No_Telp',Ket='$Ket' WHERE Id_Anggota='$Id_Anggota'");
?><script>document.location.href="anggota.php"</script>
<?php
echo "gagal:".mysql_error();
?>