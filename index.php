<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href="css/style.css">
	<?php 
		include ('dbFuncs.php');
		include ('includes/formProcessing.php');
	?>
	<title>Melody Mojo</title>
</head>
<body>
	<?php 
		include 'includes/lessonForm.php';
		include 'includes/sMusicForm.php';
		include 'includes/contactForm.php';
	?>
	<div class="container-fluid">
		<div id="aboveFold">
			<div id="bannerOverlay"></div>
			<div id="graphicOverlay">
				<div id="bannerPhotoBox" style="">
					<img width="310px" height="360px" src="img/mm2.png">
				</div>
				<div class="row" id="findALesson">
					<button id="openModal" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#lessonModal">
						<i class="fa fa-music" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Find a Class
					</button>
				</div>

				
					<?php
						include('includes/header.php')
					?>					
				
			</div>
			<img height="100vh" width="100vw" id="bannerPhoto" src="pianoKeys2.jpg">
		</div>
		<div class="row lessonSection" id="earlyChildhood">
			<div class="col-lg-3 col-md-6"></div>			
			<div class="col-lg-9 col-md-6 sectionDescription">
				<h2>
					Music Rhapsody Early Childhood Music
				</h2>
			</div>
			<div class="col-lg-3 col-md-6 centerContents">
				<img width="400px" height="265px" class="" src="img/childrenMusic.jpeg">
			</div>					
			<div class="col-lg-9 col-md-6 sectionDescription">
				<p>
					We believe that every child is born with an innate and profound musicality. At the most basic and obvious level this musicality is demonstrated every day in such things as our ability to walk and talk. Our musicality is a gift, and with proper nurturing it grows with your child.
				</p>
				<p>
					The Music Rhapsody program, developed by internationally renowned music educator Lynn Kleiner, addresses each age and stage of childhood development. It meets your child exactly where he or she is. Beautiful, diverse songs, singable phrases, repetition with variety, the use of instruments, puppets and visuals all foster the love of music in an exciting and creative environment. It is a program that, to its core, acknowledges and values the input and creativity of each and every child.
				</p>
				<h3><a href="musicRhapsody/"  style="text-decoration: underline;">Learn More</a></h3>
			</div>					
		</div>		

		<div class="row lessonSection" id="simplyMusicPiano">
			<div class="col-lg-3 col-md-6"></div>			
			<div class="col-lg-9 col-md-6 sectionDescription">
				<h2>Simply Music Piano</h2>
			</div>
			<div class="col-lg-3 col-md-6 centerContents">
				<img width="400px" height="265px" src="img/pianoFingers.jpeg">
			</div>
			<div class="col-lg-9 col-md-6 sectionDescription">	
				<p>
				Part of the beauty of Simply Music Piano is how quickly and easily it makes a huge quantity of quality music immediately accessible to students, ages 6 to 90, through its break-through Australian developed play-based method.  Theory is learned quickly as it is used to expand the student’s repertoire, including original compositions.  Group classes are the most efficient and fun method.  All lessons are taught in a highly self-affirming, success-oriented environment.  I love helping students start playing fun music at their first lessons while building a toolkit to help them self-generate learning new pieces and improvising their own.  The combination of teacher-time, fully supportive at-home materials and an innovative method results in students who love making music.  	
				</p>
				<p>	
				Students needs an acoustic piano or a weighted 88 keys, keyboard with a pedal at home in order to practice (for example, Casio Privia series).  
				</p>
				<p>
				Lessons are currently offered at Jennings Music and Education Center, The Homeschool Consortium and at my home studio in Woodstock.  
				</p>
				<h3>
					<a href="#" data-toggle="modal" data-target="#simplyMusicModal" style="text-decoration: underline;">Schedule a Lesson</a>
				</h3>
			</div>
		</div>		
		<div class="row"  id="testimonialP">			
			<div class="col-sm-12 sectionDescription centerContents">
				<h2>Testimonials</h2>
			</div>		
			<div class="col-sm-2"></div>
			<div class="col-sm-6">
				<p>
					"The Simply Music method has been very accessible for my son with autism. It has been a fabulous way for him to continue to learn and grow as an individual. The best part of the program has been his instructor, Ms. Corinne. Her patience and intuitive teaching style has been a perfect fit for my special needs son. Highly recommend to any parent who has been wanting to try for their disabled child to learn an instrument. No pressure; just lots of smiles, confidence, (with all the songs he's playing) and most of all, fun!" - Linda S.			
				</p>
			</div>
			<div class="col-sm-3">
				<img 
					id="testimonialPhoto" 
					src="img/smilingStudent.jpg" 
					height="225px"
					>
			</div>
			<div class="col-sm-1"></div>
		</div>
		<div class="row" style="margin-top: 25em;"></div>
	</div>
	<footer id="pageFooter" style="width: 100%; height: 8em; background-color: rgba(0,0,0,0.8);">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/script.js?v=34"></script>		
	</footer>
</body>



</html>