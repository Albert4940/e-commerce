<?session_start()?>
<header>
		<center><h1>BOUTIK PAM</h1></center>
		<div id="tete">

			<div id="homediv"><a href="dashboard.php"><input type="button" required value="HOME" id="home"/>&nbsp&nbsp</a>USER : &nbsp&nbsp&nbsp<I><?php echo $_SESSION['user'];?></I>&nbsp&nbsp&nbsp&nbsp&nbsp<p><i><?php echo strftime("%A %d %B %Y").' '.strftime("%H : %M : %S");?></p></i></div>
		
		<!-- <div> -->
			
		<!-- </div> -->
		<div id="logoutDiv"><a href="logout.php"><input type="button" required value="LOGOUT" id="logout"/></a></div>
		</div>
		
	</header>