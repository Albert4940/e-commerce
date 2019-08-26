<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<link rel="stylesheet" type="text/css" href="footer_style.css">
</head>
<body>
<?php require_once("header.php")?>
<br><br><br><br><br><br><br><section id="section_login">
	<center><h1>LOGIN</h1></center><br>
	<center><form method="POST" action="">
		<table>
			<tr><td>&nbspUser Name<br/><input type="text" name="user"></td></tr>
			<tr><td>&nbspPassword<br/><input type="password" name="password"></td></tr>
			<tr><td>&nbspType<br/><select name="type">
			<option value="vendeur">VENDEUR</option>
			<option value="acheteur"> ACHETEUR</option>
		</select></td></tr>
		</table>

		<br><br><div id="btn" class="btnUC">
   	 <input type="submit" value="LOGIN" name="login" id="btn1"/><input type="submit" value="REGISTER" name="register" id="btn2" />
   </div>
		
	</form>
	<?php
		if(isset($_POST['register']))
		{
			header('location: register.php');
		}
		if (isset($_POST['login'])) {
			# code...
			


			require_once("../controlers/controler_register.php");
			if(verification($_POST['user'],$_POST['password'],$_POST['type'])>0)
			{
				$_SESSION['user']=$_POST['user'];
				$_SESSION['pass']=$_POST['password'];
				$_SESSION['type']=$_POST['type'];
				$_SESSION['idVend']=verification($_POST['user'],$_POST['password'],$_POST['type']);
				echo $_POST['type'];
				if ($_POST['type']=='vendeur') {
					# code...
					header('location: ../dash/dashboard.php');
				}
				else
					header('location: index.php');
			}
			
			else{
				echo '<div id="no">
				<p>VERIFIER VOTRE USER NAME OU VOTRE PASSWORD OU TYPE!</p>
		</div>';
		}
			
		}
	?></center>
</section><br><br><br>
<?php require_once("footer.php")?>
</body>
</html>