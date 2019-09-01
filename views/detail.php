<?php
session_start();
//if(!isset($_SESSION['idVend'])){
//header('location : login.php');
//}
require_once("../controlers/controler_prod.php")

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="detail_style.css">
	<link rel="stylesheet" type="text/css" href="footer_style.css">
</head>
<body>
	<?php require_once("header.php")?>
	<br><br><br><br><br><br><br><section id="sectionDetail">
		<?php
		
		$_SESSION['idProduit']=$_GET['id'];
		$data=showDetailProd ($_SESSION['idProduit']);

		?>
		<div id='imgDetail'><img src='../uploadsImg/<?php $data=showDetailProd ($_SESSION['idProduit']); echo $data[10]; ?>'width='80%'/></div>
		<div id='detail'>
			<div id="nomProd">
				<?php echo '<h1>'.$data[3].'</h1>'?>
			</div> 
			<p style="size: 20%"> <?php echo 'PRIX : G '.$data[5].'<br/>
				QUANTITE : ONLY '. $data[6].' left'?></p>
			
			
		<form method="POST" action="">  
			<table>
				<tr><td> COULEUR</td><td><input type="text" name="color"/></td></tr>
				<tr><td>SIZE</td><td> <select name="size">
		    	<option value="small">SMALL</option>
		    	<option value="medium">MEDIUM</option>
		    	<option value="large">LARGE</option>
		    </select></td></tr>
		    <tr><td> QUANTITE</td><td><input type="number" name="qte" required/></td></tr>
			</table>
			<br/><br/><div id="btnCommander" ><input type="submit" name="commander" value="Yes, I want it"/></div>
			
		</form>
		<?php
		
		require_once("../controlers/controler_commande.php");
			if(isset($_POST['commander'])){
				if(!isset($_SESSION['user'])){
					header('location: login.php');
				}
				if($_POST['qte']>$data[6]){
					echo '<div id="no">
				<p>QUANTITE STOCKE INSUFFISANTE !</p>
				</div>';
				}
				else
				{
					$quantite=(float)$_POST['qte'];
					$prix = (float)$data[5];
					$prixTotal=$prix*$quantite;
					addCom($_SESSION['idVend'],$_SESSION['idProduit'],$_SESSION['user'],$data[3],$_POST['qte'],$data[5],$prixTotal,$data[6],$data[10]);
				}
			}
		?>
		<hr/>
		<p>Estimated delivery time to Port-au-Prince, Haiti: 7-19 days</p>
		<hr/>
		<p>Description<br/><br/><?php echo $data[4]?></p>
		</div>
	</section>

	<?php require_once("footer.php")?>
</body>
</html>