	$(document).ready(function(){
		//when a link is clicked, use jquery to go to that href
		$("#graphicOverlay .row ul a.navLinks").click(function(event) {
			event.preventDefault();
			let divTarget = $(this).attr('href');
		    $('html, body').animate({
		        scrollTop: $(divTarget).offset().top
		    }, 700);
		});
		//Manages scrolltop header.
		$(window).scroll(function () {
			if ($(window).scrollTop() > $('#aboveFold').height()) {
				$('#navRow').addClass("scrollNav");
				if($(window).width() < 768) {
					$('#navRow ul').hide();
				}
			} else if ($('#aboveFold').height() > 0)  {
				$('#navRow').removeClass("scrollNav");
				$('#navRow ul').show();

			}
		});

		$('#hamburgerMenu').click(function(){
			$('.scrollNav#navRow ul').slideToggle();
		});

		$("#mmFormModal").on("show.bs.modal", function(e) {
		    var link = $(e.relatedTarget);
		    console.dir(link);
		    $(this).find(".modal-body").load(link.attr("href"));
		});


	});