<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$testVal = dumpFormData($_POST);
	}
?>