<?php
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
		<center><h1>MODIFICATION ARTICLE</h1></center>
		<div id="update">

			<form method="POST">
				<input type="search" name="recherche" placeholder="CODE" id="inputSearch" />
				<input type="submit" name="rech" value="search" id="btnSearch" />
			</form>			
		</div>
		
<?php

	
		$con=mysqli_connect('localhost',$_SESSION['userN'],$_SESSION['pass'],'projet');
		if(!$con){
		echo "Erreur : IMPOSSIBLE de se connecter a MYSQL.".PHP_EOL;
		echo "Errno de debogage : ".mysqli_connect_errno().PHP_EOL;
		echo "Erreur de debogage : ".mysqli_connect_error().PHP_EOL;				
		exit;
		$err="error";
	}
	
	if(isset($_POST['rech']) )
	{
		$search=$_POST['recherche'];
		$reque ="select * from articles where reference='$search'";
			$ex=$con->query($reque);
			$req=mysqli_fetch_array($ex);
			if($req[0]>0)
			$_SESSION['num']=$req[0];
			else
			$_SESSION['num']=-1;	

			//while ($req=mysqli_fetch_array($ex)) {
			//echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[6]</td><td>$req[7]</td></tr><br/>";
			//}

	}
?>

		<form method="POST" action="">
		   <table border="1">

		   	<tr><td> REFERENCE</td><td><input type="text" name="num" disabled value="<?php if(isset($_POST['rech'])){echo $req[0];}?>" /></td></tr>
		   	<tr><td> Nom</td><td><input type="text" name="nom" value="<?php if(isset($_POST['rech'])){echo $req[1];}?>" /></td></tr>
		    <tr><td> Description</td><td><input type="text" name="description" value="<?php if(isset($_POST['rech'])){echo $req[2];}?>" /></td></tr>
		    <tr><td> Prix</td><td><input type="text" name="prix" value="<?php if(isset($_POST['rech'])){echo $req[3];}?>" /></td></tr>		    
		    

		   </table>
		   <div id="btn">
   	 <input type="submit" value="Valider" name="valider" id="btn1"/><input type="reset" value="Effacer" id="btn2" />
   </div>
	 </form>
				
				<?php
	
					$con=mysqli_connect('localhost',$_SESSION['userN'],$_SESSION['pass'],'projet');
					if(!$con){
					echo "Erreur : IMPOSSIBLE de se connecter a MYSQL.".PHP_EOL;
					echo "Errno de debogage : ".mysqli_connect_errno().PHP_EOL;
					echo "Erreur de debogage : ".mysqli_connect_error().PHP_EOL;				
					exit;
					$err="error";
				}
				
				
				
				

				if(isset($_POST['valider']) )
				{
					$search=$_SESSION['num'];
					$name =$_POST['nom'];
					$desc = $_POST['description'];
					$price=$_POST['prix'];

					$req ="update articles set nom= '$name',description='$desc',prix='$price' where reference='$search'";
						$ex=$con->query($req);
						if($ex){
	echo '<div id="ok">
			<p>MODIFICATION REUSSITE</p>
		</div>';
	}
	else{
	echo '<div id="no">
			<p>MODIFICATION ECHOUEE</p>
		</div>';
	}
	
				}
				if(isset($_SESSION['num']) )
				{
					if($_SESSION['num']<0)
					{
						echo '<div id="no">
					<p>NUMERO INTROUVABLE !</p>
						</div>';
						$_SESSION['num']=0;
					}
				}
			?>

 	</div>
	</section>
	
</body>
</html>
