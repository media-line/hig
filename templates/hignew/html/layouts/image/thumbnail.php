<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

extract($displayData);

/**
 * Layout variables
 *
 * @var  array   $imageUrl    Url of the source image
 * @var  array   $options     Array with options. Available options:
 *       						'resolution'   : Resolution of the thumbnail
 *       						'force_png'    : Convert always to PNG for transparent backgrounds
 *       						'force_rewrite' : Force thumbnail regeneration
 *       						'thumb_method' : Method to use to create the thumbnails. See JImage
 */

$layoutOptions = empty($options) ? new JInput : new JInput($options);

// Generate image path from its URL
$imagePath = JPATH_SITE . '/' . ltrim($imageUrl, '/');

// Cannot create the thumb
if (!file_exists($imagePath))
{
	echo $imageUrl;

	return;
}

// Layout options
$resolution   = $layoutOptions->get('resolution', '450x350');
$forcePng     = $layoutOptions->getBoolean('force_png', false);
$rewriteThumb = $layoutOptions->getBoolean('force_rewrite', false);
$thumbMethod  = $layoutOptions->getInt('thumb_method', JImage::SCALE_INSIDE);

$fileInfo =	pathinfo($imagePath);
$thumbPath = dirname($imagePath) . '/thumbs/' . $resolution . '/' . $fileInfo['filename'] . '.png';

// Thumb already exists
if (!$rewriteThumb && file_exists($thumbPath))
{
	echo str_replace(JPATH_SITE, JUri::root(true), $thumbPath);

	return;
}

// Source of the png file if we have to force PNG thumbnails
$pngPath = dirname($imagePath) . '/' . $fileInfo['filename'] . '.png';

if ($forcePng && $fileInfo['extension'] != 'png' && !file_exists($pngPath))
{
	$pngImage = imagecreatefromstring(file_get_contents($imagePath));
	imagepng($pngImage, $pngPath);
	$jimage = new JImage($pngPath);
}
else
{
	$jimage = new JImage($imagePath);
}

try
{
	$thumbs = $jimage->generateThumbs(array($resolution));
}
catch (Exception $e)
{
	$thumbs = array();
}

if (!$thumbs)
{
	echo $imageUrl;

	return;
}

// Try to create the thumb folder
if (!is_dir(dirname($thumbPath)) && !mkdir(dirname($thumbPath), 0755, true))
{
	echo $imageUrl;

	return;
}

$thumbs[0]->toFile($thumbPath, JImage::getImageFileProperties($jimage->getPath())->type);

echo str_replace(JPATH_SITE, JUri::root(true), $thumbPath);
