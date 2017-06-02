<?php

	include 'dbFuncs.php';
	include 'includes/formProcessing.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['generalLesson'])){	
			$lessonRequest = 'requestLesson';
			echo $lessonRequest($_POST);
		}
	}
	// $results = getLessonsOfType(2);
	// foreach ($results as $lesson) {
	// 	print_r($lesson);
	// 	echo '<br>';
	// 	echo $lesson['name'] . "<br>";
	// 	echo $lesson['id'] . "<br>";
	// 	echo $lesson['lessonDate'] . "<br>";
	// 	echo $lesson['maxClass'] . "<br>";
	// 	echo $lesson['cost'] . "<br>";

	// }


?>
