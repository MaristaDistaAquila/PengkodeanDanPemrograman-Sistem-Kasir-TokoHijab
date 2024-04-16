<?php
	session_start();
	session_destroy();
	echo '<script>alert("Anda Telah Berhasil Logout");window.location="login.php"</script>';
?>
