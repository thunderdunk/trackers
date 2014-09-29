# Trackers Earth Redesign Notes


## Slider

We're using FlexSlider @link https://github.com/woothemes/FlexSlider

Use image with minimum dimensions 1280 X 800 as background image
	- Image will be centered and aligned top
	
Slide content goes inside div class="content". 
	- classes 'alignleft', 'alignright', and 'aligncenter' will control placement and alignment
	- Please use the structure and content classes outlined in the examples (h3 class='quote' for a quote and h4 class='author' for the person quoting)
	- For a button just add class='button' to your link. If you want an orange button add the 'action' class to the link element
	- Other types of content can be place in the 'content' container. If it's not looking right, contact Heptagon with the specifics and we can work it out.


## Container

A div with class="container" sets a max-width and adds margins on the left and right depending on window size. 

Only use container for full-width elements! Note that the .primary and #secondary columns are within the container.

-->