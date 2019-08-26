<?php

	 function connection(){
		$con = mysqli_connect('localhost','root', '', 'market') or die(mysqli_error($link));
		if($con){
			return $con;
		}

		}
?>