<?php
	require_once("../tools/connection.php");
	class Commandes{

		private $idUser;
		private $idProduit;
		private $nom;
		private $nomProd;
		private $prix;
		private $prixTotal;
		private $qte;
		private $dateCom;

		public function __construct(){
			
			$this->idUser = null;
			$this->idProduit = '';
			$this->nom = null;
			$this->nomProd='';
			$this->qte=null;
			$this->prix = '';
			$this->prixTotal=null;
			$this->qte=null;
			$this->date=null;

		}

		public function	addCommande($idUser,$idProduit,$nom,$nomProd,$qte,$prix,$prixTotal,$qteProd){
			$link=connection();
			$insertion = "INSERT INTO commande(idUser, idProduit, nomProd, nom, prix, prixTotal, qte, dateCommande) VALUES (" . $idUser . ", '" . $idProduit . "', '" . $nomProd . "', '" . $nom . "', '" . $prix . "', '" . $prixTotal . "','" . $qte . "',now())";
                $execution = mysqli_query($link, $insertion) or die(mysqli_error($link));
               
                
                /*$req = "SELECT qte from produit where idProduit='$idProduit';"
                $execution1 = mysqli_query($link, $req) or die(mysqli_error($link));
                while($data = mysqli_fetch_array($execution1)){
                	$quantite=$data[0];
                }*/
                $qteProd = $qteProd-$qte;
                
                $req2 = "UPDATE produit set qte='$qteProd' where idProduit='$idProduit';";
                $execution = mysqli_query($link, $req2) or die(mysqli_error($link));


		}

		public function listerCommande($idUser){
			$link=connection();
			$insertion = "SELECT * FROM commande WHERE idUser='$idUser'";
			 $execution = mysqli_query($link, $insertion) or die(mysqli_error($link));
			 
			 while($data = mysqli_fetch_array($execution)){
			 	echo "<tr style='background-color: #70a1ff;' ><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td></tr>";
			 }

		}


		public function nbCommande($idUser){

			$link = connection();
			$insertion = "SELECT COUNT(*) FROM COMMANDE WHERE idUser='$idUser'";
			 $execution = mysqli_query($link, $insertion) or die(mysqli_error($link));
			 $nb = 0;
			 while($data = mysqli_fetch_array($execution)){
			 	$nb= $data[0];
			 }

			 return $nb;
		}
	}
?>