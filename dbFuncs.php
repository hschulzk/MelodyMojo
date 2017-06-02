<?php
	
	/*
		Creates a database connection with given database name.
		I still need figure out how to mask the credentials; a server failure could expose them.
	*/
	function startConn($dbName) {
		// $hostName = "redacted";
		// $DBuserName = "redacted";
		// $dbP = "redacted";
		// $dbName = "redacted";
	
		$dbc = new mysqli($hostName, $DBuserName, $dbP,$dbName);
		if ($dbc -> connect_error) {
			return false;
		}	 
		return $dbc;
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

	function queryToArray($q) {
		$q->data_seek(0);
		$returnArray = array();
		while($row = $q->fetch_assoc()){
			$returnArray[] = $row;
		}
		return $returnArray;	
	}

	function getLessonsOfType($lessonType = Null) {
		$mrQ = "SELECT lessontypes.name, lessons.id, lessons.lessonDate, lessons.maxClass, lessontypes.cost 
				from lessons 
				inner join lessontypes on lessons.typeID = lessontypes.id";
		if($lessonType) {
			$mrQ = $mrQ . " WHERE typeID = $lessonType";
		}
				
		$classes = queryDB ($mrQ);
		return queryToArray($classes);
	}	


	/*
		Lookup functions to get ID info from email, name, phone. 
		Each has it's own self contained database connection with the approrpriate DB name designated
	*/

	function getIDFromName($first, $last, $parentID = Null) {
		$dbc = startConn('mm');
		//Check whether email is already in database. If so, set $emailID to its value.	
		$eFirst = "'" . $dbc->real_escape_string($first) . "'";
		$eLast = "'" . $dbc->real_escape_string($last) . "'";
		$nameQ = "SELECT indivID FROM indivs WHERE firstName like $eFirst and lastName like $eLast";
		if($parentID) {
			$nameQ = $nameQ . " and parentID = $parentID";	
		}
		$rName = queryDB($nameQ, $dbc);
		$row = $rName->fetch_assoc();
		closeCon($dbc);
		return $row['indivID'];	
	}

	function getIDFromPhone ($phoneVal) {
		$dbc = startConn('mm');
		//Clean input 		
		$phone = "'" . $dbc->real_escape_string($phoneVal) . "'";
		//Check whether phone already exists in the DB
		$phoneQ = "SELECT indivID FROM phones WHERE phone like $phone";
		$checkPhone = queryDB($phoneQ, $dbc);			
		//If query returns record, set var to ID
		$row = $checkPhone->fetch_assoc();
		closeCon($dbc);
		return $row['indivID'];	
	}

	function getIDFromEmail ($emailVal) {
		$dbc = startConn('mm');
		//Check whether email is already in database. If so, set $emailID to its value.	
		$email = "'" . $dbc->real_escape_string($emailVal) . "'";
		$emailQ = "SELECT indivID FROM emails WHERE email like $email";
		$checkEmail = queryDB($emailQ, $dbc);
		$row = $checkEmail->fetch_assoc();
		closeCon($dbc);
		return $row['indivID'];	
	}	


	/*
		Functions to create the different data records if 
		they aren't found by the lookup functions.
	*/

	function makeSafe($val, $conn) {
		return "'" . $conn->real_escape_string($val) . "'";
	}

	function createPhone($phone, $id) {
		$dbc = startConn('mm');
		$phone = makeSafe($phone, $dbc);
		$indivID = "'" . $dbc->real_escape_string($id) . "'";
		$insertPhoneQ = "INSERT INTO phones (phone, indivID) VALUES ($phone, $indivID)";
		if($dbc->query($insertPhoneQ) === true) {
		  $phoneID = mysqli_insert_id($dbc);
		} else {
		  $phoneID = 0;
		}
		closeCon($dbc);
		return $phoneID;		
	}

	function createEmail($emailVal, $id) {
		$dbc = startConn('mm');
		$email = "'" . $dbc->real_escape_string($emailVal) . "'";
		$indivID = "'" . $dbc->real_escape_string($id) . "'";
		$insertEmailQ = "INSERT INTO emails (email, indivID) VALUES ($email, $indivID)";
		if($dbc->query($insertEmailQ) === true) {
		  $returnVal = mysqli_insert_id($dbc);
		} else {
		  $returnVal = 0;
		}
		closeCon($dbc);
		return $returnVal;
	}

	function createNewUser($first, $last, $parentID = 0) {
		$dbc = startConn('mm');
		$eFirst = "'" . $dbc->real_escape_string($first) . "'";
		$eLast = "'" . $dbc->real_escape_string($last) . "'";
		$insertUser = "INSERT INTO indivs (firstName, Lastname, parentID) 
						VALUES ($eFirst, $eLast, $parentID)";
		if($dbc->query($insertUser) === true) {
		  $returnVal = mysqli_insert_id($dbc);
		} else {
		  $returnVal = 0;
		}
		closeCon($dbc);
		return $returnVal;		
	}


	/*
		Looks up individual from info. 
		Bridge between the form handler and the abstracted lookup and create functions
	*/

	function checkUserMatch($firstName, $lastName, $email, $phone) {
		$emailMatch = getIDFromEmail($email);
		$phoneMatch = getIDFromPhone($phone);
		$nameMatch = getIDFromName($firstName, $lastName);
		//if the name or email and phone don't match, return false
		if (!$nameMatch or (!$emailMatch and !$phoneMatch)) {
			$newID = createNewUser($firstName, $lastName);
			createPhone($phone, $newID);
			createEmail($email, $newID);
			return $newID;
		}
		//if the name matches and one of the other two matches, return true, and update any mismatched data by adding a new record 
		elseif ($nameMatch and ($emailMatch or $phoneMatch)) {
			if(!$emailMatch) {
				createEmail($email, $nameMatch);
			}
			if(!$phoneMatch) {
				createPhone($phone, $nameMatch);
			}
			return $nameMatch;
		} 
		//I don't see any logical way this is reached, but it's not hurting anyone
		return 'Fire walk with me';
	}


	// Dump all form submissions into the Form Submissions table for first few weeks to test data integrity
	function dumpFormData($post){
		$dbc = startConn('mm');
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

	/*
		Functions to handle the actual forms when they're submitted.
	*/


	function insertLessonRequest($studentID, $lessonID) {
		$dbc = startConn('mm');
		$student = "'" . $dbc->real_escape_string($studentID) . "'";
		$lesson = "'" . $dbc->real_escape_string($lessonID) . "'";		
		$insertLesson = "INSERT INTO registration (studentID, lessonID) 
					VALUES ($student, $lesson)";
		if($dbc->query($insertLesson) === true) {
		  $returnVal = mysqli_insert_id($dbc);
		} else {
		  $returnVal = $dbc->error;
		}
		closeCon($dbc);
		return $returnVal;
	}

	function contactFormSubmit($post) {
		dumpFormData(json_encode($post));
		$dbc = startConn('mm');
		$contactName = "'" . $dbc->real_escape_string($post['name']) . "'";
		$phone = "'" . $dbc->real_escape_string($post['phone']) . "'";
		$email = "'" . $dbc->real_escape_string($post['email']) . "'";
		$message = "'" . $dbc->real_escape_string($post['message']) . "'";					
		$insertContact = "INSERT INTO contactform (contactName, phone, email, message) 
					VALUES ($contactName, $phone, $email, $message)";		
		if($dbc->query($insertContact) === true) {
		  $returnVal = mysqli_insert_id($dbc);
		} else {
		  $returnVal = $dbc->error;
		}
		closeCon($dbc);
		return $returnVal;
	}

	function requestLesson($post) {
		dumpFormData(json_encode($post));		
		if (isset($post['parentFirstName']) and isset($post['parentLastName'])){
			$parentID = checkUserMatch(
				$post['parentFirstName'], 
				$post['parentLastName'], 
				$post['email'], 
				$post['phone']
			);
			$studentID = getIDFromName($post['sFirstName'], $post['sLastName'], $parentID);
			if(!$studentID){
				$studentID = createNewUser($post['sFirstName'], $post['sLastName'], $parentID);
			} 
		} else {
			$studentID = checkUserMatch(
				$post['sFirstName'], 
				$post['sLastName'], 
				$post['email'], 
				$post['phone']
			);			
		}

		$lessonID = insertLessonRequest($studentID, $post['classes']);
		return $lessonID;
	}


?>