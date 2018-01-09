<?php
$Id_Petugas=$_POST['Id_Petugas'];
$Username=$_POST['Username'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$No_Telp=$_POST['No_Telp'];
$Tmpt_Lhr=$_POST['Tmpt_Lhr'];
$Tgl_Lhr=$_POST['Tgl_Lhr'];
$Ket=$_POST['Ket'];
include"connect.php";//sambung ke mysql
//mengambil data dari form
$query=mysql_query("INSERT INTO petugas_koperasi (Id_Petugas, Username, Nama, Alamat, No_Telp, Tmpt_Lhr, Tgl_Lhr, Ket) VALUES
('$Id_Petugas','$Username','$Nama','$Alamat','$No_Telp','$Tmpt_Lhr','$Tgl_Lhr','$Ket')");//query sql untuk insert data
if($query!=0){
//echo "sukses";
?><script>document.location.href="petugas_koperasi.php"</script><?php
}else{
echo"gagal:".mysql_error();
}
?>