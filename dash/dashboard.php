<?php
//require_once("verification.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dash_styl.css">
	<link rel="stylesheet" type="text/css" href="ba.css">
	<link rel="stylesheet" type="text/css" href="../views/footer_style.css">
	
</head>
<body>
	<?php 
			require_once("header.php");	
			
	?>
	<section >
		<?php 			
			require_once("side.php");	
	?> 
	<div id="dashSection">
		<?php
				/*	$con=mysqli_connect('localhost',$_SESSION['userN'],$_SESSION['pass'],'projet');
		if(!$con){
		echo "Erreur : IMPOSSIBLE de se connecter a MYSQL.".PHP_EOL;
		echo "Errno de debogage : ".mysqli_connect_errno().PHP_EOL;
		echo "Erreur de debogage : ".mysqli_connect_error().PHP_EOL;				
		exit;
		$err="error";
	}
	$reque ="select count(*) from clients";
	$ex=$con->query($reque);
	$req=mysqli_fetch_array($ex);
	$_SESSION['client']= $req[0];

	$reque ="select count(*) from articles";
	$ex=$con->query($reque);
	$req=mysqli_fetch_array($ex);
	$_SESSION['article']= $req[0];

	$reque ="select count(*) from achats";
	$ex=$con->query($reque);
	$req=mysqli_fetch_array($ex);
	$_SESSION['achat']= $req[0];*/

			?>
	
			<div id="nbClient">
			<!-- <img src="customer2.png" id="" /> -->
			<div id="nbC">
				<div>CLIENTS</div>
			<div><?php
				//echo "".$_SESSION['client']."";
			?>
			</div>
			</div>
			
			<img src="cust.png">
		</div>

		<div id="nbArticle">
			<div id="nbA">
				<div>ARTICLES</div>
			<div><?php
				//echo "".$_SESSION['article']."";
			?>
			</div>
			</div>
			
			<img src="art.png">
		</div>

		<div id="nbAchat">
			<div id="nbAc">
				<div>ACHATS</div>
			<div><?php
				//echo "".$_SESSION['achat']."";
			?>
			</div>
			</div>
			
			<img src="acha.png">
		</div>
	</div>

</section>
	<?php 			
			require_once("../views/footer.php");	
	?> 
</body>
</html>