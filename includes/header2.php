<div class="row scrollNav" id="navRow">
	<div id="mobileImageWrap">
		<img 
			class="mobileMenuIcons" 
			height="75px" 
			width="120px" 
			src="../img/mm2.png">
	</div>
	<div id="hamburgerWrap">
		<i id="hamburgerMenu" class="fa fa-bars mobileMenuIcons" aria-hidden="true"></i>
	</div>
	<ul id="header2">
		<a 
			class="navLinks" 
			href="../index.php">
			<li>Home</li>
		</a>
		<a 
			class="navLinks" 
			href="../index.php#simplyMusicPiano">
			<li>Simply Music Piano</li>
		</a>
		<a 
			href="../about/">
			<li>About</li>
		</a>						
		<a style="width: 20%;" href="../musicRhapsody/">
			<li>Early Childhood Music</li>
		</a>							
		<a 
			class="navLinks"
			href="../includes/modals/contactForm.php"
			data-toggle="modal" data-target="#bsModal">
			<li>Contact</li>
		</a>				
<!-- 		<a 
			class="navLinks"
			href="#mRhapsody">
			<li>Blog</li>
		</a> -->								
	</ul>
</div>

<?php 
	if (isset($testVal)) {
		echo '<div id="submitSuccess"><h3>Thanks for submitting. We'."'".'ll be in touch shortly.</h3><button id="formSuccessClose">Close</button></div>';
	} 

?>

