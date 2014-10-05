    	<a href="#" id="menu-toggle-wrapper">
			<div id="menu-toggle"></div>	
		</a>
		
		<!-- inner bar wrapper -->
    	<a href="#" id="inner-bar">
			
		</a>
		<!-- /inner bar wrapper -->

		<div id="side-bar">
			<div class="inner-wrapper">	
				<div id="side-inner">

					<div id="logo-wrapper">
						<a href="index.html"><img src="http://puu.sh/c0l1u/27f3fb34b6.png" alt="logo"></a>
					</div>

					<div id="side-contents">

						<ul id="navigation">
							<?php

								// Sets the active tab
								//	if ($x == $activeTab ) {
								//		$navbar[$activeTab]["active"] = "current";
								//	}
								//	$navbar[$activeTab]["active"] = "current";

									// Generates the navbar
									foreach($navbar as $x => $x_value) {

										/* 
											if the class array in the main associative array is defined
											then echo it (to display "active" on the page you are on).
										*/
										if (!empty($x_value["active"])) {
											// set $class to echo content
											$class = $x_value["active"];
										} else {
											// else set to echo literally nothing.
											$class = "";
										}



										/* 
											if the url array in the main associative array is defined
											then echo it. This is if you need to use an external link
											that does not match the array key.
										*/
										if (!empty($x_value["url"])) {
											// set $url to echo content
											$url = $x_value["url"];
										} else {
											// else set to echo literally nothing.
											$url = $x;
										}


										// Sets the active tab
										if ($x == $activeTab) {
											$class = "current-menu-item";
										}

										/*
											if there is some submenu content then echo it,
											else treat it as as a normal tab menu
										*/
										if (!empty($x_value["submenu"])) {
											echo "<li class='" . $class . "'>";
												echo "<a>" . $x . " <i class='fa fa-caret-down'></i></a>";
												echo "<ul>";
												// echos the submenu
												foreach($x_value["submenu"] as $y => $y_value) {
														/* 
															if the url array in the main associative array is defined
															then echo it. This is if you need to use an external link
															that does not match the array key.
														*/
														if (!empty($y_value)) {
															// set $suburl to echo content
															$suburl = $y_value;
														} else {
															// else set it to the associative name
															$suburl = $y;
														}
													echo "<li><a href='" . $suburl . "'>" . $y . "</a></li>";
												}
												echo "</ul>";
											echo "</li>";
											
										} else {
											// else treat it as a normal tab
											echo "<li class='" . $class . "'><a href='$url'>";
											echo $x;
											echo "</a></li>";
										}
									}
								?>
						</ul>

					</div>	

					<!-- Sidebar footer -->	
					<div id="side-footer">
						<!-- Social icons -->	
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-behance"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
						</ul>
						<!-- /Social icons -->	
						<div id="copyright">
							@JoeMethven
						</div>
					</div>
					<!-- /Sidebar footer -->	
											
				</div>
			</div>					
		</div>