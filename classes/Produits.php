<?php
	
	class Produits{
		private $code;
		private $nom;
		private $description;
		private $prix;
		private $qte;
		private $size;
		private $color;
		private $dateAjout;
		private $imgUrl;

		//Accessseurs
		public function getCode(){
			return $this->code;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getDescription(){
			return $this->description;
		}
		public function getPrix(){
			return $this->prix;
		}
		public function getQte(){
			return $this->qte;
		}
		public function getSize(){
			return $this->size;
		}
		public function getColor(){
			return $this->color;
		}
		public function getDate(){
			return $this->dateAjout;
		}
		public function getImgUrl(){
			return $this->imgUrl;
		}
		
		//Mutateurs

		public function setNom($nom){
			 $this->nom=$nom;
		}
		public function setDescription($description){
			 $this->description=$description;
		}
		public function setPrix($prix){
			 $this->prix=$prix;
		}
		public function setQte($qte){
			 $this->qte=$qte;
		}
		public function setSize($size){
			 $this->size=$size;
		}
		public function setColor($color){
			 $this->color=$color;
		}
		public function setColor($dateAjout){
			 $this->dateAjout=$dateAjout;
		}
		public function setImgUrl($imgUrl){
			 $this->imgUrl=$imgUrl;
		}
		//constructeur
		public function __construct(){
			
			$this->code = null;
			$this->nom = '';
			$this->description = '';
			$this->prix='';
			$this->qte=null;
			$this->size = '';
			$this->color=null;
			$this->dateAjout=null;
			$this->imgUrl=null;

		}

		public function addProduit($idVendeur, $nom, $description, $prix, $qte, $size, $color, $imgUrl){

			for($i = 0; $i < $qte; $i++){
                $this->code = "PO-" . rand(100000, 999999);

                 /*$insertion = "INSERT INTO coupons(code, valeur, date_validite, date_creation, etat, is_printed) VALUES ('" . $this->code . "', " . $this->valeur . ", '" . $this->date_validite . "', now(), '" . $this->etat . "', " . $this->is_printed . ")";*/
                $insertion = "INSERT INTO produit(idVendeur, code, nom, description, prix, qte, size, color, dateAjout, imgUrl) VALUES (" . $this->idVendeur . ", '" . $this->code . "', '" . $this->nom . "', '" . $this->description . "', " . $this->prix . ", " . $this->qte . ",'" . $this->size . "','" . $this->color . "',now(),'" . $this->imgUrl . "')";
                $execution = mysqli_query($link, $insertion) or die(mysqli_error($link));
            }

		}
	}	
?>