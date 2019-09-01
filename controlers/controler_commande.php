<?php
	require_once("../classes/Commandes.php");

	function addCom($idUser,$idProduit,$nom,$nomProd,$qte,$prix,$prixTotal,$qteProd){

		$com = new Commandes();
		$com->addCommande($idUser,$idProduit,$nom,$nomProd,$qte,$prix,$prixTotal,$qteProd);
		header('location: panier.php');
	}

	function nbCom($isUser){
		$com = new Commandes();
		return $com->nbCommande($idUser);
	}

	function showCom($idUser){
		$com = new Commandes();
		$com->listerCommande($idUser);
	}

?>