<!--digunakan untuk meng koneksikan database-->
<?php
mysql_connect("localhost","root","") or die ("gagal terhubung ke server".mysql_error());
mysql_select_db("koperasi") or die ("gagal terhubung ke database".mysql_error());
?>