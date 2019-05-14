<footer>
		<div class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="footer-left">
					<h1><?php echo $contact ?></h1>
					<div class="row">
						<div class="col-3 col-md-3">
							<p><?php echo $phone ?></p>
						</div>
						<div class="col-6 col-md-6">
							<p>031-5922205 (115)</p>
						</div>
						<div class="col-3 col-md-3">
						</div>
						<div class="col-3 col-md-3">
							
						</div>
						<div class="col-6 col-md-6">
							<p> 031-5922312</p>
						</div>
						<div class="col-3 col-md-3">
						</div>
						<div class="col-3 col-md-3">
							<p>Email</p>
						</div>
						<div class="col-6 col-md-6">
							<p>smpia13surabaya@gmail.com</p>
						</div>
					</div>
					<div class="break"></div>
					<div class="line"></div>
					<div class="break"></div>
					&copy; Copyright 2019 Al Azhar Surabaya <br> Developed by Foxis ITW
					<div class="socmed">
						<h2>Social Media</h2>
						<div class="row">
							<div class="col-6 col-md-3">
								<center><a href="https://www.instagram.com/smpia13/" target="_blank"><img src="<?php echo base_url('assets/front/img/ig.png') ?>"></a></center>
							</div>
							<div class="col-6 col-md-3">
								<center><a href="https://mapel.id/" target="_blank"><img src="<?php echo base_url('assets/front/img/mapel.png') ?>"></a></center>
							</div>
							<div class="col-6 col-md-3">
								<center><a href="https://www.youtube.com/channel/UC6SAtL09TfsBf03ouY5DtkA" target="_blank"><img src="<?php echo base_url('assets/front/img/youtube.png') ?>"></a></center>
							</div>
							<div class="col-6 col-md-3">
								<center><a href="https://www.yukblajar.com/" target="_blank"><img src="<?php echo base_url('assets/front/img/yukblajar.png') ?>"></a></center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer-right">
					<a href="https://goo.gl/maps/JpFZTtrswrE2" target="_blank" ><h2 class="mb" ><?php echo $lokasi ?> <span class="fas fa-caret-right"></span></h2></a>
					<form action="<?php echo base_url('home/senWA') ?>" method="post" class="comment-form">
						<textarea name="konten" placeholder="your comment here" class="form-control"></textarea>
						<br>
						<button type="submit" class="btn button float-right" ><span class="fas fa-caret-right float-left" ></span><span class="fab fa-whatsapp float-right" ></span></button>
					</form>
				</div>
			</div>
			<div class="col-md-2 mb">
				<a href="https://goo.gl/maps/JpFZTtrswrE2" target="_blank" ><div class="map"><center><img src="<?php echo base_url('assets/front/img/lokasi.png') ?>"></center></div></a>
			</div>
		</div>
	</footer>
</body>

<script src="<?php echo base_url('assets/front/js/jquery.min.js') ?>" ></script>
<script src="<?php echo base_url('assets/front/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/front/js/bootstrap.min.js') ?>" ></script>
<script src="<?php echo base_url('assets/front/js/magnific-popup.min.js') ?>"></script>


<script type="text/javascript">
	// Initialize popup as usual
	$('.image-link').magnificPopup({
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('.img');
			}
		}

	});
</script>
<script>
	$(document).ready(function() {
	    $('.frame').hover(function(){
	    $('.capt',this).slideToggle('fast');
	  }, function(){
	    $('.capt',this).slideToggle('fast');
	    });
	    $('html, body').animate({
		        scrollTop: $("#isi").offset().top
		    }, 1000);
	});
</script>
</html>
<script type="text/javascript">
	$('#back').click(function(){
		  window.history.back();
	})
</script>