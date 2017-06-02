<?php	
	$allLessons = getLessonsOfType();
?>
<div id="lessonModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="centerContents">
	        <h3 class="modal-title">Find a Lesson</h3>
    	</div>
      </div>
      <div class="modal-body">
		<form name="requestLesson" class="modalForm" id="lessonForm" action="testdb.php" method="post">
			<input type="hidden" name="generalLesson" value="1">
			
			<label for="sFirstName">Student First Name</label>
			<input type="text" name="sFirstName" value="" required="true">		
			<label for="sLastName">Student Last Name</label>
			<input type="text" name="sLastName" value="" required="true">

			<label for="">Parent Name for Students Who are Children</label>
			<label for="parentFirstName">Parent First Name</label>
			<input type="text" name="parentFirstName" value="">			
			<label for="parentLastName">Parent Last Name</label>
			<input type="text" name="parentLastName" value="">

			<label for="email">Your Email</label>
			<input type="text" name="email" value="" required="true">		
			
			<label for="phone">Your Phone</label>
			<input type="text" name="phone" value="" required="true">		
			
			<label for="classes">Pick a Class</label>
			<select name="classes" required="true">
			<?php
				foreach ($allLessons as $lesson) {
				    echo '<option value='.'"'.$lesson['id'].'"'.'>'
				    		.$lesson['name'] . ' '
				    		.date_format(date_create($lesson['lessonDate']),"m/d/y").
				    	'</option>';
				}
			?>	
			</select>
			
			<div class="centerContents">
				<input type="submit" name="submit" value="Submit">
			</div>
		</form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>	