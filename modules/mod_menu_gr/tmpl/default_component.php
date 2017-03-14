<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$class = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : '';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';

if ($item->menu_image)
{
	$item->params->get('menu_text', 1) ?
	$linktype = '<div class="mod_menu_gr_img"><img src="' . $item->menu_image . '" alt="' . $item->title . '" /></div><div class="image-title">' . $item->title . '</div> ' :
	$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
	$linktype = $item->title;
}

$showLink = true;
if ($item->flink == $_SERVER['REQUEST_URI']) {
	$showLink = false;
}


switch ($item->browserNav)
{
	default:
	case 0:
?><?php if ($showLink) { ?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" <?php echo $title; ?>><?php } ?><?php echo $linktype; ?><?php  if ($showLink) { ?></a><?php } ?><?php
		break;
	case 1:
		// _blank
?><?php if ($showLink) { ?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>><?php } ?><?php echo $linktype; ?><?php  if ($showLink) { ?></a><?php } ?><?php
		break;
	case 2:
	// Use JavaScript "window.open"
?><?php if ($showLink) { ?><a <?php echo $class; ?>href="<?php echo $item->flink; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><?php } ?><?php echo $linktype; ?><?php  if ($showLink) { ?></a><?php } ?>
<?php
		break;
}
