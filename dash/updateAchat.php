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
		<center><h1>MODIFICATION ACHAT</h1></center>
		<div id="update">
			<form method="POST">
				<input type="search" name="recherche" placeholder="CODE"  id="inputSearch"/>
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
		$reque ="select * from achats where id_achat='$search'";
			$ex=$con->query($reque);
			$req=mysqli_fetch_array($ex);
			if($req[0]>0)
			$_SESSION['num2']=$req[0];
			else
			$_SESSION['num2']=-1;

	}
?>

		<form method="POST" action="">
		   <table border="1">
		   	<tr><td> Id achat</td><td><input type="text" name="num" value="<?php if(isset($_POST['rech'])){echo $req[0];}?>" disabled/></td></tr>
		   	<tr><td> Id client</td><td><input type="text" name="idClient" value="<?php if(isset($_POST['rech'])){echo $req[1];}?>" /></td></tr>
		   	<tr><td> Id article</td><td><input type="text" name="idArticle" value="<?php if(isset($_POST['rech'])){echo $req[2];}?>" /></td></tr>
		    <tr><td> Quantite</td><td><input type="text" name="quantite" value="<?php if(isset($_POST['rech'])){echo $req[3];}?>" /></td></tr>
		    <tr><td> Date</td><td><input type="date" name="date" value="<?php if(isset($_POST['rech'])){echo $req[4];}?>" /></td></tr>		    
		    

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
					$search = $_SESSION['num2'];
					$idC = $_POST['idClient'];
					$idA=$_POST['idArticle'];
					$qte=$_POST['quantite'];
					$da=$_POST['date'];

					$req ="update achats set id_client='$idC',id_article='$idA',quantite= '$qte',date='$da' where id_achat='$search'";
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
				if(isset($_SESSION['num2']) )
				{
					if($_SESSION['num2']<0)
					{
						echo '<div id="no">
					<p>NUMERO INTROUVABLE !</p>
						</div>';
						$_SESSION['num2']=0;
					}
				}
			?>

 	</div>
	</section>
	
</body>
</html>
