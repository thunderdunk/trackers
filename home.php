<?php
/*
 * Page: All Site Elements
 */

require 'header.php'; //Includes main navigation and body, header, #masthead, #page FOR PDX PAGES
?>
			<section id="hero-home" class="hero">

				<div class="pdx location" style="background-image: url('images/kitchen_adventurer_donut.jpg');"> <!--must use background-image, not just background-->
					<div class="gradient">
						<div class="content">
							<h2>Portland</h2>
							<p>A short blurb about Portland and why it is cool.</p>
							<a class="button x-large">Trackers PDX</a>
						</div><!--.content-->
					</div><!--.gradient-->
				</div><!--.pdx-->

				<div class="bay location" style="background-image: url('images/kitchen_adventurer_caramel.jpg');" >
					<div class="gradient">
						<div class="content">
							<h2>Bay Area</h2>
							<p>Something quick about how the Bay Area is nice too.</p>
							<a class="button x-large action">Trackers Bay</a>
						</div><!--.content-->
					</div><!--.gradient-->
				</div><!--.bay-->

			</section><!--.hero-->

			<!-- Container
				// A div with class="container" sets a max-width and adds margins on the left and right depending on window size. 
				// Only use container for full-width elements! Note that the #primary and #secondary columns are within the container.

			-->
			<div class="container">
				<header class="page-header">
					<h1 class="page-title">About Trackers Earth</h1>
				</header><!--.page-header-->
				
				<div id="primary">

				<?php //require_once('contact-form.php'); ?>

					<!-- Entry Content
						// Use class="entry-content" for the main body text on a page. This will set all the proper text formats, such as subheadings, blockquotes, paragraph spacing, etc. 

					-->
					<article class="entry-content">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis erat odio, ornare eu velit a, facilisis luctus lorem. Pellentesque imperdiet dui id purus lobortis, <a href="#">link inside the main content area</a> a semper magna auctor. Curabitur tristique dictum metus eget tempor. Cras id ex aliquam arcu maximus interdum vitae vel purus. Ut varius, quam id lacinia accumsan, ante ligula posuere libero, at ullamcorper lorem orci id dolor. Nam ac mauris augue. Donec id mattis quam. Sed hendrerit mauris in leo lacinia rhoncus maximus nec nisi. Fusce ac nisi lectus.</p>
	       
						<h2>A Subheading 2</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis erat odio, ornare eu velit a, facilisis luctus lorem. Pellentesque imperdiet dui id purus lobortis, <a href="#">link inside the main content area</a> a semper magna auctor. Curabitur tristique dictum metus eget tempor. Cras id ex aliquam arcu maximus interdum vitae vel purus. Ut varius, quam id lacinia accumsan, ante ligula posuere libero, at ullamcorper lorem orci id dolor. Nam ac mauris augue. Donec id mattis quam. Sed hendrerit mauris in leo lacinia rhoncus maximus nec nisi. Fusce ac nisi lectus.</p>

					</article><!--.entry-content-->
				</div><!--#primary-->

				<div id="secondary">
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
								<a class="button small">Button Small</a>
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
								<a class="button action small" href="#">Small action button</a>
							</div><!--.content-->
						</article><!--.block-->

					</div><!--.block-row-->

					<!-- Large Blocks -->
					<div class="block-row">
						
						<article class="block stacked large last">
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

	

					</div><!--.block-row-->
	<!--REGISTRATION-->
					
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
					
					
					<!-- Small Image Blocks -->

					
				
					

			</div><!--.container-->

<?php include 'footer.php'; // Includes closing main, body, html tags and footer #colophon ?>

