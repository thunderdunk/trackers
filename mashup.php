<?php
/*
 * Page: Mashup
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
				<div class="container">
					<?php include 'includes/email-signup.php'; ?>
				</div><!--.container-->
			</section><!--.slider-->
	
			<!-- Container
				// A div with class="container" sets a max-width and adds margins on the left and right depending on window size. 
				// Only use container for full-width elements! Note that the .primary and #secondary columns are within the container.

			-->
			<div class="container">

				<header class="page-header">
					<h1 class="page-title">Page Title</h1>
				</header><!--.page-header-->
				
				<div class="primary">

				<?php //require_once('contact-form.php'); ?>

					<!-- Entry Content
						// Use class="entry-content" for the main body text on a page. This will set all the proper text formats, such as subheadings, blockquotes, paragraph spacing, etc. 

					-->
					<article class="entry-content">
						<h2>Heading 2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis erat odio, ornare eu velit a, facilisis luctus lorem. Pellentesque imperdiet dui id purus lobortis, <a href="#">link inside the main content area</a> a semper magna auctor. Curabitur tristique dictum metus eget tempor. Cras id ex aliquam arcu maximus interdum vitae vel purus. Ut varius, quam id lacinia accumsan, ante ligula posuere libero, at ullamcorper lorem orci id dolor. Nam ac mauris augue. Donec id mattis quam. Sed hendrerit mauris in leo lacinia rhoncus maximus nec nisi. Fusce ac nisi lectus.</p>
	       
					</article><!--.entry-content-->
				</div><!--.primary-->

				<div class="secondary">
					<h3 class="sidebar-title">Awards and such</h3>

					<div class="block-row">
						<!--Use class "item" for images you want arranged like blocks but not styled as such -->
						<article class="item small">
							<figure>
								<img src="images/best-camp-general.png" alt="Best Summer Camp" />
							</figure>
						</article>

						<article class="item small last">
							<figure>
								<img src="../images/red-tri.gif" alt="Best Summer Camp" />
							</figure>
						</article>

					</div><!-- .block-row -->
	
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


			</div><!--.container-->

<?php include 'footer.php'; // Includes closing main, body, html tags and footer #colophon ?>

