<?php 
	if (isset($_GET['success'])){
		$success = "<h2 class='txts'>Your form was sent</h2>";
	}

	include 'assets/header.php'; 
	$activeTab = "contact";
	include 'assets/navbar.php'; 

	header( 'Cache-Control: no-store, no-cache, must-revalidate' ); 
	header( 'Cache-Control: post-check=0, pre-check=0', false ); 
	header( 'Pragma: no-cache' ); 
?>

<!--Page main wrapper-->
<div id="main-content" class="abs dark-template">
	<div class="page-wrapper">
		<div class="vertical-carousel team-members">
			
			<!-- Contents Side-->
			<div class="left-side" >
				<!-- Contents Carousel Wrapper -->
				<div class="left-side-wrapper">
					
					<!-- Content Item -->
					<div class="item vcenter-wrapper">
						<div class="item-wrapper vcenter">

							<!-- Team Item Title-->
							<h3 class="team-title" style="margin-top:50px;"><span>Contact Me</span></h3>
							<!-- /Team Item Title-->

							<!-- Team Item Informartion-->
							<div class="info">
								<!-- Team Item Description-->
								<?php
									// define variables and set to empty values
									$first_name = $email_from = $comments = $captcha = "";


									if ($_SERVER["REQUEST_METHOD"] == "POST") {
										$first_name = $_POST['first_name']; // required
										$email_from = $_POST['email']; // required
										$comments = $_POST['comments']; // required
										$captcha = $_POST["captcha"];
										$maincaptcha = $_POST["maincaptcha"];
										$success = "You have already send a contact form in the last " . $email_timer . " seconds. Please wait or try again later.";

									} else {
										$success = "Please feel free to fill out the form below and I will get back to you usually within 24 hours.";
									}

									function test_input($data) {
										$data = trim($data);
										$data = stripslashes($data);
										$data = htmlspecialchars($data);
										return $data;
									}


									if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $email_timer)) {
										// last request was more than 30 minutes ago
										session_unset();     // unset $_SESSION variable for the run-time 
										session_destroy();   // destroy session data in storage
										$breaktime = 1;
										$success = "Your form was sent successfully, expect an email back within 24 hours.";

									} else {
										$breaktime = 0;
									}
									//time() . " - " . $_SESSION['LAST_ACTIVITY'];
									//date("H:i:s",time()) . " - " . date("H:i:s",$_SESSION['LAST_ACTIVITY']);
									$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


								?>
								<div class='description'>
									<p><?php echo $success; ?></p>
								</div>
								<div>

									<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
										<label class="widthform form" for="first_name">
											<input id="name" type="text" name="first_name" placeholder="Your Full Name">
										</label>
										
										<label class="widthform form" for="email">
											<input id="email" type="email" name="email" placeholder="Your Email Address">
										</label>
										
										<label class="widthform form" style="margin-bottom: -10px;" for="comments">
											<textarea id="message" name="comments" placeholder="Your Message"></textarea>
										</label> 
										
										<div class="col-md-2">
											<img src="<?php echo $_SESSION['captcha']['image_src'];?>" alt="captcha" style="min-width: 102px;margin-top: 13px !important;max-width: 83px;">
										</div>

										<label class="col-md-10 form" for="captcha">
											<input id="captcha" type="text" name="captcha" placeholder="Captcha">
										</label> 

										<label class="widthform form" style="opacity:0;position: absolute;top: 0;max-height: 0px;max-width: 0px;" for="maincaptcha">
											<input id="maincaptcha" type="text" style="opacity:0;" name="maincaptcha" value="<?php echo $_SESSION['captcha']['code'] ?>">
										</label>  
										<label>
											<span>&nbsp;</span> 
											<input type="submit" value="Submit" class="button"> 
										</label>  
									</form>

									<?php

									if (($maincaptcha == $captcha) && ($breaktime == 1)){
										if(isset($_POST['email'])) {
											 // EDIT THE 2 LINES BELOW AS REQUIRED
										 
											 $email_to = $email_to;
											 $email_subject = "Email form filled out from " . $email_from;
										 
											 function died($error) {
													// your error code can go here
													echo "We are very sorry, but there were error(s) found with the form you submitted. ";
													echo "These errors appear below.<br /><br />";
													echo $error."<br /><br />";
													echo "Please go back and fix these errors.<br /><br />";
													die();
											 }
										 
											 // validation expected data exists
											 if(!isset($_POST['first_name']) ||
													!isset($_POST['email']) ||
													!isset($_POST['comments'])) {
													died('We are sorry, but there appears to be a problem with the form you submitted.');       
											 }
										 
											 $first_name = $_POST['first_name']; // required
											 $email_from = $_POST['email']; // required
											 $comments = $_POST['comments']; // required
										 
											 $error_message = "";
										 
											 $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
										 
											if(!preg_match($email_exp,$email_from)) {
										 
											 $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
										 
											}
										 
											$string_exp = "/^[A-Za-z .'-]+$/";
										 
											if(!preg_match($string_exp,$first_name)) {
										 
											 $error_message .= 'The First Name you entered does not appear to be valid.<br />';
											}
											if(strlen($comments) < 2) {
											 $error_message .= 'The Comments you entered do not appear to be valid.<br />';
											}
										 
											if(strlen($error_message) > 0) {
											 died($error_message);
											}
										 
											$email_message = "Hey there Joe, the contact form on your website has been filled out and sent to your inbox. The message is as follows:\n\n";
										 
												
										 
											function clean_string($string) {
											$bad = array("content-type","bcc:","to:","cc:","href");
											return str_replace($bad,"",$string);
											}
										 
												
										 
											 $email_message .= "Name: ".clean_string($first_name)."\n";
											 $email_message .= "Email: ".clean_string($email_from)."\n";
											 $email_message .= "Message: ".clean_string($comments)."\n\n";
											 $email_message .= "Regards, Luke.";
											 
										 
										// create email headers
										 
										$headers = 'From: '.$email_from."\r\n".
										'Reply-To: '.$email_from."\r\n" .
										'X-Mailer: PHP/' . phpversion();
										@mail($email_to, $email_subject, $email_message, $headers);  
									}
								}
								?>
								</div>
								<!-- /Team Item Description-->
							</div>
							<!-- /Team Item Informartion-->

						</div>
					</div>
					<!-- /Content Item -->

				</div>
				<!-- /Contents Carousel Wrapper -->


			</div>
			<!-- /Contents Side-->




		</div>
	</div>
</div>
<!--/Page main wrapper-->

<!-- jquery core -->
<script type="text/javascript" src="assets/js/vendors/jquery-1.11.0.min.js"></script>

<!-- imagesLoaded jquery plugin -->
<script type="text/javascript" src="assets/js/vendors/imagesloaded.pkgd.min.js"></script>

<!-- jquery isotop plugin -->
<script type="text/javascript" src="assets/js/vendors/isotope.pkgd.min.js"></script>

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


<!-- touch swip for double carousel -->
<script type="text/javascript" src="assets/js/vendors/jquery.touchSwipe.min.js"></script>



<!-- Master Slider -->
<script src="assets/masterslider/jquery.easing.min.js"></script>
<script src="assets/masterslider/masterslider.min.js"></script>

<!-- theme custom scripts -->
<script type="text/javascript" src="assets/js/custom.js"></script>


</body>
</html>