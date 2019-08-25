<?php
	
	class Users{
		private $userName;
		private $pass;		
		private $nom;
		private $prenom;
		private $tel;
		private $dateNaissance;
		private $email;
		private $adresse;
		private $dateInscription;
		private $type;

		//Accessseurs
		public function getUserName(){
			return $this->userName;
		}
		public function getPass(){
			return $this->pass;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getPrenom(){
			return $this->prenom;
		}
		public function getTel(){
			return $this->tel;
		}
		public function getDateNaissance(){
			return $this->dateNaissance;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getAdresse(){
			return $this->adresse;
		}
		public function getDateInscription(){
			return $this->dateInscription;
		}
		public function getType(){
			return $this->type;
		}
		
		
		//Mutateurs

		public function setUserName($userName){
			 $this->userName=$userName;
		}
		public function setPass($pass){
			 $this->pass=$pass;
		}
		public function setNom($nom){
			 $this->nom=$nom;
		}
		public function setPrenom($prenom){
			 $this->prenom=$prenom;
		}
		public function setTel($tel){
			 $this->tel=$tel;
		}
		public function setDateNaissance($dateNaissance){
			 $this->dateNaissance=$dateNaissance;
		}
		public function setEmail($email){
			 $this->email=$email;
		}
		public function setAdresse($adresse){
			 $this->adresse=$adresse;
		}
		public function setDateInscription($dateInscription){
			 $this->dateInscription=$dateInscription;
		}
		public function setType(){
			 $this->type=$type;
		}
		
		//constructeur
		public function __construct(){
			
			$this->userName = null;
			$this->pass = null;
			$this->nom = null;
			$this->prenom=null;
			$this->tel=null;
			$this->dateNaissance = null;			
			$this->email=null;
			$this->adresse=null;
			$this->dateInscription=null;
			$this->type=null;

		}

		public function addUser($userName, $pass, $nom, $prenom, $tel, $dateNaissance, $email, $adresse, $type){

			 $link = mysqli_connect('localhost','root', '', 'market') or die(mysqli_error($link));

                 /*$insertion = "INSERT INTO coupons(code, valeur, date_validite, date_creation, etat, is_printed) VALUES ('" . $this->code . "', " . $this->valeur . ", '" . $this->date_validite . "', now(), '" . $this->etat . "', " . $this->is_printed . ")";*/
                 $insertion = "INSERT INTO user(userName, pass, nom, prenom, tel, dateNaissance, email, adresse, dateInscription, type) VALUES ('" . $userName . "', '" . $pass . "', '" . $nom . "', '" . $prenom . "', '" . $tel . "', '" . $dateNaissance . "', '" . $email . "','" . $adresse . "',now(),'" . $type . "')";
                 // $insertion = "INSERT INTO user(nom,prenom,tel) VALUES('" . $nom . "', '" . $prenom . "', '" . $this->tel . "')";
                $execution = mysqli_query($link, $insertion) or die(mysqli_error($link));
           

		}
	}	
?>