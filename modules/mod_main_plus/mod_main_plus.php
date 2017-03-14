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

<div class="clearfix">
    <div class="mod_plus_block mod_plus_block1 clearfix">
	    <div class="mod_plus mod_plus1">
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img1'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name1'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text1'); ?></span>
					</div>
					<div class="back">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img-other1'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name1'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text1'); ?></span>
					</div>
				</div>
			</div>
		</div>	    
		<div class="mod_plus mod_plus2">
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img2'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name2'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text2'); ?></span>
					</div>
					<div class="back">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img-other2'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name2'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text2'); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="mod_plus mod_plus3">
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<div class="mod_plus3_block mod_plus3_block1"><img src="<?php echo $params->get('img3'); ?>" alt=""></div>
						<div class="mod_plus3_block mod_plus3_block2">
							<span class="mod_plus_name"><?php echo $params->get('name3'); ?></span><br>
							<span class="mod_plus_text"><?php echo $params->get('text3'); ?></span>
						</div>
					</div>
					<div class="back">
						<div class="mod_plus3_block mod_plus3_block1"><img src="<?php echo $params->get('img-other3'); ?>" alt=""></div>
						<div class="mod_plus3_block mod_plus3_block2">
							<span class="mod_plus_name"><?php echo $params->get('name3'); ?></span><br>
							<span class="mod_plus_text"><?php echo $params->get('text3'); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="mod_plus_block mod_plus_block2 clearfix">	
		<div class="mod_plus mod_plus4">
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front clearfix">
						<div class="mod_plus4_block mod_plus4_block1"><img src="<?php echo $params->get('img4'); ?>" alt=""></div>
						<div class="mod_plus4_block mod_plus4_block2">
							<span class="mod_plus_name"><?php echo $params->get('name4'); ?></span><br>
							<span class="mod_plus_text"><?php echo $params->get('text4'); ?></span>
						</div>
					</div>
					<div class="back">
						<div class="mod_plus4_block mod_plus4_block1"><img src="<?php echo $params->get('img-other4'); ?>" alt=""></div>
						<div class="mod_plus4_block mod_plus4_block2">
							<span class="mod_plus_name"><?php echo $params->get('name4'); ?></span><br>
							<span class="mod_plus_text"><?php echo $params->get('text4'); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mod_plus mod_plus5">		
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img5'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name5'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text5'); ?></span>
					</div>
					<div class="back">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img-other5'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name5'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text5'); ?></span>
					</div>
				</div>
			</div>
		</div>
		<div class="mod_plus mod_plus6">	
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img6'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name6'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text6'); ?></span>
					</div>
					<div class="back">
						<div class="mod_plus_img"><img src="<?php echo $params->get('img-other6'); ?>" alt=""></div>
						<span class="mod_plus_name"><?php echo $params->get('name6'); ?></span><br>
						<span class="mod_plus_text"><?php echo $params->get('text6'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>