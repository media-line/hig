<?php
  
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
  
// No direct access to this file
defined('_JEXEC') or die;

?>  

	<div id="sliderPartners" class="carousel slide" data-ride="carousel">
	
	     <!-- Wrapper for slides -->
	     <div class="carousel-inner">
		 	<?php for ($i=0; $i < $count; $i++) { ?>
			    <?php if (($i%6 == 0)||($i == 0)) { ?>
				<div class="item <?php if ($i == 0) { echo 'active';} ?>">
				<?php } ?>
				    <span class="slider_partners_span"><img class="slider_img" src="<?php echo $slidesView[$i]; ?>" alt=""></span>
				<?php if ((($i%6 == 5)||($i == $count-1))&&($i!=0)) { ?>
				</div>
				<?php } ?>
			<?php } ?>
		 </div>

		 <!-- Controls -->
		 <a class="left carousel-control" href="#sliderPartners" data-slide="prev">
			<span class="gr_btn_slider_partners gr_btn_slider_partners_left"></span>
		 </a>
		 <a class="right carousel-control" href="#sliderPartners" data-slide="next">
			<span class="gr_btn_slider_partners gr_btn_slider_partners_right"></span>
		 </a>		 
		 
	 </div>	
