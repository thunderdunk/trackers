<?php

/* 
 * This is a generic Registration accordion for the Category Pages. Does not include Add to Cart and whole class item is clickable.
 */

?>

<section id="registration">

	<div class="tabs" id="tabs">
		<ul> <!--Tab Titles here. The associated id # is referencing the div below containing that tab's content -->
			<li><a href="#tabs-1">NE</a></li>
			<li><a href="#tabs-2">North</a></li>
			<li><a href="#tabs-3">Hillsboro</a></li>
		</ul>
		<div id="tabs-1" class="tab">

			<figure class="location">
				<!--
					// Image Dimensions: 960 X 240
				-->

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
					<h3><b>Week 2</b> - <i>June 11 - June 10</i></h3>
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
				<!--
					// Image Dimensions: 960 X 240
				-->
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
				<!--
					// Image Dimensions: 960 X 240
				-->
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