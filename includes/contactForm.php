
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="centerContents">
        	<h3 class="modal-title">Contact Us</h3>
      	</div>
      </div>
      <div class="modal-body">
    		<form name="contactForm" class="modalForm" id="contactForm" action="testDB.php" method="post">
    			<input type="hidden" name="contactFormSubmit" value="1">
    			<label for="name">My Name</label>
    			<input type="text" name="name" value="">		
    			<label for="email">Email</label>
    			<input type="text" name="email" value="">		
    			<label for="phone">Phone</label>
    			<input type="text" name="phone" value="">
          <label for="message">Message</label>
          <textarea name="message" id="notes"></textarea>		
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