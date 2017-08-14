$(document).ready(function () {
	//Manages scrolltop header.
	$(window).scroll(function () {
		if ($(window).scrollTop() > $('#aboveFold').height()) {
			$('#navRow').addClass("scrollNav");
		} else if ($('#aboveFold').height() > 0)  {
			$('#navRow').removeClass("scrollNav");
		}
		console.log('fire');
	});

	$('#hamburgerMenu').click(function(){
		$('.scrollNav#navRow ul').slideToggle();
	});

	$("#bsModal").on("shown.bs.modal", function(e) {
	    var link = $(e.relatedTarget).attr("href");
	    $(this).find(".modal-content").load(link);
	});

	$("#bsModal").on("hide.bs.modal", function(e) {
		$(this).find(".modal-content").empty();
	});

	$('.simplyDetailsToggle').click(function() {
		console.log('clicked');
		$('.toggleShow').slideToggle();
	});
});