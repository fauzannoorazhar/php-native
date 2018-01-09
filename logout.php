<?php
session_start();
include"connect.php";
	if (isset($_SESSION['Username'])) {
	unset ($_SESSION); //menghapus suatu variabel
	session_destroy();{ //menghapus semua data session
		header('Location: index.html');
	}
		}
?>