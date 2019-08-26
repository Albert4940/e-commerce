<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="indexStyl.css">
</head>
<body>
	<center>
	<div class='log'>
	<h1>BON BAGAY SA </h1>
	<center>
		<form method='post' action='connection.php'>
			<table>
				<th></th>
				<tr><td><input type="text" name="user" required class="formu" placeholder="USER NAME" /></td></tr>
				<th></th>
				<tr><td><input type="password" name="pass" class="formu" placeholder="PASSWORD"/></td></tr>
				<center><tr><td></td></tr></center>
			</table>
			<input type="submit" name="submit" required value="LOGIN" id="login" />
		</form>
		<?php
	if(isset($_SESSION['err']))
	{
		echo '<div id="error">
			<p>ERREUR VERIFIER VOTRE NOM DUTILISATEUR ET VOTRE MOT DE PASSE</p>
		</div>';
		session_destroy();
	}
?>
	</div></center>
	
</body>
</html>
