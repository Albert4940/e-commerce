<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="register_style.css">
	<link rel="stylesheet" type="text/css" href="footer_style.css">
</head>
<body>
<?php require_once("header.php")?>
<br><br><br><br><br><br><br><section id="section_register">
	<center><h1>REGISTER</h1></center>
	<center><form method="POST" action="">
		<div id="formRegister">
			<table>
				<tr><td>Nom</td><td><input type="text" name="nom"></td></tr>
				<tr><td>Prenom</td><td><input type="text" name="prenom"></td></tr>
				<tr><td>Tel</td><td><input type="text" name="tel"></td></tr>
				<tr><td>Date Naissance</td><td><input type="date" name="dateNaissance"></td></tr>
				<tr><td>Type</td><td><select name="type">
			<option value="vendeur">VENDEUR</option>
			<option value="acheteur"> ACHETEUR</option>
		</select></td></tr>
			</table>
			<table>
				<tr><td>Email</td><td><input type="text" name="email"></td></tr>
				<tr><td>Adresse</td><td><input type="text" name="adresse"></td></tr>
				<tr><td>User Name</td><td><input type="text" name="user"></td></tr>
				<tr><td>Password</td><td><input type="password" name="password"></td></tr>
				<tr><td>Confirm Password</td><td><input type="password" name="confirmPassword"></td></tr>
			</table>
		</div>
		<div id="btn" class="btnUC">
   	 		<input type="submit" value="SAVE " name="save_Register" id="btn1"/><input type="reset" value="Effacer" id="btn2" />
   		</div>
		
	</form><br/>
	<?php
		require_once("../controlers/controler_register.php");
		if(isset($_POST['save_Register'])){

			$user=$_POST['user'];
			$pass=$_POST['password'];
			if (verificationRegister($user,$pass)>0) {
			echo '<div id="no">
				<p> USER NAME OR PASSWORD ARE ALREADY USED!</p>
		</div>';
			# code...
		}else
		header('location: ../controlers/controler_register.php');
		}
	?></center>
</section><br/><br/>
<?php require_once('footer.php')?>
</body>
</html>