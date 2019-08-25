<?php
	
	require_once("../classes/Users.php");
	$userName=$_POST['user'];
	$pass=$_POST['password'];
	$name = $_POST['nom'];
	$firstName = $_POST['prenom'];
	$tel=$_POST['tel'];
	$dateNaissance=$_POST['dateNaissance'];
	$email=$_POST['email'];
	$adresse=$_POST['adresse'];
	$type=$_POST['type'];
	$user = new Users();
	$user->addUser($userName, $pass, $name, $firstName, $tel, $dateNaissance, $email, $adresse, $type);
	header('location: ../views/index.php');
	//$user->addUser('', '', $name, $firstName, '', '', '', '', '', '');
?>