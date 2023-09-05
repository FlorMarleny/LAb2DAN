<?php

	function conexion(){

	$host = "host-containers-us-west-35.railway.app";
	$port = "port=7124";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=WKcNCGeYCesoJmFdB248";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>