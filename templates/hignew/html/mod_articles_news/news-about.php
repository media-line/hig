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
<div class="clearfix wrappernews newsflash<?php echo $moduleclass_sfx; ?>">
	<div class="module-title">Новости</div>

	<div class="row rownews">
		<?php foreach ($list as $key => $item) : ?>
			<?php if ($key == 0) { ?>
				<?php $img = json_decode($item->images); ?>

				<div class="colnews hidden-xs col-sm-12 hidden-md col-lg-6">
					<a href="<?php echo $item->link; ?>" class="fnew">
						<div class="fnew-img">
							<img src="<?php echo JLayoutHelper::render(
							'com_content.article.image',
							array(
								'url'    => $img->image_intro,

								'options' => array(
									'resolution' => '400x300',
									'force_png'  => true
								)
							)
							); ?>" />
						</div>

						<div class="fnew-info">
							<div class="title">
								<?php echo $item->title; ?>
							</div>

							<div class="intro">
								<?php echo strip_tags(mb_strimwidth($item->introtext, 0, 250, "...")) ?>
							</div>

							<div class="date">
								<?php echo file_get_contents(dirname(__FILE__).'/calendar.svg'); ?>
								<?php echo JHtml::_('date', $item->created, 'd.m.Y'); ?>
							</div>
						</div>
					</a>
				</div>


				<div class="colnews colnews-narrow col-xs-12 hidden-sm col-md-4 hidden-lg">
					<a href="<?php echo $item->link; ?>" class="onew">
						<div class="onew-img" style="background-image: url('<?php echo JLayoutHelper::render(
							'com_content.article.image',
							array(
								'url'    => $img->image_intro,

								'options' => array(
									'resolution' => '400x300',
									'force_png'  => true
								)
							)
						); ?>');"></div>

						<div class="onew-info">
							<div class="title">
								<?php echo strip_tags(mb_strimwidth($item->title, 0, 50, "...")); ?>
							</div>

							<div class="intro">
								<?php echo strip_tags(mb_strimwidth($item->introtext, 0, 110, "...")); ?>
							</div>

							<div class="date">
								<?php echo file_get_contents(dirname(__FILE__).'/calendar.svg'); ?>
								<?php echo JHtml::_('date', $item->created, 'd.m.Y'); ?>
							</div>
						</div>
					</a>
				</div>
			<?php } else { ?>
				<?php $img = json_decode($item->images); ?>

				<div class="colnews colnews-narrow col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<a href="<?php echo $item->link; ?>" class="onew">
						<div class="onew-img" style="background-image: url('<?php echo JLayoutHelper::render(
							'com_content.article.image',
							array(
								'url'    => $img->image_intro,

								'options' => array(
									'resolution' => '400x300',
									'force_png'  => true
								)
							)
						); ?>');"></div>

						<div class="onew-info">
							<div class="title">
								<?php echo strip_tags(mb_strimwidth($item->title, 0, 50, "...")); ?>
							</div>

							<div class="intro">
								<?php echo strip_tags(mb_strimwidth($item->introtext, 0, 110, "...")); ?>
							</div>

							<div class="date">
								<?php echo file_get_contents(dirname(__FILE__).'/calendar.svg'); ?>
								<?php echo JHtml::_('date', $item->created, 'd.m.Y'); ?>
							</div>
						</div>
					</a>
				</div>
			<?php } ?>
		<?php endforeach; ?>
	</div>

	<div class="clearfix"></div>

	<div class="btn-news-wrapper">
		<a class="btn-news" href="<?php echo JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.json_decode($module->params)->catid[0]); ?>">Читать все</a>
	</div>
</div>
