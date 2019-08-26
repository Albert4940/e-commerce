<?php 
session_start();
	if (!isset($_SESSION['userN'])) {
	header('location: index.php');
	}		
?>