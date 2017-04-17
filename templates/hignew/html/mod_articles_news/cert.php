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
<div class="review-module review-module_cert newsflash<?php echo $moduleclass_sfx; ?>">
	<div class="module-title">Сертификаты</div>

	<div class="row">
		<?php foreach ($list as $key => $item) : ?>
				<?php $img = json_decode($item->images); ?>

				<div class="review-module__wrapper col-xs-6 col-sm-6 col-md-3">
					<a href="<?php echo $img->image_intro; ?>" rel="lightbox" class="review-module__item">
						<div class="review-module__img" style="background-image: url('<?php echo JLayoutHelper::render(
							'com_content.article.image',
							array(
								'url'    => $img->image_intro,

								'options' => array(
									'resolution' => '250x350',
									'force_png'  => true
								)
							)
						); ?>');"></div>

						<div class="review-module__title">
							<?php echo strip_tags(mb_strimwidth($item->title, 0, 60, "...")) ?>
						</div>

						<div class="review-module__shadow"></div>
					</a>
				</div>
		<?php endforeach; ?>
	</div>

	<div class="clearfix"></div>

	<div class="btn-news-wrapper">
		<a class="btn-news" href="<?php echo JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.json_decode($module->params)->catid[0]); ?>">Смотреть все</a>
	</div>
</div>
