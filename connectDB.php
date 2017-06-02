<?php
	function startConn($dbName) {
		 $hostName = "localhost";
		 $DBuserName = "root";
		 $dbP = "Nonnobis1415";
		 $dbName = $dbName;
		 $connection = new mysqli($hostName, $DBuserName, $dbP,$dbName) or die("Connect failed: %s\n". $conn -> error);	 
		 return $connection;
	}
	 
	function CloseCon($conn) {
	 	$conn -> close();
	}   
?>