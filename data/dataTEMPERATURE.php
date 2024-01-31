<?php
	// Define MySQL connection data
	$MYSQL['host'] = "localhost";
	$MYSQL['user'] = "admin";
	$MYSQL['password'] = "snir2";
	$MYSQL['database'] = "gestion_piscine";

	// Connect to MySQL database
	$mysqli = mysqli_connect($MYSQL['host'],$MYSQL['user'],$MYSQL['password'],$MYSQL['database']);

	// Make SQL request
	$result = $mysqli->query("SELECT ID, Température FROM capteurs ORDER BY `ID` DESC LIMIT 10 ");

	// Loop through the result and populate an array
	$capteur_TEMPERATURE = Array();
    while ($capteur_TEMPERATURE[] = $result->fetch_assoc()){}
    array_pop($capteur_TEMPERATURE);
	$capteur_TEMPERATURE = array_reverse($capteur_TEMPERATURE);
	// Return the result and close MySQL connection
    $mysqli->close();
    header('Content-type: application/json');

	echo json_encode($capteur_TEMPERATURE);
?>
