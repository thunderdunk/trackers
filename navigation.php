<?php 
// Main Navigation - Trackers
?>
<!--MOBILE OFF-CANVAS NAV-->
	<nav id="mobile-navigation" >
		<div class="wrap">
			<ul class="menu main">
				<li><a href="about.html">About</a></li>
				<li><a href="youth.html">Youth</a></li>
				<li><a href="adult.html">Adult</a></li>
				<li><a href="#">Blog</a></li>

				<li class="label">Locations</li>
				
					<li><a href="portland.html">Portland</a></li>
					<li><a href="bayarea.html">Bay Area</a></li>

				<li class="label">Join our Mailing list</li>
				
				<li class="mailchimp">
					<?php include 'includes/email-signup.php'; ?>
				</li>

				<li class="contact"><a class="button open-popup-link" data-mfp-src="#contact-popup" href="contact-form.php">Contact Us &nbsp;<i class="fa fa-envelope-o"></i></a></li>
				
				<li class="social">
					<!--Uses icons from Font Awesome @link http://fortawesome.github.io/Font-Awesome/ -->
					<a class="facebook" href="https://www.facebook.com/trackersearth" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
					<a class="google-plus" href="https://plus.google.com/106518547425312602411/posts" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a>
					<a class="twitter" href="https://twitter.com/trackersearth" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
					<a class="login" href="#"><span class="text">Login</span>&nbsp; <i class="fa fa-sign-in"></i></a>
				</li>

				<li class="login"></li>

			</ul>

		</div><!--.wrap-->
	</nav><!--#main-navigation-->
				
<!--DESKTOP FULL NAV-->
	<nav id="main-navigation" >
		<ul class="menu main">
			<li><a href="about.html">About</a></li>
			<li><a href="youth.html">Youth</a></li>
			<li><a href="adult.html">Adult</a></li>
			<li class="label"><a href="#">Locations</a>
				<ul class="child">
					<li><a href="portland.html">Portland</a></li>
					<li><a href="bayarea.html">Bay Area</a></li>
				</ul>
			</li>
			<li><a href="#">Blog</a></li>
			<li><a href="contact-form.php" data-mfp-src="#contact-popup" class="open-popup-link">Contact</a></li>
		</ul>
			
		<ul class="menu secondary">
			<!--Uses icons from Font Awesome @link http://fortawesome.github.io/Font-Awesome/ -->
			<li><a class="login" href="#"><span class="icon-label">Login</span> &nbsp;<i class="fa fa-sign-in"></i></a></li>
			<li><a class="facebook" href="https://www.facebook.com/trackersearth" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a class="google-plus" href="https://plus.google.com/106518547425312602411/posts" target="_blank" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
			<li><a class="twitter" href="https://twitter.com/trackersearth" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
		</ul>

	</nav><!--#main-navigation-->