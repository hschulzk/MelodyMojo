<?php
	
	function startConn() {
	    if(!isset($connection)) {
	         // Load configuration as an array. Use the actual location of your configuration file
	        $config = parse_ini_file('/home3/kschulzk/config/mmDbConnect.ini');
	        $connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
	    }

	    // If connection was not successful, return an error
	    if($connection === false) {
	        return mysqli_connect_error();
	    }
	    return $connection;
	}	
	
	//Takes a connection object as an argument and closes it
	function closeCon($dbc) {
	 	$dbc -> close();
	}

	/*	
	Query database. 
	Takes query text (required) optional database connection or database name. If not provided defaults to main DB connection;  
	name returns query results. 
	If error, return error
	*/ 
	function queryDB ($qText, $dc = Null, $db = 'mm') {	 
		if(!$dc) {
			$dbc = startConn($db);
		} else {
			$dbc = $dc;
		}
		$qResult = $dbc->query($qText);
		if(!$dc) {
			closeCon($dbc);
		}
		return $qResult;		
	}
	// Dump all form submissions into the Form Submissions table for first few weeks to test data integrity
	function dumpFormData($post){
		$dbc = startConn('mm');
		$post = json_encode($post);
		$postedData = "'" . $dbc->real_escape_string($post) . "'";
		$dumpFormQ = "INSERT INTO formsubmissions (formContents, createDate) 
					VALUES ($postedData, now())";
		if($dbc->query($dumpFormQ) === true) {
		  $returnVal = mysqli_insert_id($dbc);
		} else {
		  $returnVal = $dbc->error;
		}		
		closeCon($dbc);
		return $returnVal;		
	}	
?>