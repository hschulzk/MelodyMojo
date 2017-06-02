	$(document).ready(function(){
		console.log('hit js');
		//when a link is clicked, use jquery to go to that href
		$("#graphicOverlay .row ul a.navLinks").click(function(event) {
			event.preventDefault();
			let divTarget = $(this).attr('href');
		    $('html, body').animate({
		        scrollTop: $(divTarget).offset().top
		    }, 700);
		});
		$(window).scroll(function () {
		  	console.log($(window).scrollTop());
			if ($(window).scrollTop() > $('#aboveFold').height()) {
				$('#navRow').addClass("scrollNav");
				if($(window).width() < 768) {
					$('#navRow ul').hide();
				}
			} else {
				$('#navRow').removeClass("scrollNav");
				$('#navRow ul').show();

			}
		});

		$('#hamburgerMenu').click(function(){
			$('.scrollNav#navRow ul').slideToggle();
		});
	});