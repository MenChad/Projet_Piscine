<?php
	// Define MySQL connection data
	$MYSQL['host'] = "localhost";
	$MYSQL['user'] = "admin";
	$MYSQL['password'] = "snir2";
	$MYSQL['database'] = "gestion_piscine";

	// Connect to MySQL database
	$mysqli = mysqli_connect($MYSQL['host'],$MYSQL['user'],$MYSQL['password'],$MYSQL['database']);

	// Make SQL request
	$result = $mysqli->query("SELECT ID, Turbidité FROM capteurs ORDER BY `ID` DESC LIMIT 10 ");

	// Loop through the result and populate an array
	$capteur_TURBIDITE = Array();
    while ($capteur_TURBIDITE[] = $result->fetch_assoc()){}
    array_pop($capteur_TURBIDITE);
	$capteur_TURBIDITE = array_reverse($capteur_TURBIDITE);
	// Return the result and close MySQL connection
    $mysqli->close();
    header('Content-type: application/json');

	echo json_encode($capteur_TURBIDITE);
?>
