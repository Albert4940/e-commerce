<header>
		<nav>
			<ul>
				<li><a href="index.php"></a></li>
				<li><a href="index.php">HOME</a></li>
				<li><a href="collections.php">COLLECTIONS</a></li>
				<li><a href="contact.php">CONTACT </a></li>
				<li><a href="loisir.php">LOISIR</a></li>
				<li><a href="chat.php">CHAT</a></li>

				<?php 

					if(isset($_SESSION['user']))
						echo'<li id="logPart"> USER : '.$_SESSION['user'].' <a href="logout.php">LOGOUT</a></li>';
					else
						echo'<li id="logPart"><a href="login.php">LOGIN</a></li>';
				?>
			</ul>
		</nav>

		
	</header>