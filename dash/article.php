<?php
require_once("verification.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dash_styl.css">
	<link rel="stylesheet" type="text/css" href="ba.css">
</head>
<body>
	<?php
require_once("header.php");
?>
	<section>
		<?php 
			require_once("side.php");		
	?>
	<div id="corps"><h1>Saisie articles</h1>
				<form method="POST" action="">
   <table border="1">
   	
    <tr><td> Nom</td><td><input type="text" name="nom"/></td></tr>
    <tr><td> Description</td><td><input type="text" name="description"/></td></tr>
    <tr><td> Prix</td><td><input type="text" name="prix"/></td></tr>
   
   </table>
    <div id="btn">
   	 <input type="submit" value="Valider" name="valider" id="btn1"/><input type="reset" value="Effacer" id="btn2" />
   </div>
 </form>
 <?php
 
 	if(isset($_POST['valider']))
	{
		$con=mysqli_connect('localhost',$_SESSION['userN'],$_SESSION['pass'],'projet');
		if(!$con){
		echo "Erreur : IMPOSSIBLE de se connecter a MYSQL.".PHP_EOL;
		echo "Errno de debogage : ".mysqli_connect_errno().PHP_EOL;
		echo "Erreur de debogage : ".mysqli_connect_error().PHP_EOL;				
		exit;
		$err="error";
	}

	$name =$_POST['nom'];
	$desc = $_POST['description'];
	$price=$_POST['prix'];
	
	$req="insert into articles values('','$name','$desc','$price')";
	$ex=$con->query($req);
	if($ex){
	echo '<div id="ok">
			<p>INSCRIPTION REUSSITE</p>
		</div>';
	}
	else{
	echo '<div id="no">
			<p>INSCRIPTION REUSSITE</p>
		</div>';
	}
	}
	
	
?>
	</div>
	</section>
	
</body>
</html>
