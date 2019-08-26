<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="header_style.css">
	<link rel="stylesheet" type="text/css" href="index_style.css">
	<link rel="stylesheet" type="text/css" href="footer_style.css">
</head>
<body>
	<?php require_once("header.php")?>
	<br><br><br><br><br><br><br><div id="banniere">
		<center><h1>CODERSTORE</h1>
		<p>Brand created and designed by coders, for coders</p></center>
	</div>
	<section id="section_index">
		<div id="mission">
			<center>
				<h1>What is our mission ?</h1>
			<p>We, as a group of coders, wanted to show our love of coding through something material. <br>Something we can wear proudly or sometimes sarcastically to show others our passion. <br>

			Wearing our merch means you are not scared to show your feeling about what you love.</p>
			</center>
		</div>
		<div id="img">
			<img src="../img/espace.webp" width="400">
		</div>
	</section>

	<?php require_once("footer.php")?>
</body>
</html>