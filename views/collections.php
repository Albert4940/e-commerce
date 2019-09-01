<?php
session_start();
require_once("../controlers/controler_prod.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="collection_style.css">
	<link rel="stylesheet" type="text/css" href="footer_style.css">
</head>
<body>
	<?php require_once("header.php")?>
	<br><br><br><br><br><section id="sectionColllection">
		<center><h1>T-Shirts Collection</h1></center>
		<div id="conteneur">
			
			<?php 
			
			showProdAch();
			?>
		</div>
	</section>

	<?php require_once("footer.php")?>
</body>
</html>