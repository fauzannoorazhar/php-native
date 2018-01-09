<!-- ceklog -->

<?php
	session_start();
		include "connect.php";
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$query		= mysql_query("select * from login where username='$username' and password='$password'");
		
		if (mysql_num_rows($query) == 1){
			$fetch	= mysql_fetch_array($query);
			$_SESSION['username'] = $fetch['username'];
			$_SESSION['typeuser'] = $fetch['typeuser'];	
			}
		
			if($fetch['typeuser'] == "admin" ){
				header('Location: dashboard.php');
			}
			
			if($fetch['typeuser'] == "member" ){
				header('Location: index.html');
			
			} else {
				echo 'anda gagal login'.mysql_error();
			}
?>

	<!-- Manggil session -->

			<?php
				echo 'Selamat datang,'. $_SESSION['username'];
				echo ' Anda adalah'. $_SESSION['typeuser']; echo 'dari website ini';				
			  ?>
			  
		
<!-- Logout -->
		
		<?php
			session_start();
	
			session_destroy();
				header('Location: index.html');
		?>