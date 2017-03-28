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
    <div class="mod_latest_works_block clearfix">
        <div class="mod_latest_works_block_border clearfix">
            <div class="mod_latest_works_block_inner text">
                <div class="namewor"><?php echo $params->get('name1'); ?></div>
                <div class="text"><?php echo $params->get('text1'); ?></div>
            </div>
            <div class="mod_latest_works_block_inner image"
                 style="background-image: url('<?php echo $params->get('logo1'); ?>'); "></div>
        </div>
        <div class="mod_latest_works_block_border clearfix">
            <div class="mod_latest_works_block_inner text">
                <div class="namewor"><?php echo $params->get('name2'); ?></div>
                <div class="text"><?php echo $params->get('text2'); ?></div>
            </div>
            <div class="mod_latest_works_block_inner image"
                 style="background-image: url('<?php echo $params->get('logo2'); ?>'); "></div>
        </div>
    </div>
    <div class="mod_latest_works_block clearfix">
        <div class="mod_latest_works_block_border clearfix">
            <div class="mod_latest_works_block_inner text">
                <div class="namewor"><?php echo $params->get('name3'); ?></div>
                <div class="text"><?php echo $params->get('text3'); ?></div>
            </div>
            <div class="mod_latest_works_block_inner image"
                 style="background-image: url('<?php echo $params->get('logo3'); ?>'); "></div>
        </div>
        <div class="mod_latest_works_block_border clearfix">
            <div class="mod_latest_works_block_inner text">
                <div class="namewor"><?php echo $params->get('name4'); ?></div>
                <div class="text"><?php echo $params->get('text4'); ?></div>
            </div>
            <div class="mod_latest_works_block_inner image"
                 style="background-image: url('<?php echo $params->get('logo4'); ?>'); "></div>
        </div>
    </div>
    <!--<div class="mod_latest_works_block narrow">
		    <div class="mod_latest_works_block_border clearfix">
				<div class="mod_latest_works_block_inner text">
					<div class="namewor"><?php echo $params->get('name5'); ?></div>
					<div class="mod_latest_works_block_inner image" style="background-image: url('<?php echo $params->get('logo5'); ?>'); "></div>
					<div class="text"><?php echo $params->get('text5'); ?></div>
				</div>
			</div>
		</div>-->
</div>
