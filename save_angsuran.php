<?php
$Id_Angsuran=$_POST['Id_Angsuran'];
$Id_Anggota=$_POST['Id_Anggota'];
$Id_Pinjaman=$_POST['Id_Pinjaman'];
$Id_Kategori=$_POST['Id_Kategori'];
$Id_Petugas=$_POST['Id_Petugas'];
$Tgl_Pmbyrn=$_POST['Tgl_Pmbyrn'];
$Angsuran_Ke=$_POST['Angsuran_Ke'];
$Ket=$_POST['Ket'];
include"connect.php";//sambung ke mysql
//mengambil data dari form
$query=mysql_query("INSERT INTO angsuran (Id_Angsuran, Id_Anggota, Id_Pinjaman, Id_Kategori, Id_Petugas, Tgl_Pmbyrn, Angsuran_Ke, Ket) VALUES
('$Id_Angsuran','$Id_Anggota','$Id_Pinjaman','$Id_Kategori','$Id_Petugas','$Tgl_Pmbyrn','$Angsuran_Ke','$Ket')");//query sql untuk insert data
if($query!=0){
//echo "sukses";
?><script>document.location.href="angsuran.php"</script><?php
}else{
echo"gagal:".mysql_error();
}
?>