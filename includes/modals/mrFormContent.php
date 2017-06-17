	


<!-- 	<?php	
		//$allLessons = getLessonsOfType(1);
	?> -->


<?php
	// include ('../dbFuncs.php');
	//$allLessons = getLessonsOfType(4);
	//Next three lines are for testing
$dateTime = date_create('02-10-2017');
$formatDateTime = date_format($dateTime, "m/d/y");

	$lesson = array(
	    "id" => 4,
	    "name" => 'Music Papsidy',
	    "lessonDate" => $formatDateTime,
	    "lessonLocation" => "The Music Studio on 9th"
	);
?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="centerContents">
	        <h3 class="modal-title">Find a Music Rhapsody Class</h3>
    	</div>
    </div>
<div class="modal-body">

<!--
  <form>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>

-->

	<form name="requestLesson" class="modalForm" id="lessonForm" action="" method="post">
		<input type="hidden" name="generalLesson" value="1">

		<div class="form-group row">
			<div class="col-md-6">
				<label for="sFirstName">Student First Name</label>
				<input type="text" name="sFirstName" value="" required="true">
			</div>
			<div class="col-md-6">					
				<label for="sLastName">Student Last Name</label>
				<input type="text" name="sLastName" value="" required="true">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-md-6">			
				<label for="parentFirstName">Parent First Name</label>
				<input type="text" name="parentFirstName" value="" required="true">
			</div>
			<div class="col-md-6">
				<label for="parentLastName">Parent Last Name</label>
				<input type="text" name="parentLastName" value="" required="true">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-6">		
				<label for="email">Your Email</label>
				<input type="text" name="email" value="" required="true">
			</div>
			<div class="col-md-6">		
				<label for="phone">Your Phone</label>
				<input type="text" name="phone" value="" required="true">
			</div>				
		</div>
		<div class="form-group row">
			<div class="col-sm-12">
				<label for="classes">Pick a Class</label>

				<?php
					/*
					foreach ($allLessons as $lesson) {
					    echo '<option value='.'"'.$lesson['id'].'"'.'>'
					    		.$lesson['name'] . ' '
					    		.date_format(date_create($lesson['lessonDate']),"m/d/y").
					    	'</option>';
					}
					*/
					$countArray = [1,2,3,4,5];
					foreach($countArray as $item) {
						echo 
						'<div class="col-md-4">'
						.'<input type="radio" value='
						.'"'
						.$lesson['id']
						.'"'
						.'>'
						.'<span>'
						.$lesson['name'] . ' '
						.$lesson['lessonLocation'] . ' '
						.date_format(date_create($lesson['lessonDate']),"m/d/y")
						.'</span>'
						.'</div>';
					}								
				?>	

			</div>	
		</div>
		<div class="form-group row">
			<div class="col-sm-12">
				<h3 class="leftContents">
					*One free visit per child
				</h3>
				<h3 class="leftContents">
					*Only child registered for the class may attend
				</h3>				
				<h3 class="leftContents">
					<strong class="borderBottom">
						Registration is complete upon:
					</strong>
				</h3>
				<h3 class="leftContents">
					1. Submission of this form
				</h3>
				<h3 class="leftContents">
					2. Receipt of Confirmation Email (within 24 hours)
				</h3>
			</div>
		</div>
		<div class="centerContents">
			<input type="submit" name="submit" value="Submit">
		</div>
	</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

