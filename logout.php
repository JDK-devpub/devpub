<?php
//Version 1.0
//Session destroy
	echo "Logged out scuccessfully";

  session_start();
	session_destroy();
	session_regenerate_id(true);
  header("location:login.php")
?>
