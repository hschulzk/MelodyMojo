	


<?php
	include ('../../dbFuncs.php');	
	$allLessons = getLessonsOfType(1);
?> 
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <div class="centerContents">
        <h3 class="modal-title">Find a Music Rhapsody Class</h3>
	</div>
</div>
<div class="modal-body">
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
					foreach ($allLessons as $lesson) {
					   echo '<label>'
					   		.'<span class="classes">'
					   		.$lesson['name']
					   		.' '
					   		.$lesson['lessonDate']
					   		.'</span>'
					   		.'<input type="radio" class="classOptions" name="lessonOption" value='.'"'
					   		.$lesson['id'].'">'
					   		.'</label>';
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

