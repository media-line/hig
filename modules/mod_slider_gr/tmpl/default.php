<?php
  
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
  
// No direct access to this file
defined('_JEXEC') or die;

$slide_count = 0;
?>  

	<div id="slider_main" class="carousel slide carousel-fade slider_main" data-ride="carousel" data-interval="5000">
	
	     <!-- Wrapper for slides -->
	     <div class="carousel-inner">
		 	<?php foreach ($slidesView as $sl) { ?>
				<div class="item <?php if ($slide_count == 0) { echo 'active';} ?>">
					<?php if ( (!empty($sl[urltext])) || (!empty($sl[up])) || (!empty($sl[down])) ) { ?>
						<div class="container-fluid">
							<div class="carousel-caption">
								<div class="slider_text slider_text_up"><?php echo $sl[up]; ?></div>
								<div class="slider_text slider_text_down"><?php echo $sl[down]; ?></div>
								<div class="slider_block_btn"><a class="slider_btn" class="" href="<?php echo $sl[url]; ?>"><?php echo $sl[urltext]; ?></a></div>
							</div>
						</div>
					<?php } ?>
					<?php if (!empty($sl[url])) { ?>
						<a href="<?php echo $sl[url]; ?>"><img class="slider_img" src="<?php echo $sl[image]; ?>" alt=""></a>
					<?php } else { ?>
						<img class="slider_img" src="<?php echo $sl[image]; ?>" alt="">
					<?php } ?>
				</div>
				<?php $slide_count++; ?>
			<?php } ?>
		 </div>

		 <!-- Controls -->
		 <a class="left carousel-control" href="#slider_main" data-slide="prev">
			<span class="gr_btn_slider gr_btn_slider_left"></span>
		 </a>
		 <a class="right carousel-control" href="#slider_main" data-slide="next">
			<span class="gr_btn_slider gr_btn_slider_right"></span>
		 </a>		 
		 
	 </div>	
