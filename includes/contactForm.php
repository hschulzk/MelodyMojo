<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <div class="centerContents">
  	<h3 class="modal-title">Contact Us</h3>
	</div>
</div>
<div class="modal-body">
	<form name="contactForm" class="modalForm" id="contactForm" action="" method="post">
  <div class="form-group row">
		<div class="col-sm-12">
      <input type="hidden" name="contactFormSubmit" value="1">
		  <label for="name">My Name</label>
    </div>
    <div class="col-sm-12">          
	    <input type="text" name="name" value="">		
		  <label for="email">Email</label>
    </div>
    <div class="col-sm-12">          
		 <input type="text" name="email" value="">		
		 <label for="phone">Phone</label>
		</div>
    <div class="col-sm-12">          
      <input type="text" name="phone" value="">
      <label for="message">Message</label>
    </div>
    <div class="col-sm-12">          
      <textarea name="message" id="notes"></textarea>		
    </div>      		
  </div>
  <div class="form-group row">	
    <div class="centerContents">
			<input type="submit" name="submit" value="Submit">
		</div>
  </div>
	</form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>