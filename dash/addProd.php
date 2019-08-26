<?php
//require_once("verification.php");
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
		<center><h1>CLIENT</h1></center><br/><br/>

				<form method="POST" action="../controlers/controler_prod.php" enctype="multipart/form-data">
   <!-- <table border="1"> -->
   	   <div id="fo">
   	   		<table style="margin-right:3.5%;">
   	   			<tr><td> NOM</td><td><input type="text" name="nom"/></td></tr>
			    <tr><td> PRIX</td><td><input type="text" name="prix"/></td></tr>
			    <tr><td> QUANTITE</td><td><input type="text" name="qte"/></td></tr>
			    <tr><td> DESCRIPTION</td><td><textarea name="description"></textarea></td></tr>

   	   		</table>
   	   		<table>
   	   			<tr><td> COULEUR</td><td><input type="text" name="color"/></td></tr>	
		    <tr><td>SIZE</td><td> <select name="size">
		    	<option value="small">SMALL</option>
		    	<option value="medium">MEDIUM</option>
		    	<option value="large">LARGE</option>
		    </select></td></tr>
		    <tr><td>UPLOAD IMAGE</td><td><input type="file" name="monfichier"></td></tr>
   	   		</table>
   	   </div>
   	
    
   <!-- </table> -->
    <div id="btn" class="btnUC">
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
	$pname = $_POST['prenom'];
	$ad=$_POST['adresse'];
	$code=$_POST['codePostal'];
	$pays =$_POST['Pays'];
	$tel=$_POST['telephone'];
	$ville='';
	$req="insert into clients values('','$name','$pname','$ad','$code','$ville','$pays','$tel')";
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
