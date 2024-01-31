<?php
	// Define MySQL connection data
	$MYSQL['host'] = "localhost";
	$MYSQL['user'] = "root";
	$MYSQL['password'] = "";
	$MYSQL['database'] = "gestion_piscine";

	// Connect to MySQL database
	$mysqli = mysqli_connect($MYSQL['host'],$MYSQL['user'],$MYSQL['password'],$MYSQL['database']);

	// Make SQL request
	$result = $mysqli->query("SELECT ID, PH FROM capteurs ORDER BY `ID` DESC LIMIT 10 ");

	// Loop through the result and populate an array
	$capteur_PH = Array();
    while ($capteur_PH[] = $result->fetch_assoc()){}
    array_pop($capteur_PH);
	$capteur_PH = array_reverse($capteur_PH);
	// Return the result and close MySQL connection
    $mysqli->close();
    header('Content-type: application/json');

	echo json_encode($capteur_PH);
?>
