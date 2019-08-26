m<?php 
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
		<center><h1>LISTE ACHAT</h1></center>
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
		
				
   <table border="1" id="tableAchat">  	
   		<tr><th><strong>ID ACHAT</strong></th><th><strong>ID CLIENT</strong></th><th><strong>ID ARTICLE</strong></th><th><strong>QUANTITE</strong></th><th><strong>DATE</strong></th><th>PRIX TOTAL</th><th>PRIX UNITAIRE</th><th>NOM ARTICLE</th><th>NOM CLIENT</th></tr>
   		<?php
	
		$con=mysqli_connect('localhost',$_SESSION['userN'],$_SESSION['pass'],'projet');
		if(!$con){
		echo "Erreur : IMPOSSIBLE de se connecter a MYSQL.".PHP_EOL;
		echo "Errno de debogage : ".mysqli_connect_errno().PHP_EOL;
		echo "Erreur de debogage : ".mysqli_connect_error().PHP_EOL;				
		exit;
		$err="error";
	}
	
	//if(!isset($_POST['rech']) && !isset($_POST['menu']))
	//{
		

	/*$req3="select nom from clients where numero='$idA'";
	$ex2=$con->query($req3);
	$rest1=mysqli_fetch_array($ex2);

		$reque="select * from achats";
		$ex=$con->query($reque);*/
		$ex = mysqli_query($con, "SELECT achats.id_achat,achats.id_client,achats.id_article,achats.quantite,achats.date,achats.prixTot,articles.prix,articles.nom,clients.nom FROM achats, clients, articles WHERE achats.id_client = clients.numero AND achats.id_article = articles.reference");
			while ($req=mysqli_fetch_array($ex)) {
			echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[5]</td><td>$req[6]</td><td>$req[7]</td><td>$req[8]</td></tr><br/>";
		}

	//}
	
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
    
   </table>
 
 
	</div>
	</section>
	
</body>
</html>
