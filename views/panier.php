<?php
require_once("verification.php")
//require_once("../controlers/controler_prod.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="panier_style.css">
	<link rel="stylesheet" type="text/css" href="footer_style.css">
</head>
<body>
	<?php require_once("header.php")?>
	<br><br><br><br><section id="sectionPanier">

		<div id="listProduit">
			<table >
				<tr><td>NOM PRODUIT</td><td>NOM USER</td><td>PRIX</td><td>PRIX TOTAL</td><td>QUANTITE</td></tr>
		   			<?php

		   				require_once("../controlers/controler_commande.php");
						showCom($_SESSION['idVend']);

		   			?>
		   			<tr><td>NOM PRODUIT</td><td>NOM USER</td><td>PRIX</td><td>PRIX TOTAL</td><td>QUANTITE</td></tr>
		   		</table>
		</div>
		<br><br><br>
		<center><h3>FINALISER LA VENTE</h3></center>
		<br><br><form action="" method="post">
        <center><table id="infocard">
             <tr style="width: 100%"><td>NUMERO CARTE DE CREDIT</td><td><input type="text" name="message" id="message" style="width: 100%" required /></td></tr>
       

       
    </table></center>
     <br><center><input type="submit" value="Envoyer" name="achat" id="btn" placeholder="3444-000-999" /></center>
    </form>
    <?php
    	if(isset($_POST['achat'])){
    		$link=connection();
    		$id=$_SESSION['idVend'];
			$insertion = "DELETE FROM commande WHERE idUser='$id'";
                $execution = mysqli_query($link, $insertion) or die(mysqli_error($link));
                if ($execution) {
                	# code...
          	header('location: collections.php');
                }
    	}
    ?>
	</section><br/><br/><br/>



	<?php require_once("footer.php")?>
</body>
</html>