<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="register_style.css">
</head>
<body>
<?php require_once("header.php")?>
<br><br><br><br><br><br><br><section id="section_register">
	<center><h1>REGISTER</h1></center>
	<center><form method="POST" action="../controlers/controler_register.php">
		<label>Nom</label>&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="nom"><br><br>
		<label>Prenom</label>
		<input type="text" name="prenom"><br><br>
		<label>Tel</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="tel"><br><br>
		<label>Date Naissance</label>
		<input type="date" name="dateNaissance"><br><br>
		<label>Email</label>&nbsp&nbsp
		<input type="text" name="email"><br><br>
		<label>Adresse</label>
		<input type="text" name="adresse"><br><br>
		<label>User Name</label>
		<input type="text" name="user"><br><br>
		<label>Password</label>
		<input type="password" name="password"><br><br>
		<label>Type</label>&nbsp&nbsp&nbsp&nbsp
		<select name="type">
			<option value="vendeur">VENDEUR</option>
			<option value="acheteur"> ACHETEUR</option>
		</select><br><br>
		<input type="submit" name="save_Register" value="REGISTER"><br>
		
	</form></center>
	
</section>
</body>
</html>