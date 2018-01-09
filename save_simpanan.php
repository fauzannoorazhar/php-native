<?php
$Id_Simpanan=$_POST['Id_Simpanan'];
$Id_Anggota=$_POST['Id_Anggota'];
$Id_Petugas=$_POST['Id_Petugas'];
$Nm_Simpanan=$_POST['Nm_Simpanan'];
$Tgl_Simpanan=$_POST['Tgl_Simpanan'];
$Besar_Simpanan=$_POST['Besar_Simpanan'];
$Ket=$_POST['Ket'];
include"connect.php";//sambung ke mysql
//mengambil data dari form
$query=mysql_query("INSERT INTO simpanan (Id_Simpanan, Id_Anggota, Id_Petugas, Nm_Simpanan, Tgl_Simpanan, Besar_Simpanan, Ket) VALUES
('$Id_Simpanan','$Id_Anggota','$Id_Petugas','$Nm_Simpanan','$Tgl_Simpanan','$Besar_Simpanan','$Ket')");//query sql untuk insert data
if($query!=0){
//echo "sukses";
?><script>document.location.href="simpanan.php"</script><?php
}else{
echo"gagal:".mysql_error();
}
?>