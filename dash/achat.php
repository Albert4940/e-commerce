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
	<div id="corps">
		<center><h1>ACHAT</h1></center>
		
				<form method="POST" action="">
   <table border="1">
   	
   
    <tr><td> Id client</td><td><input type="text" name="idClient"/></td></tr>
    <tr><td> Id article</td><td><input type="text" name="idArticle"/></td></tr>
    <tr><td> Quantite</td><td><input type="text" name="quantite"/></td></tr>
    <tr><td> Date</td><td><input type="date" name="date"/></td></tr>
    
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

	
	$idC = $_POST['idClient'];
	$idA=$_POST['idArticle'];
	$qte=$_POST['quantite'];
	$da=$_POST['date'];
	
	$req2="select prix from articles where reference='$idA'";
	$ex1=$con->query($req2);
	$rest=mysqli_fetch_array($ex1);
	

	$prixTot=$qte*$rest[0];
	$req="insert into achats values('','$idC','$idA','$qte','$da','$prixTot')";
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
