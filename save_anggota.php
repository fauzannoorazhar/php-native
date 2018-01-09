<?php
$Id_Anggota=$_POST['Id_Anggota'];
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$Tgl_Lhr=$_POST['Tgl_Lhr'];
$Tmpt_Lhr=$_POST['Tmpt_Lhr'];
$J_Kel=$_POST['J_Kel'];
$Status=$_POST['Status'];
$No_Telp=$_POST['No_Telp'];
$Ket=$_POST['Ket'];
include"connect.php";//sambung ke mysql
//mengambil data dari form
$query=mysql_query("INSERT INTO anggota (Id_Anggota, Nama, Alamat, Tgl_Lhr, Tmpt_Lhr, J_Kel, Status, No_Telp, Ket) VALUES
('$Id_Anggota','$Nama','$Alamat','$Tgl_Lhr','$Tmpt_Lhr','$J_Kel','$Status','$No_Telp','$Ket')");//query sql untuk insert data
if($query!=0){
//echo "sukses";
?><script>document.location.href="anggota.php"</script><?php
}else{
echo"gagal:".mysql_error();
}
?>