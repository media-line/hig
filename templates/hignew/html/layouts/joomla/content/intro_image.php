<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// More descriptive name
$article = $displayData;

// Our article will only have a link if it's required so it's easier to check in our HTML
if ($article->params->get('link_titles') && $article->params->get('access-view'))
{
	$link = JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid, $article->language));
}
?>
<div class="item-image">
	<?php if ($link) : ?>
		<a href="<?php echo $link; ?>" class="thumbnail">
	<?php endif; ?>
		<?php
			echo JLayoutHelper::render(
				'com_content.article.image',
				array(
					'article'    => $article,
					'options' => array(
						'resolution' => '450x350'
					)
				)
			)
		?>
	<?php if ($link) : ?>
		</a>
	<?php endif; ?>
</div>