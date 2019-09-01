<?php
// Connexion à la base de données
session_start();
require_once("../tools/connection.php");
/*try
{
	$bdd = new PDO('mysql:host=localhost;dbname=market;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée

$t=date_format(new DateTime(),'Y-m-d h:i:s');
$req = $bdd->prepare('INSERT INTO message (pseudo, mess,timePost) VALUES(?, ?,?)');
$req->execute(array($_SESSION['user'], $_POST['message']),$t);*/

$user = $_SESSION['user'];
$mess = $_POST['message'];

$link=connection();
 $insertion="INSERT INTO message (pseudo, mess,timePost) VALUES('$user','$mess',now())";
 $execution = mysqli_query($link, $insertion) or die(mysqli_error($link));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>