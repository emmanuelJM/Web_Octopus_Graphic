<?php 

	$hostname = "localhost";
	$usuariodb= "root";
	$passworddb = "";
	$dbname = "cart";

	$connect = new mysqli($hostname, $usuariodb, $passworddb, $dbname);
	if($connect -> connect_error){
		die("could not connect to the server");
	}

?>