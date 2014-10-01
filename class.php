<?php
/*
 * Page: Individual Class
 */

//require 'includes/header.php'; //Use for home page
//require 'includes/header-bay.php'; //Use for Bay pages
require 'includes/header-pdx.php'; //Includes main navigation and body, header, #masthead, #page FOR PDX PAGES
?>

			<!--Uses FlexSlider @link https://github.com/woothemes/FlexSlider
				// Use image with minimum dimensions _____ X _____ as background image -->
			<section id="hero-slider" class="slider hero">
				<div class="flexslider">

					<ul class="slides">

			            <li class="slide" style="background-image: url('images/SliderHut.jpg');">
			            	<div class="gradient">
				            	<div class="container">
					  	    	    <div class="content alignleft">
										<h3 class="quote">&ldquo;A totally new experience...<br />like a junior Outward Bound.&rdquo;</h3>
										<h4 class="author">Lucy Bosworth, 2013 Parent</h4>
										<a class="button" href="#">Button text</a>
									</div><!--.content-->
								</div><!--.container-->
							</div><!--.gradient-->
		  	    		</li>

		  	    		<li class="slide" style="background-image: url('images/SliderCoast.jpg');">
		  	    			<div class="gradient"> <!-- Gradient overlays full-width image. Don't use this if you're adding text to the background image manually -->
				  	    	    <div class="container">
					  	    	    <div class="content alignright">
										<h3 class="quote">&ldquo;A totally new experience... like a junior Outward Bound.&rdquo;</h3>
										<h4 class="author">Lucy Bosworth, 2013 Parent</h4>
										<a class="button action" href="#">Really Important Button</a>
									</div><!--.content-->
								</div><!--.container-->
							</div><!--.gradient-->
		  	    		</li>
	
			     	</ul>

				</div><!--.flexslider-->
				<div class="container">
					<?php include 'includes/email-signup.php'; ?>
				</div><!--.container-->
			</section><!--.slider-->
	
			<!-- Breadcrumb trail - You'll need to enter the values -->
				<div class="bread-wrapper">
					<div class="container">
						<p class="breadcrumb"><a href="#">Portland</a> &raquo; <a href="#">Category</a> &raquo; This Class Page</p>
					</div><!--.container-->
				</div><!--.bread-wrapper-->

			<!-- Container
				// A div with class="container" sets a max-width and adds margins on the left and right depending on window size. 
				// Only use container for full-width elements! Note that the .primary and #secondary columns are within the container.

			-->
			<div class="container">

				<header class="page-header">
					<h1 class="page-title">Class Title</h1>
				</header><!--.page-header-->
				
				<div class="primary">

				<?php //require_once('contact-form.php'); ?>

					<!-- Entry Content
						// Use class="entry-content" for the main body text on a page, and for text content in the sidebar/secondary area (including around Callout boxes). This will set all the proper text formats, such as subheadings, blockquotes, paragraph spacing, etc. 

					-->
					<article class="entry-content">
						<h2>Heading 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis erat odio, ornare eu velit a, facilisis luctus lorem. Pellentesque imperdiet dui id purus lobortis, <a href="#">link inside the main content area</a> a semper magna auctor. Curabitur tristique dictum metus eget tempor. Cras id ex aliquam arcu maximus interdum vitae vel purus. Ut varius, quam id lacinia accumsan, ante ligula posuere libero, at ullamcorper lorem orci id dolor. Nam ac mauris augue. Donec id mattis quam. Sed hendrerit mauris in leo lacinia rhoncus maximus nec nisi. Fusce ac nisi lectus.</p>
	       
						<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

						<h2>Header Level 2</h2>
							       
						<ol>
						   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						   <li>Aliquam tincidunt mauris eu risus.</li>
						</ol>

						<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

						<h3>Header Level 3</h3>

						<ul>
						   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						   <li>Aliquam tincidunt mauris eu risus.</li>
						</ul>

						

						
					</article><!--.entry-content-->
					
					<section class="class-picker">
						<!--REGISTRATION-->
						
							<header class="reg-heading">
							
							<h2 class="content-subheading">Register Now!</h2>
							
							<p class="register-help">Click your week</p>
						</header><!--reg-heading-->
							
							<!-- These are generic files. 

								// For the Dreamweaver template, instead of including the files from a different location, you might want to copy the entire registration-classpage.php file and paste it into your template as an editable area.

							-->
							<?php include 'includes/registration-classpage.php'; ?>

					</section><!--.class-picker-->

				</div><!--.primary-->

				<div class="secondary">
					<div class="entry-content">
						<section class="callout">
							<h2 class="title">Class-specific callout title</h2>
							<div class="content">
								<h3 class="subheading">Safe Camps</h3>
								<p>At Trackers Camps, our priority is caring for your child. Since its beginning Trackers has set the standard for safety in outdoor camps for Oregon and beyond.</p>
								<h3 class="subheading">High-Quality, Well-Trained Staff</h3>
								<p>We cultivate experienced and mature educators coming from the highest level of professional and personal experience. All Trackers [camp staff] are chosen through a thorough background check and an intensive interview process. They are expert instructors who teach authentic skills.</p>
								<h3 class="subheading">Increased Self-Confidence through Skills</h3>
								<p>At Trackers Camps your child trains archery, fishes by scenic rivers, learns outdoor survival, practices safe wood carving skills or develops creativity in our role-playing adventure camps. Choose your camp theme and choose your adventure.</p>
								<h3 class="subheading">Old and New Friends</h3>
								<p>Trackers campers return time and again to camp. We are a community and family organization dedicated to collaborative learning. At Trackers, kids make friends with similar interests. Your child becomes a member of a strong learning team while embarking on fantastic adventures.</p>
								<h3 class="subheading">Incredible Fun</h3>
								<p>rackers Earth is the original. Other camps offer themes similar to our [School of Magic] (grade K-5), [Stealth, Archery & Wilderness Survival] (grade 1-5) or [Archery Academy] (grade 6-10). It is our years of experience that provides the highest caliber instruction and curriculum for both role-playing and traditional skill based summer camps.</p>
								<h3 class="subheading">Best Hours</h3>
								<p>For working parents we offer flexible check-in from 7:30am-8:30am with flexible check-out from 3:30pm-4pm. Regular Camp Session runs from 8:30am-3:30pm. Base tuition makes our camps available 7:30am-4pm (a total of 8.5 hours). Add our affordable [Extended Camp] to go until 6pm.</p>
						</section><!--.callout-->
					</div><!--.entry-content-->
	

				</div><!--#secondary-->
				
				


			</div><!--.container-->

<?php include 'includes/footer.php'; // Includes closing main, body, html tags and footer #colophon ?>

