<footer id="pageFooter" style="width: 100%; height: 8em; background-color: rgba(0,0,0,0.8);">
	<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			crossorigin="anonymous">
		</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript">
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

			$("#bsModal").on("shown.bs.modal", function(e) {
			    var link = $(e.relatedTarget).attr("href");
			    $(this).find(".modal-content").load(link);
			});

			$("#bsModal").on("hide.bs.modal", function(e) {
				$(this).find(".modal-content").empty();
			});
			$('#formSuccessClose').click(function() {
				$('#submitSuccess').remove();
			})

		});				
	</script>		
</footer>