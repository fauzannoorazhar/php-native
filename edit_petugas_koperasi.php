<?php
include "connect.php";
$Id_Petugas=$_POST['Id_Petugas'];
$Username=$_POST['Username'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$No_Telp=$_POST['No_Telp'];
$Tmpt_Lhr=$_POST['Tmpt_Lhr'];
$Tgl_Lhr=$_POST['Tgl_Lhr'];
$Ket=$_POST['Ket'];

$query=mysql_query("update petugas_koperasi set Username='$Username',Nama='$Nama',Alamat='$Alamat',
No_Telp='$No_Telp',Tmpt_Lhr='$Tmpt_Lhr',Tgl_Lhr='$Tgl_Lhr'
,Ket='$Ket' WHERE Id_Petugas='$Id_Petugas'");
?><script>document.location.href="petugas_koperasi.php"</script>
<?php
echo "gagal:".mysql_error();
?>