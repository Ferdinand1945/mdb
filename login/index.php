<?php
	session_start();
	include 'serv.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login Admin</title>
	<meta charset="utf-8">
</head>
<body>
			<h1 class="h1" style="color:white">Login</h1>
			<form method="post" action="validar.php">
				<input type="text" class="form-control" name="user" autocomplete="off" required><br><br>
				<input type="password" class="form-control" name="pw" autocomplete="off" required><br><br>
				<input type="submit" class="btn btn-success" name="login" value="Entrar">
			</form>
</body>
</html>