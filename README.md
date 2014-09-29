# Trackers Earth Redesign Notes

## Example Pages

The following example pages have been built out to show the layout and structure of page elements, and for your reference:

*	**Home:** Home page `home.php'
*	**Content:** Generic content page, like About `content.php`
*	**Mashup:** Mashup page `mashup.php`
*	**Class:** Single class page with add to cart in registration `class.php`
*	**Category:** Category page `category.php`
*	**Index:** General page with all site elements `index.php`

## Header

Either include the appropriate header file from the includes folder, or paste in the code, whichever works best. Each header file includes main navigation and body, header, #masthead, #page

*	**Home:** `require 'includes/header.php';` 
*	**Bay:** `require 'includes/header-bay.php';` 
*	**PDX:** `require 'includes/header-pdx.php';` 

## Slider

We're using FlexSlider @link https://github.com/woothemes/FlexSlider

Use image with minimum dimensions 1280 X 800 as background image
*	Image will be centered and aligned top
	
Slide content goes inside `<div class="content">`. 
*	classes `alignleft`, `alignright`, and `aligncenter` will control placement and alignment
*	Please use the structure and content classes outlined in the examples (`<h3 class="quote">` for a quote and `<h4 class="author">` for the person quoting)
*	For a button just add `class="button"` to your link. If you want an orange button add the `action` class to the link element
*	Other types of content can be place in the `<div class="content">` container. If it's not looking right, contact Heptagon with the specifics and we can work it out.


## Container

A div with `class="container"` sets a max-width and adds margins on the left and right depending on window size. 

Only use container for full-width elements! Note that the `.primary` and `#secondary` columns are within the container.


## Entry Content

Use `class="entry-content"` for the main body text on a page, and for text content in the sidebar/secondary area (including around Callout boxes). This will set all the proper text formats, such as subheadings, blockquotes, paragraph spacing, etc. 


## File Includes

In the example code, many of the site sections are included from other files, for example:

	<?php include 'includes/registration-classpage.php'; //This is the registration accordion for single Class pages ?>

This is primarily to clean up the example site files, and isn't required. You can keep this format, or paste the entire content of the included file into your Dreamweaver template, whichever makes more sense for you.

## Lightboxes

We're using Magnific Popup for the lightboxes: http://dimsemenov.com/plugins/magnific-popup/
*	Everything that goes in a lightbox should be wrapped in a `div` and the div's id needs to be referenced in the `<a>` element as `data-mfp-src="#your-div-id"`
*	Add `class="open-popup-link"` to the `<a>` element as well to activate the popup script
*	Add `class="mfp-hide"` to the popup content div to hide it from the main page

	//Popup Link
	<a href="#" data-mfp-src="#my-popup-div" class="open-popup-link">Contact</a>

	//Popup Content
	<div id="my-popup-div" class="mfp-hide">
	  <form>
	  	...Form Content...  
	  </form>
	</div><!-- #my-popup-div -->

## Image Blocks

**ROWS:** Blocks must be organized into rows. Just add a `<div class="block-row"></div>` around each set of blocks. This will ensure that they clear properly. Also, they won't be styled if not in a block-row div.

**ORIENTATION:** Default orientation is stacked, so you don't need to add stacked class. Adding `class="horizontal"` to the `article` element will override orientation on large monitors only. Phones and tablets will always show stacked orientation (better for consistency as things move around for a smaller screen).

**SIZES:** Blocks come in four sizes: `small`, `medium`, `large` and `full`. Just add the class to your block element and behold the magic.
	
The full-width layout (desktop) is arranged in a 5-column grid. For smaller devices (handheld), the grid is 2-column. Each block size will span a different number of columns, shown below (size class: desktop - handheld).
*	small: 1/5 - 1/2
*	medium: 2/5 - 1/2
*	large: 3/5 - 2/2
*	full: 5/5 - 2/2

Notes:
*	We recommend using only the horizontal orientation for full blocks.
*	There is no 4-column size. This would be weird.

**MARGINS:**
*	Margins are applied automatically to the right of each block.
*	For last block in a row (full size) add class 'last' to aricle element. This will eliminate the right margin.

**EXAMPLE BLOCK CODE:**
This will produce a single-column block 

	<div class="block-row">
		<article class="block small">
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

		... //More blocks

		<article class="block small last"><!--Adding class="last" will clear the right margin so the blocks fit in the row -->
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
	</div><!-- .block-row -->

**CONTENT:**
*	For the title of the block, use `<h3 class="block-title">Title</h3>`
*	For content use `<p>content blah blah...</p>`

**IMAGES:**
*	ALL BLOCK IMAGES SHOULD BE 720px X 480px
*	Be sure to place images in a `figure` tag, see example above.

**ARRANGEMENT:**

View the `index.php` and `mashup.php` files for examples of block arrangement. 

*	Add `class="last"` to the last block in a row to clear the right margin. This will ensure the blocks fit as intended.
*	**Large Blocks in two columns.** If you want to stack horizontal blocks next to a taller block, use `.primary` and `.secondary` to create columns within the `block-row` div.



## Buttons
Create a button by adding `class="button"` to an `<a>` element. Example: `<a class="button" href="#">Button Text</a>`

**Styles:** Buttons default to green at 14px font-size. 
*	For an orange button use `class="action"`. Example `<a class="button action" href="#">Button Text</a>`


## Footer
Includes closing `main`, `body`, `html` tags and `footer` `#colophon`. If this will change a lot from page to page, it might be best to paste it in as an editable element.

	<?php include 'includes/footer.php'; ?>

