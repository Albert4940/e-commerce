<?php


	
	//$_SESSION['notification']=='';
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
		<center><h1>MODIFICATION PRODUIT</h1></center>
		<div id="update">

			<form method="POST">
				<input type="search" name="recherche" placeholder="CODE" id="inputSearch" />
				<input type="submit" name="rech" value="search" id="btnSearch" />
			</form>		
			<?php

			require_once("../controlers/controler_prod.php");
			/*if(isset($_SESSION['codeProd']) AND $_SESSION['codeProd']>0){
				$data = verificationProd($_SESSION['rech'],$_SESSION['idVend']);
		if( $data[0]>0)
		{
			$_SESSION['codeProd'] = $data[2];

			$req=$data;
		}
			}*/
			
			if(isset($_POST['rech']) )
	{
		
		$data = verificationProd($_POST['recherche'],$_SESSION['idVend']);
		if( $data[0]>0)
		{
			$_SESSION['codeProd'] = $data[2];
			$_SESSION['rech'] = $_POST['recherche'];
			$req=$data;
		}
		
		else{
			$_SESSION['codeProd']= $data;

		}
			
			//while ($req=mysqli_fetch_array($ex)) {
			//echo "<tr><td>$req[0]</td><td>$req[1]</td><td>$req[2]</td><td>$req[3]</td><td>$req[4]</td><td>$req[6]</td><td>$req[7]</td></tr><br/>";
			//}

	}
			if(isset($_POST['rech'])){
				if ( $data==0) {

					echo '<div id="no">
					<p>NUMERO INTROUVABLE !</p>
						</div>';	
				}


				
			}
			if(isset($_SESSION['notification'])){

				if ($_SESSION['notification']=='success') {
					# code...
					
					echo '<div id="ok">
					<p> MODIFICATION REUSSITE !</p>
						</div>';
					
				}
				else {

				}
			}
			?>
			
		</div>
		
<?php
	
	
?>
<!-- <tr><td> REFERENCE</td><td><input type="text" name="num" disabled value="<?php if(isset($_POST['rech'])){echo $req[0];}?>" /></td></tr> -->

		 <form method="POST" action="../controlers/controler_prod.php" enctype="multipart/form-data"> 

		 	<div id="formUpdateProd">
		 		<div id="formUpdateProd1" style="width: 75%">
	   	   		<table style="margin-right:2.5%; margin-left: 1.5%; width: 50%">
	   	   			<tr><td> CODE PRODUIT</td><td><input type="text" name="code" disabled value="<?php if(isset($_POST['rech']) AND isset($req)){echo $req[2];}?>" /></td></tr>
	   	   			<tr><td> NOM</td><td><input type="text" name="nom" required value="<?php if(isset($_POST['rech']) AND isset($req)){echo $req[3];}?>"/></td></tr>
				    
				    <tr><td> QUANTITE</td><td><input type="number" name="qte" required value="<?php if(isset($_POST['rech']) AND isset($req)){echo $req[6];}?>"/></td></tr>
				   <tr><td> DESCRIPTION</td><td><textarea required name="description" ><?php if(isset($_POST['rech']) AND isset($req)){echo $req[4];}?> </textarea></td></tr>

	   	   		</table>
	   	   		<table style="margin-right:2.5%; width: 50%">
	   	   			<tr><td> PRIX</td><td><input type="text" name="prix" required value="<?php if(isset($_POST['rech']) AND isset($req)){echo $req[5];}?>"/></td></tr>
	   	   			<tr><td> COULEUR</td><td><input type="text"  required name="color" value="<?php if(isset($_POST['rech']) AND isset($req)){echo $req[8];}?>"/></td></tr>	
			    <tr><td>SIZE</td><td> <select name="size">
			    	<option value="small">SMALL</option>
			    	<option value="medium">MEDIUM</option>
			    	<option value="large">LARGE</option>
			    </select></td></tr>
			     <!-- <tr><td>UPLOAD IMAGE</td><td></td></tr> -->
	   	   		</table>
	   	   </div>
	   	
	    	<div style=" margin-left: 1.5%; width:20%; margin-bottom: -20px;margin-top:5px; margin-right:-20px;" >
	    		<img src="../uploadsImg/<?php if(isset($_POST['rech'])){echo $req[10];}?>" width="90%">
	    		<input type="file" name="monfichier" >
	    	</div>
		 </div>
			    
   <!-- </table> -->
    <div id="btn" class="btnUC">
   	 <input type="submit" value="Valider" name="validerUpdate" id="btn1" /><input type="reset" value="Effacer" id="btn2" />

   </div>
  
	 </form>
				
				<?php
	
					

				if(isset($_POST['valider']) )
				{
					
						if($_SESSION['codeProd']!=0){
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
						
						$_SESSION['num']=0;
					}
				}
			?>

 	</div>
	</section>
	
</body>
</html>
