<?php 
	include 'assets/header.php'; 
	$activeTab = "about";
	include 'assets/navbar.php'; 
?>
		
<!-- Page main wrapper -->
<div id="main-content" class="abs dark-template">
	<div class="page-wrapper">
		
		<!-- Sidebar -->
		<div class="page-side ajax-element">
			<div class="inner-wrapper vcenter-wrapper">
				<div class="side-content vcenter">
					<h1 class="title">
						<span>Mr. Methven</span>
					</h1>
					<p>Hi there, I'm Joe. I am a full time drug dealer who has a passion for graphical design ranging from web designs to corporate graphic productions.
					 I also share a growing interest in photography as I expand my knowledge to other shores of cocaine.</p>

					<div class="contact-detail">
						<h5 class="bordered-fine">Location</h5>
						Essex, United Kingdom
					</div>
						
					<div class="contact-detail">
						<h5 class="bordered-fine">Contact</h5>
						<ul class="list-iconed">
							<li>
								<i class="fa fa-envelope"></i><?php echo $email_to; ?>
							</li>
							<li>
								<i class="fa fa-skype"></i> <a href="skype:<?php echo $skype; ?>"><?php echo $skype; ?></a>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Sidebar -->

		<!-- Main Content -->
		<div class="page-main">
			<div id="gmap" class="gmap-full"></div>
		</div>
		<!-- /Main Content -->

	</div>
</div>
<!-- /Page main wrapper -->


<!-- jquery core -->
<script type="text/javascript" src="assets/js/vendors/jquery-1.11.0.min.js"></script>

<!-- imagesLoaded jquery plugin -->
<script type="text/javascript" src="assets/js/vendors/imagesloaded.pkgd.min.js"></script>

<!-- jquery isotop plugin -->
<script type="text/javascript" src="assets/js/vendors/isotope.pkgd.min.js"></script>

<!-- jquery history neede for ajax pages -->
<script type="text/javascript" src="assets/js/vendors/jquery.history.js"></script>

<!-- owwwlab jquery kenburn slider plugin -->
<script type="text/javascript" src="assets/js/jquery.owwwlab-kenburns.js"></script>

<!-- owwwlab jquery double carousel plugin -->
<script type="text/javascript" src="assets/js/jquery.owwwlab-DoubleCarousel.js"></script>

<!-- owwwwlab jquery video background plugin -->
<script type="text/javascript" src="assets/js/jquery.owwwlab-video.js"></script>

<!-- tweenmax animation framework -->
<script type="text/javascript" src="assets/js/vendors/TweenMax.min.js"></script>

<!-- jquery nice scroll plugin needed for vertical portfolio page -->
<script type="text/javascript" src="assets/js/vendors/jquery.nicescroll.min.js"></script>

<!-- jquery magnific popup needed for ligh-boxes -->
<script type="text/javascript" src="assets/js/vendors/jquery.magnific-popup.js"></script>

<!-- html5 media player -->
<script type="text/javascript" src="assets/js/vendors/mediaelement-and-player.min.js"></script>

<!-- jquery inview plugin -->
<script type="text/javascript" src="assets/js/vendors/jquery.inview.min.js"></script>

<!-- smooth scroll -->
<script type="text/javascript" src="assets/js/vendors/smoothscroll.js"></script>

<!-- google map -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="assets/js/vendors/gmap3.min.js"></script>

<!-- Master Slider -->
<script src="assets/masterslider/jquery.easing.min.js"></script>
<script src="assets/masterslider/masterslider.min.js"></script>

<!-- theme custom scripts -->
<script type="text/javascript" src="assets/js/custom.js"></script>



</body>

</html>