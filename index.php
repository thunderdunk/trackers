<?php
/*
 * Page: All Site Elements
 */

require 'header.php'; //Includes main navigation and body, header, #masthead, #page 
?>

			<!--Uses FlexSlider @link https://github.com/woothemes/FlexSlider
				// Use image with minimum dimensions _____ X _____ as background image -->
			<section id="hero-slider" class="slider">
				<div class="flexslider">

					<ul class="slides">

			            <li class="slide" style="background-image: url('images/kitchen_adventurer_cheesecake_brownie.jpg');">
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

		  	    		<li class="slide" style="background-image: url('images/kitchen_adventurer_lemon.jpg');">
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
				
				<div id="primary">

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
						        <h4>Radio Button Choice</h4>
								<input type="radio" name="radio-choice-1" id="radio-choice-1" tabindex="2" value="choice-1" />
						        <label for="radio-choice-1">Choice 1</label>
						         
								<input type="radio" name="radio-choice-2" id="radio-choice-2" tabindex="3" value="choice-2" />
								<label for="radio-choice-2">Choice 2</label>
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
							    <label for="checkbox">Checkbox:</label>
								<input type="checkbox" name="checkbox" id="checkbox" />
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

				<div id="secondary">

	<!--REGISTRATION-->
					<section id="registration">

						<div class="tabs" id="tabs">
							<ul>
								<li><a href="#tabs-1">NE</a></li>
								<li><a href="#tabs-2">North</a></li>
								<li><a href="#tabs-3">Hillsboro</a></li>
							</ul>
							<div id="tabs-1" class="tab">

								<figure class="location">
									
										<img src="images/luke-skywalker.jpg" alt="Trackers NE" />
										<div class="gradient"></div><!--.gradient-->
										<figcaption>1234 NE 23rd Avenue, Portland OR</figcaption>

								</figure><!--.location-->

								<div class="accordion">
									<div class="head">
										<h3><b>Week 1</b> - <i>June 3 - June 10</i></h3>
									</div><!--.head-->

									<div class="content">
										<ul class="classlist">
											<li>
												<a href="#"><b>Grades 1-2</b> - <i>Stealth and Archery and Superfun Stuff</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 3-4</b> - <i>Intro to Human Psychology</i></a>
											</li>
											<li class="full">
												<a href="#"><b>Grades 3-4 <span class="full">FULL!</span></b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b>Grade 1 &amp; 4-5 OPEN <span class="full">Grade 2-3 FULL</span></b> - <i>Stealth, Archery &amp; Wilderness Survival</i></a>
											</li>
											<li>
												<a href="#"><b class="full">Grades 7-8 FULL</b> - <i>Making clothing out of animal skins</i></a>
											</li>
										</ul><!--.classlist-->
									</div><!--.content-->

									<div class="head">
										<h3><b>Week 1</b> - <i>with Add to Cart button</i></h3>
									</div><!--.head-->

									<div class="content">
										<ul class="classlist">
											<li>
												<a href="#"><b>Grades 1-2</b> - <i>Stealth and Archery and Superfun Stuff</i><button class="cart" href="#"><i class="fa fa-shopping-cart"></i> Add</button></a>
											</li>
											<li>
												<a href="#"><b>Grades 3-4</b> - <i>Intro to Human Psychology</i><button class="cart" href="#"><i class="fa fa-shopping-cart"></i> Add</button></a>
											</li>
											<li class="full">
												<a href="#"><b>Grades 3-4 <span class="full">FULL!</span></b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 5-6</b> - <i>Making clothing out of animal skins</i><button class="cart" href="#"><i class="fa fa-shopping-cart"></i> Add</button></a>
											</li>
											<li>
												<a href="#"><b>Grade 1 &amp; 4-5 OPEN <span class="full">Grade 2-3 FULL</span></b> - <i>Stealth, Archery &amp; Wilderness Survival</i></a><button class="cart" href="#"><i class="fa fa-shopping-cart"></i> Add</button>
											</li>
										</ul><!--.classlist-->
									</div><!--.content-->

									<div class="head">
									  <h3><b>Week 3</b> - <i>June 19 - June 26</i></h3>
									</div><!--.head-->

									<div class="content">
										<ul class="classlist">
											<li>
												<a href="#"><b>Grades 1-2</b> - <i>Stealth and Archery and Superfun Stuff</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 3-4</b> - <i>Intro to Human Psychology</i></a>
											</li>
											<li class="full">
												<a href="#"><b>Grades 3-4 <span class="full">FULL!</span></b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 5-6</b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b class="full">Grades 7-8 FULL</b> - <i>Making clothing out of animal skins</i></a>
											</li>
										</ul><!--.classlist-->
									</div><!--.content-->

								</div><!--.accordion-->
							</div><!--.tab #tabs-1-->

							<div id="tabs-2" class="tab">
								<figure class="location">
									<img src="images/queens-1.jpg" alt="Trackers North" />
									<div class="gradient"></div><!--.gradient-->
										<figcaption>1234 NE 23rd Avenue, Portland OR</figcaption>
								</figure><!--.location-->
								
								<div class="message">
									<p>Here is some content in case there are no classes and you just want to show a message. For instance, the peninsula dropped off into the Columbia so we are trying to find a new location for North PDX classes.</p>
								</div><!--.message-->
							</div><!--#tabs-2-->


							<div id="tabs-3" class="tab">
								<figure class="location">

										<img src="images/space.jpg" alt="Trackers Hillsboro" />
										<div class="gradient"></div><!--.gradient-->
										<figcaption>1234 NE 23rd Avenue, Portland OR</figcaption>

								</figure><!--.location-->
								<div class="accordion">
									<div class="head">
										<h3><b>Week 1</b> - <i>with Add to Cart button</i></h3>
									</div><!--.head-->

									<div class="content">
										<ul class="classlist">
											<li>
												<a href="#"><b>Grades 1-2</b> - <i>Stealth and Archery and Superfun Stuff</i><button class="cart" href="#"><i class="fa fa-shopping-cart"></i> Add</button></a>
											</li>
											<li>
												<a href="#"><b>Grades 3-4</b> - <i>Intro to Human Psychology</i><button class="cart" href="#"><i class="fa fa-shopping-cart"></i> Add</button></a>
											</li>
											<li class="full">
												<a href="#"><b>Grades 3-4 <span class="full">FULL!</span></b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 5-6</b> - <i>Making clothing out of animal skins</i><button class="cart" href="#"><i class="fa fa-shopping-cart"></i> Add</button></a>
											</li>
											<li>
												<a href="#"><b class="full">Grades 7-8 FULL</b> - <i>Making clothing out of animal skins</i></a>
											</li>
										</ul><!--.classlist-->
									</div><!--.content-->

									<div class="head">
									  <h3><b>Week 2</b> - <i>June 11 - June 18</i></h3>
									</div><!--.head-->

									<div class="content">
										<ul class="classlist">
											<li>
												<a href="#"><b>Grades 1-2</b> - <i>Stealth and Archery and Superfun Stuff</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 3-4</b> - <i>Intro to Human Psychology</i></a>
											</li>
											<li class="full">
												<a href="#"><b>Grades 3-4 <span class="full">FULL!</span></b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 5-6</b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b class="full">Grades 7-8 FULL</b> - <i>Making clothing out of animal skins</i></a>
											</li>
										</ul><!--.classlist-->
									</div><!--.content-->

									<div class="head">
									  <h3><b>Week 3</b> - <i>June 19 - June 26</i></h3>
									</div><!--.head-->

									<div class="content">
										<ul class="classlist">
											<li>
												<a href="#"><b>Grades 1-2</b> - <i>Stealth and Archery and Superfun Stuff</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 3-4</b> - <i>Intro to Human Psychology</i></a>
											</li>
											<li class="full">
												<a href="#"><b>Grades 3-4 <span class="full">FULL!</span></b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b>Grades 5-6</b> - <i>Making clothing out of animal skins</i></a>
											</li>
											<li>
												<a href="#"><b class="full">Grades 7-8 FULL</b> - <i>Making clothing out of animal skins</i></a>
											</li>
										</ul><!--.classlist-->
									</div><!--.content-->

								</div><!--.accordion-->
							</div>
							
							

						</div><!--.tabs-->
					</section><!--#registration-->
				</div><!--#secondary-->
				
				

					<!-- Block notes
						// Default orientation is stacked, so you don't need to add stacked class. Adding class="horizontal" to the article element will override orientation on large monitors only. Phones and tablets will always show stacked orientation (better for consistency as things move around for a smaller screen).
						
						// Blocks must be organized into rows. Just add a <div class="block-row"></div> around each set of blocks. This will ensure that they clear properly. Also, they won't be styled if not in a block-row div.

						// For last block in a row (full size) add class 'last' to aricle element. This will eliminate the right margin.

						// Content: 
							- For the title of the block, use <h3 class="block-title">Title</h3>
							- For content use <p>content blah blah...</p>

						// Images:
							- 
					-->

					<!-- Buttons
						// Create a button by adding class="button" to an <a> element. Example: <a class="button" href="#">Button Text</a>
						// Styles: Buttons default to green at 14px font-size. 
						//		- For a larger button (font-size 18px) use class 'big'. Example <a class="button big" href="#">Button Text</a>
								- For a smaller button (font-size 12px) use class 'small'. Example <a class="button small" href="#">Button Text</a>
								- For an orange button use class 'action'. Example <a class="button action" href="#">Button Text</a>

						//
					-->
					<div class="block-row">

						<article class="block one-column">
							<div class="content">
								<p>Column 1</p>
							</div><!--.content-->
						</article>

						<article class="block one-column">
							<div class="content">
								<p>Column 2</p>
							</div><!--.content-->
						</article>

						<article class="block one-column">
							<div class="content">
								<p>Column 3</p>
							</div><!--.content-->
						</article>

						<article class="block one-column">
							<div class="content">
								<p>Column 4</p>
							</div><!--.content-->
						</article>

						<article class="block one-column last">
							<div class="content">
								<p>Column 5</p>
							</div><!--.content-->
						</article>

					</div><!--.block-row-->
					
					<!-- Small Image Blocks -->

					<div class="block-row">

						<article class="block stacked one-column">
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

						<article class="block stacked one-column">
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

						<article class="block stacked one-column">
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

						<article class="block stacked one-column">
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

						<article class="block stacked one-column last">
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
						
						<article class="block stacked two-column">
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

						<article class="block horizontal three-column last">
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
						
						<article class="block horizontal two-column">
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

						<article class="block stacked two-column">
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
						
						<article class="block stacked one-column last">
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


				
					<h1>Trackers Earth Roolzuh</h1>
					<p>a paragraph of text</p>
					<a class="test-popup-link" href="images/thefridge.jpg">Open popup</a>

					<a class="open-popup-link" href="contact-form.php">FORM POPUP MAYBE</a>
					
					<div id="form-popup" class="white-popup mfp-hide">
			
					</div>
			</div><!--.container-->

<?php include 'footer.php'; // Includes closing main, body, html tags and footer #colophon ?>

