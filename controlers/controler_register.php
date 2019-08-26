<?php
require_once("../tools/connection.php");

function verificationRegister($user,$pass){
	$link = connection();
			$req = "SELECT idUser FROM user where userName='$user' AND pass='$pass';";
			$execution = mysqli_query($link, $req) or die(mysqli_error($link));
			$data=mysqli_fetch_array($execution);
			if($data[0]>0)
			return $data[0];
			else
				return 0;
}

	if(isset($_POST['save_Register'])){
		require_once("../classes/Users.php");
	$userName=$_POST['user'];
	$pass=$_POST['password'];

		if(verificationRegister($userName,$pass)==0){
			$name = $_POST['nom'];
			$firstName = $_POST['prenom'];
			$tel=$_POST['tel'];
			$dateNaissance=$_POST['dateNaissance'];
			$email=$_POST['email'];
			$adresse=$_POST['adresse'];
			$type=$_POST['type'];
			$user = new Users();
			$user->addUser($userName, $pass, $name, $firstName, $tel, $dateNaissance, $email, $adresse, $type);
			$_SESSION['user']=$_POST['user'];
				$_SESSION['pass']=$_POST['password'];
			header('location: ../views/index.php');

		}
	
	}
	
	//$user->addUser('', '', $name, $firstName, '', '', '', '', '', '');
	if(isset($_POST['login'])){
		
		function verification($user,$pass,$type){
			$link = connection();
			$req = "SELECT * FROM user where userName='$user' AND pass='$pass' AND type='$type';";
			$execution = mysqli_query($link, $req) or die(mysqli_error($link));
			$data=mysqli_fetch_array($execution);
			if($data[0]>0)
			return $data[0];
			else
				return 0;
		}
	}
	
?>