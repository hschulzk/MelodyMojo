<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['lessonRequest'])){
			$testVal = requestLesson($_POST);
		} elseif (isset($_POST['contactFormSubmit'])) {
			$testVal = contactFormSubmit($_POST);
		}
	}
?>