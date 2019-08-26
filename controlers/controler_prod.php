<?php
	session_start();
	require_once("../classes/Produits.php");
	if(isset($_POST['valider'])){
		$imgUrl;
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
                }
        }
}

		$prod = new Produits();
		echo $imgUrl;
		$prod->addProduit($_SESSION['idVend'],$_POST['nom'],$_POST['description'],$_POST['prix'],$_POST['qte'],$_POST['size'],$_POST['color'],$imgUrl);

	}
?>