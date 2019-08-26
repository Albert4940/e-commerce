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
		<center><h1>MODIFICATION CLIENT</h1></center>
		<center><div id="update">
			<form method="POST" id="formSUC">
				<input type="search" name="recherche" placeholder="CODE" id="inputSearch"/>
				<input type="submit" name="rech" value="search" id="btnSearch"/>
			</form>			
		</div></center><br/>
		
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
		$reque ="select * from clients where numero='$search'";
			$ex=$con->query($reque);
			$req=mysqli_fetch_array($ex);
			if($req[0]>0)
			$_SESSION['num1']=$req[0];
			else
			$_SESSION['num1']=-1;
			//while ($req=mysqli_fetch_array($ex)) {
			//echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[6]</td><td>$req[7]</td></tr><br/>";
			//}

	}
?>

		<form method="POST" action="" id="formu">
			<div id="fo">
				<table >
				   	<tr><td> NUMERO</td><td><input type="text" name="num" disabled value="<?php if(isset($_POST['rech'])){echo $req[0];}?>" /></td></tr>
				   	<tr><td> NOM</td><td><input type="text" name="nom" value="<?php if(isset($_POST['rech'])){echo $req[1];}?>" /></td></tr>
				    <tr><td> PRENOM</td><td><input type="text" name="prenom" value="<?php if(isset($_POST['rech'])){echo $req[2];}?>" /></td></tr>
				</table>
				<table>
				    <tr><td> ADRESSE</td><td><input type="text" name="adresse" value="<?php if(isset($_POST['rech'])){echo $req[3];}?>" /></td></tr>
				    <tr><td> CODE POSTAL</td><td><input type="text" name="codePostal" value="<?php if(isset($_POST['rech'])){echo $req[4];}?>" /></td></tr>	
				    <tr><td>PAYS</td><td> <select name="Pays" >
				    	<option value="France" <?php if(isset($_POST['rech'])){if($req[6]=='France')echo "selected"; }?> >FRANCE</option>
				    	<option value="Haiti" <?php if(isset($_POST['rech'])){if($req[6]=='Haiti')echo "selected"; }?> >HAITI</option>
				    	<option value="Canada" <?php if(isset($_POST['rech'])){if($req[6]=='Canada')echo "selected"; }?>>CANADA</option>
				    </select></td></tr>
				    <tr><td> TELEPHONE</td><td><input type="text" name="telephone" value="<?php if(isset($_POST['rech'])){echo $req[7];}?>" /></td></tr>
		   		   </table>
			</div>
		  
		   <div id="btn" class="btnUC">
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
					$search = $_SESSION['num1'];
					$name =$_POST['nom'];
					$pname = $_POST['prenom'];
					$ad=$_POST['adresse'];
					$code=$_POST['codePostal'];
					$pays =$_POST['Pays'];
					$tel=$_POST['telephone'];
					$ville='';

					$req ="update clients set nom= '$name',prenom='$pname',adresse='$ad',codepostal='$code',pays='$pays',telephone='$tel' where numero='$search'";
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
				if(isset($_SESSION['num1']) )
				{
					if($_SESSION['num1']<0)
					{
						echo '<div id="no">
					<p>NUMERO INTROUVABLE !</p>
						</div>';
						$_SESSION['num1']=0;
					}
				}
?>
 	</div>
	</section>
	
</body>
</html>
