<?php
/*
 * Page: All Site Elements
 */

require 'header-pdx.php'; //Includes main navigation and body, header, #masthead, #page FOR PDX PAGES
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
										<a class="button big action" href="#">Really Important Button</a>
									</div><!--.content-->
								</div><!--.container-->
							</div><!--.gradient-->
		  	    		</li>
	
			     	</ul>

				</div><!--.flexslider-->

			</section><!--.slider-->
	
			<!-- Container
				// A div with class="container" sets a max-width and adds margins on the left and right depending on window size. 
				// Only use container for full-width elements! Note that the #primary and #secondary columns are within the container.

			-->
			<div class="container">
				<header class="page-header">
					<h1 class="page-title">Page Title</h1>
				</header><!--.page-header-->
				
				<div id="primary" class="pure-u-1 pure-u-lg-3-5">

				<?php require_once('contact-form.php'); ?>

					<!-- Entry Content
						// Use class="entry-content" for the main body text on a page. This will set all the proper text formats, such as subheadings, blockquotes, paragraph spacing, etc. 

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

						<form action="#" method="post">
						    <div>
						         <label for="name">Text Input:</label>
						         <input type="text" name="name" id="name" value="" tabindex="1" />
						    </div>

						    <div>
						        <p>Radio Button Choice</p>
								<input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1" />
						        <label for="radio-choice">Choice 1</label>
						         
								<input type="radio" name="radio-choice-2" id="radio-choice-2" tabindex="3" value="choice-2" />
								<label for="radio-choice">Choice 2</label>
						    </div>

							<div>
								<label for="select-choice">Select Dropdown Choice:</label>
								<select name="select-choice" id="select-choice">
									<option value="Choice 1">Choice 1</option>
									<option value="Choice 2">Choice 2</option>
									<option value="Choice 3">Choice 3</option>
								</select>
							</div>
							
							<div>
								<label for="textarea">Textarea:</label>
								<textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
							</div>
							
							<div>
							    <p>Checkbox text:</p>
								<input type="checkbox" name="checkbox" id="checkbox" />
								<label for="checkbox-choice">I want to choose this option</label>

						    </div>

							<div>
							    <input type="submit" value="Submit" />
						    </div>
						</form>

						<section class="callout">
							<h2 class="title">Top 6 Reasons to join Trackers summer camps</h2>
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
					</article><!--.entry-content-->
				</div><!--#primary-->

				<div id="secondary" class="">

	<!--REGISTRATION-->
				<h3 class="title">Registration for Category Page</h3>
				<p>Each class is a link to the class page</p>

				<?php include 'registration-catpage.php'; ?>

				<h3 class="title">Registration for Class Page</h3>
				<p>Each class is not a link, and has a button</p>

				<?php include 'registration-classpage.php'; ?>


				</div><!--#secondary-->
				
				

					<!-- Block notes

						// ROWS: Blocks must be organized into rows. Just add a <div class="block-row"></div> around each set of blocks. This will ensure that they clear properly. Also, they won't be styled if not in a block-row div.

						// ORIENTATION: Default orientation is stacked, so you don't need to add stacked class. Adding class="horizontal" to the article element will override orientation on large monitors only. Phones and tablets will always show stacked orientation (better for consistency as things move around for a smaller screen).
						
						// SIZES: Blocks come in four sizes: small, medium, large and full. Just add the class to your block element and behold the magic.
							
							- The full-width layout (desktop) is arranged in a 5-column grid. For smaller devices (handheld), the grid is 2-column. Each block size will span a different number of columns, shown below (size class: desktop - handheld).
								- small: 1/5 - 1/2
								- medium: 2/5 - 1/2
								- large: 3/5 - 2/2
								- full: 5/5 - 2/2

							- We recommend using only the horizontal orientation for full blocks.
							- There is no 4-column size. This would be weird.

						// MARGINS: 
							- Margins are applied automatically to the right of each block.
							- For last block in a row (full size) add class 'last' to aricle element. This will eliminate the right margin.

						// EXAMPLE CODE: 
							- This will produce a single-column block 

							<div class="block-row">
								<article class="block stacked small">
									<figure>
										<a href="#">
											<img src="images/Ranger-480x320.jpg" alt="image alt text" />
										</a>
									</figure>
									<div class="content">
										<h3 class="block-title">Class Title</h3>
										<p>Learn the ancient art of working hot metal on the anvil!</p>

									</div>
								</article>

						// CONTENT: 
							- For the title of the block, use <h3 class="block-title">Title</h3>
							- For content use <p>content blah blah...</p>

						// IMAGES:
							- Be sure to place images in a figure tag, see example above.
					-->

					<!-- Buttons
						// Create a button by adding class="button" to an <a> element. Example: <a class="button" href="#">Button Text</a>
						// Styles: Buttons default to green at 14px font-size. 
						//		- For a larger button (font-size 18px) use class 'big'. Example <a class="button big" href="#">Button Text</a>
								- For a smaller button (font-size 12px) use class 'small'. Example <a class="button small" href="#">Button Text</a>
								- For an orange button use class 'action'. Example <a class="button action" href="#">Button Text</a>

						//
					-->

					
					<!-- Small Image Blocks -->

					<div class="block-row">

						<article class="block stacked small">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>

							</div><!--.content-->
						</article><!--.block-->

						<article class="block small">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
							</div><!--.content-->
						</article><!--.block-->

						<article class="block stacked small">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
								<a class="button small">Button Small</a>
							</div><!--.content-->
						</article><!--.block-->

						<article class="block stacked small">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
								<a class="button action small" href="#">Small action button</a>
							</div><!--.content-->
						</article><!--.block-->

						<article class="block stacked small last">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
							</div><!--.content-->
						</article><!--.block-->

					</div><!--.block-row-->
				
					<!-- Large Blocks -->
					<div class="block-row">
						
						<article class="block stacked medium">
							<figure>
								<a href="#">
									<img src="images/Animals-480x356.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title - 480 x 356 img dimensions</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
								<a class="button">Normal button</a>
							</div><!--.content-->
						</article><!--.block-->

						<article class="block horizontal large last">
							<figure>
								<a href="#">
									<img src="images/Animals-480x356.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title - 480 x 356 img dimensions</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
								<a class="button big action">Big Action button</a>
							</div><!--.content-->
						</article><!--.block-->

					</div><!--.block-row-->

					<!-- Large Blocks -->
					<div class="block-row">
						
						<article class="block horizontal large">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title - 480 x 320 img dimensions</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>

							</div><!--.content-->
						</article><!--.block-->

						<article class="block stacked small">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title - 480 x 320 img dimensions</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
								<a class="button big">Big Button</a>
							</div><!--.content-->
						</article><!--.block-->
						
						<article class="block stacked small last">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title - 480 x 320 img dimensions</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>
								<a class="button" href="#">Normal button</a>
							</div><!--.content-->
						</article><!--.block-->

					</div><!--.block-row-->

					<div class="block-row">
						
						<article class="block horizontal full">
							<figure>
								<a href="#">
									<img src="images/Ranger-480x320.jpg" alt="image alt text" />
								</a>
							</figure>
							<div class="content">
								<h3 class="block-title">Class Title - 480 x 320 img dimensions</h3>
								<p>Learn the ancient art of working hot metal on the anvil!</p>

							</div><!--.content-->
						</article><!--.block-->

					</div><!--.block-row-->


				
					<h1>Trackers Earth Roolzuh</h1>
					<p>a paragraph of text</p>
					<a class="test-popup-link" href="images/thefridge.jpg">Open popup</a>

					<a href="contact-form.php" data-mfp-src="#test-popup" class="open-popup-link">Show inline popup</a>

			</div><!--.container-->

<?php include 'footer.php'; // Includes closing main, body, html tags and footer #colophon ?>

