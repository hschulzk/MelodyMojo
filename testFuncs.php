<?php 
	function hello($name = 'friend') {
		return "Hello, $name!";
	}

	function addUp($a = Null,$b = Null) {
		$arr = array(
			$a, 
			$b, 
			$a + $b
		);	
		return $a + $b;
	}

	function answer() {
		return 42;
	}

	function greet($name = 'friend', $tod = Null) {
		$greeting = "Hello, $name.";
		if($tod) {
			$greeting = $greeting . " Good $tod!";
		}
		echo $greeting;
	}
?>