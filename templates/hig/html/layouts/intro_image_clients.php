<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$params  = $displayData->params;
?>
<?php $images = json_decode($displayData->images); ?>
<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	<div class="item-image"> 
	    <div class="item-image-row">
		    <div class="item-image-cell">
				<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
				<img
				<?php if ($images->image_intro_caption):
					echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
				endif; ?>
				src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
				<?php else : ?><img
				<?php if ($images->image_intro_caption):
					echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
				endif; ?>
				src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
				<?php endif; ?> 
			</div>
	</div>
</div>
<?php endif; ?>
