<?php
session_start();

	if (isset($_SESSION['sukses'])) {
		header("Location: dashboard.php");
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		header("Location: login.php");
	}
?>
<form method="post" action="class.php?login=login">
    <input type="text" name="username"> Username<br>
    <input type="password" name="password" minlength="5"> Password<br>
    <br>
    <input type="submit" name="kirim" value="LOGIN"> 
</form>
<?php


?>