<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<?php require_once("header.php")?>
<br><br><br><br><br><br><br><section id="section_login">
	<center><h1>LOGIN</h1></center>
	<center><form method="POST" action="">
		<label>User Name</label><br>
		<input type="text" name="user"><br><br>
		<label>Password</label><br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="login" value="LOGIN"><br>
		<input type="submit" name="register" value="REGISTER"><br>
	</form></center>
	<?php
		if(isset($_POST['register']))
		{
			header('location: register.php');
		}
		if (isset($_POST['login'])) {
			# code...
			header('location: register.php');
		}
	?>
</section>
</body>
</html>