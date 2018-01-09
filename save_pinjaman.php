<?php
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
include"connect.php";//sambung ke mysql
//mengambil data dari form
$query=mysql_query("INSERT INTO pinjaman (Id_Pinjaman, Id_Anggota, Id_Kategori, Id_Petugas, Besar_Pinjaman, Tgl_Pengajuan_Pinjaman, Tgl_Acc_Pinjaman, Tgl_Pinjaman, Tgl_Penulisan, Ket) VALUES
('$Id_Pinjaman','$Id_Anggota','$Id_Kategori','$Id_Petugas','$Besar_Pinjaman','$Tgl_Pengajuan_Pinjaman','$Tgl_Acc_Pinjaman','$Tgl_Pinjaman','$Tgl_Penulisan','$Ket')");//query sql untuk insert data
if($query!=0){
//echo "sukses";
?><script>document.location.href="pinjaman.php"</script><?php
}else{
echo"gagal:".mysql_error();
}
?>