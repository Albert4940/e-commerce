<?php 
		//session_start(); 
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
		<center><h1>LISTE PRODUIT</h1></center>
		<!-- <div id="lister"> 
			<form method="POST">
				<input type="search" name="recherche" placeholder="CODE/NOM/PRENOM" />
				<select name="menu">
			<option value="lister">LISTER </option>
			<option value="nameAZ">A-Z </option>
			<option value="nameZA">Z-A </option>
			<option value="dateL">LAST MODIFIED </option>
			<option value="dateF">FIRST MODIFIED </option>
		</select>
				<input type="submit" name="rech" value="search" />
			</form>			
		</div>-->
		
				
   
   		<!-- <div id="conteneur"> 
   			<?php
   				//require_once("../controlers/controler_prod.php");
				//showProdAch();

   			?>
   		</div>-->
   		<!-- <div id="head">  
   			<table>
   				<tr><td>IMG</td><td>NOM</td><td>DESCRIPTION</td><td>PRIX</td><td>QUANTITE</td><td>SIZE</td><td>COLOR</td><td>DATE D'AJOUT</td><td></td></tr>
   			</table>
   		</div>-->
		<div id="listProduit">
			<table >
				<tr><td>IMG</td><td>NOM</td><td>DESCRIPTION</td><td>PRIX</td><td>QUANTITE</td><td>SIZE</td><td>COLOR</td><td>DATE D'AJOUT</td><td></td></tr>
		   			<?php

		   				require_once("../controlers/controler_prod.php");
						showProd($_SESSION['idVend']);

		   			?>
		   			<tr><td>IMG</td><td>NOM</td><td>DESCRIPTION</td><td>PRIX</td><td>QUANTITE</td><td>SIZE</td><td>COLOR</td><td>DATE D'AJOUT</td><td></td></tr>
		   		</table>
		</div>
   		
   		<?php
	
		
	/*if(isset($_POST['rech']))
	{
		$v_menu = $_POST['menu'];
		if (!$_POST['recherche'].isEmpty) {
		//if (!$_POST['recherche'].isEmpty) {
			# code...
			echo "string";
			$search = $_POST['recherche'];
			$reque ="select * from clients where numero='$search' OR nom='$search' OR prenom='$search'";
			$ex=$con->query($reque);
			while ($req=mysqli_fetch_array($ex)) {
			echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[6]</td><td>$req[7]</td></tr><br/>";
			}
		//}
		
	}*/
	
	/*if(isset($_POST['rech']) AND isset($_POST['menu']))
	{
		$v_menu = $_POST['menu'];
		echo $v_menu;
		switch ($v_menu) {
			case 'lister':
			# code...
			$reque="select * from clients";
			$ex=$con->query($reque);
				while ($req=mysqli_fetch_array($ex)) {
			echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[6]</td><td>$req[7]</td></tr><br/>";
			}
				break;
			case 'nameAZ':
				$reque="select * from clients group by name order by ";
				$ex=$con->query($reque);
					while ($req=mysqli_fetch_array($ex)) {
				echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[6]</td><td>$req[7]</td></tr><br/>";
				}
			break;

			case 'nameZA':
				$reque="select * from clients group by name order by desc";
				$ex=$con->query($reque);
					while ($req=mysqli_fetch_array($ex)) {
				echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[6]</td><td>$req[7]</td></tr><br/>";
				}
			break;
			default:
				# code...
				break;
		}
	}*/
	
?>
    
   
 
 
	</div>
	</section>
	
</body>
</html>
