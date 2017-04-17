<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="clients clearfix newsflash<?php echo $moduleclass_sfx; ?>">
	<div class="module-title">Партнеры</div>

	<?php foreach ($list as $key => $item) : ?>
		<?php $img = json_decode($item->images); ?>

		<?php /*if ($key%6 == 0) { ?>
			<div class="clearfix items-row cols-6 row-0 row-fluid">
		<?php }*/ ?>
		<div class="item-wrapper">
			<div class="span2">
				<div class="item">
					<div class="item-image">
						<div class="item-image-row">
							<div class="item-image-cell">
								<img src="<?php echo JLayoutHelper::render(
									'com_content.article.image',
									array(
										'url'    => $img->image_intro,

										'options' => array(
											'resolution' => '250x350',
											'force_png'  => true
										)
									)
								); ?>" alt="">
							</div>
						</div>
					</div>

					<div class="page-header">
						<h2><?php echo $item->title; ?></h2>
					</div>

					<div class="description">
						<?php echo $item->introtext; ?>
					</div>
				</div>
			</div>
		</div>
		<?php /*if (($key+1)%6 == 0 || $key+1 == count($list)) { ?>
		</div>
		<?php } */?>
	<?php endforeach; ?>
</div>
