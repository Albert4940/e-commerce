
<?php
session_start();
?>
<header>
		<center><h1>CODERSTORE</h1></center>
		<div id="tete">

			<div><a href="dashboard.php"><input type="button" required value="HOME" id="home"/>&nbsp&nbsp</a>USER &nbsp&nbsp&nbsp<I><?php echo $_SESSION['user'];?></I></div>
		<div id="logoutDiv"><a href="../views/logout.php"><input type="button" required value="LOGOUT" id="logout"/></a></div>
		</div>
		
	</header>