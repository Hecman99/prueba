<?php

/**
* Author : https://www.roytuts.com
*/
	
$dbConn = mysqli_connect('127.0.0.1:3307', 'adminSD', 'adminSD12345', 'testdb') or die('MySQL connect failed. ' . mysqli_connect_error());

function dbQuery($sql) {
	global $dbConn;
	$result = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
	return $result;
}

function dbFetchAssoc($result) {
	return mysqli_fetch_assoc($result);
}

function closeConn() {
	global $dbConn;
	mysqli_close($dbConn);
}
