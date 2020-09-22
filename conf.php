<?php
function getDB() {
	$dbhost="localhost";
	$dbuser="YOURDPUSER";
	$dbpass="YOURDBPASSWORD";
	$dbname="YOURDBNAME";
	$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbConnection;
}
?>