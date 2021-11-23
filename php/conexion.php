<?php 

	$hostname = "localhost";
	$usuariodb= "OctopusGraphic";
	$passworddb = "Perlita15";
	$dbname = "cart";

	$connect = new mysqli($hostname, $usuariodb, $passworddb, $dbname);
	if($connect -> connect_error){
		die("could not connect to the server");
	} 
?>



