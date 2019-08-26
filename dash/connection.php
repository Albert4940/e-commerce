<?php
session_start();
?>
<?php
	//if(isset($_POST['submit']))
//{
	
	$userN = $_POST['user'];
	$passW = $_POST['pass'];
		$con=mysqli_connect('localhost',$userN,$passW,'projet');
	if(!$con){
		echo "Erreur : IMPOSSIBLE de se connecter a MYSQL.".PHP_EOL;
		echo "Errno de debogage : ".mysqli_connect_errno().PHP_EOL;
		echo "Erreur de debogage : ".mysqli_connect_error().PHP_EOL;
		$error="Erreur";
		$_SESSION['privilege']=null;
		$_SESSION['err']=$error;
		header('location: index.php');
		exit;
	}
	
	//$result= mysql_query("SHOW GRANTS FOR '$userN'");
	$result=$con->query("SHOW GRANTS FOR '$userN'@'localhost'");
while($row=mysqli_fetch_array($result)){
//echo $row[0];
//$classes=explode("GRANTS",$row[0]);
//echo $classes[0];
$res=$row[0];
}

$_SESSION['err']=null;
	$_SESSION['userN']=$_POST['user'];
	$_SESSION['pass']=$_POST['pass'];

$classes=explode(" ",$res);

for($i=1;$i<=4;$i++){
	if($_SESSION['pass']=='vendeur'){
		if(strtolower($classes[$i])=='select,' || strtolower($classes[$i])=='insert,' || strtolower($classes[$i])=='update')
		{			
			$_SESSION['privilege']='all';
		}
	}
	else {
			$_SESSION['privilege']='select';
		}	
}

	echo $_SESSION['privilege'];

	//echo'Bonjour : '.$_SESSION['userN'];
	header('location: dashboard.php');
	//mysqli_close($con);
		
//}
		
	

?>