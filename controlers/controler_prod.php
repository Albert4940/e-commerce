<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    require_once("../classes/Produits.php");
	function upload(){

		$imgUrl=0;
		if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
		{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 3000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'webp');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], '../uploadsImg/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                        $imgUrl=basename($_FILES['monfichier']['name']);
                         //echo $imgUrl;
                }
        }
}
		return $imgUrl;
	}

	
	
	if(isset($_POST['valider'])){

		$prod = new Produits();
		$prod->addProduit($_SESSION['idVend'],$_POST['nom'],$_POST['description'],$_POST['prix'],$_POST['qte'],$_POST['size'],$_POST['color'],upload());
		header('location: ../dash/addProd.php');

	}
	function showDetailProd($idProduit){
		$pro = new Produits();
		return $pro->listerDetailProd($idProduit);
	}
	function showProdAch(){
		$pro = new Produits();
		$pro->listerProduitAch();
	}
	function showProd($idVendeur){
		$pro = new Produits();
		$pro->listerProduit($idVendeur);
	}

	function qteProd($idVendeur){
		$pro = new Produits();		
		return $pro->nbreProduit($idVendeur);
	}

	//if(isset($_POST['rech'])){
		function verificationProd($idRech,$idVendeur){
			$prod = new Produits();
			return $prod->verificationProduit($idRech,$idVendeur);
		}


	//}
	if(isset($_POST['validerUpdate'])){
		$prod = new Produits();
		if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
		{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 3000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'webp');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], '../uploadsImg/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                        $imgUrl=basename($_FILES['monfichier']['name']);
                         //echo $imgUrl;
                }
        }
}


		if(!isset($imgUrl)){

			$prod->updateProduit2($_SESSION['codeProd'],$_POST['nom'],$_POST['description'],$_POST['prix'],$_POST['qte'],$_POST['size'],$_POST['color']);
		}
		else {
			
			# code...
			$prod->updateProduit($_SESSION['codeProd'],$_POST['nom'],$_POST['description'],$_POST['prix'],$_POST['qte'],$_POST['size'],$_POST['color'],upload());
		}
		

		header('location: ../dash/updateProd.php');
	}
?>