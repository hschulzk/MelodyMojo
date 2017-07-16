<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href="css/style.css">
	<?php 
		include ('dbFuncs.php');
		
		include ('includes/formProcessing.php');
	?>
	<title>Melody Mojo</title>
</head>
<body>
	<?php 
		include 'includes/bsForm.php';
	?>
	<div class="container-fluid">
		<div id="aboveFold">
			<div id="bannerOverlay"></div>
			<div id="graphicOverlay">
				<div id="bannerPhotoBox" style="">
					<img width="310px" height="360px" src="img/mm2.png">
				</div>
				<div class="row" id="findALesson">

				</div>				
				<?php
					include('includes/header.php')
				?>				
			</div>
			<img height="100vh" width="100vw" id="bannerPhoto" src="pianoKeys2.jpg">
		</div>
		<div class="row lessonSection" id="earlyChildhood">
			<div class="col-lg-4 col-md-6"></div>			
			<div class="col-lg-8 col-md-6 sectionDescription">
				<h2>
					Music Rhapsody Early Childhood Music
				</h2>
			</div>
			<div class="col-lg-4 col-md-6 centerContents">
				<img width="400px" height="265px" class="" src="img/childrenMusic.jpeg">
			</div>					
			<div class="col-lg-8 col-md-6 sectionDescription">
				<p>
					Early childhood music and movement programs seem like fun and games and they are, but they are also an excellent way to help children develop rhythm, balance and other skills so important to developing language, math skills, balance, coordinate, social skills, critical thinking, organization skills, creativity and confidence.  All those benefits wrapped up in an hour of song, dance, laughing, running, playing, puppets, super-cool instruments and snuggling and bonding with mom, dad or a caregiver.  It’s too much fun! 
				</p>
				<p>
					Every child is born innately, profoundly musical.  Our musicality is a gift, and with proper nurturing it grows with your child. The Music Rhapsody program, developed by internationally renowned music educator Lynn Kleiner, addresses each age and stage of childhood development. Beautiful, diverse songs, singable phrases, repetition with variety, the use of instruments, puppets and visuals all foster the love of music in an exciting and creative environment. It is a program that, to its core, acknowledges and values the input and creativity of each and every child.
				</p>
				<p>
					Classes held at <strong>Steps Dance Center</strong>, 1025 Rose Creek Drive, Suite 460, Woodstock, GA, 30189	
				</p>
				<h3><a href="musicRhapsody/"  style="text-decoration: underline;">Learn More</a></h3>
			</div>					
		</div>		

		<div class="row lessonSection" id="simplyMusicPiano">
			<div class="col-lg-4 col-md-6"></div>			
			<div class="col-lg-8 col-md-6 sectionDescription">
				<h2>Simply Music Piano</h2>
			</div>
			<div class="col-lg-4 col-md-6 centerContents">
				<img width="400px" height="265px" src="img/pianoFingers.jpeg">
			</div>
			<div class="col-lg-8 col-md-6 sectionDescription">	
				<p>
				Part of the beauty of Simply Music Piano is how quickly and easily it makes a huge quantity of quality music immediately accessible to students, ages 6 to 90, through its break-through Australian developed play-based method.  Theory is learned quickly as it is used to expand the student’s repertoire, including original compositions.  Group classes are the most efficient and fun method.  All lessons are taught in a highly self-affirming, success-oriented environment.  I love helping students start playing fun music at their first lessons while building a toolkit to help them self-generate learning new pieces and improvising their own.  The combination of teacher-time, fully supportive at-home materials and an innovative method results in students who love making music.  	
				</p>
				<p>	
				Students needs an acoustic piano or a weighted 88 keys, keyboard with a pedal at home in order to practice (for example, Casio Privia series).  
				</p>
				<p>
				Lessons are currently offered at:<br> 
				<ul>
					<li><strong>Jennings Music and Education Center</strong>, 3595 Canton Rd., #308, Marietta, GA 30066 (next to Kroger)</li>
					<li>	
						<strong>The Homeschool Consortium</strong>, 210 Wooten Lake Rd NW, Kennesaw, Cobb County 30144 and at my home studio in Woodstock. 
					</li>
				</ul>
				</p>
				<h3>
					<a href="includes/modals/sMusicForm.php" data-toggle="modal" data-target="#bsModal" style="text-decoration: underline;">Schedule a Lesson</a>
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
	<?php
		include 'includes/footer.php';
	?>
</body>



</html>