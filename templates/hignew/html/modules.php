<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/*
 * xhtml (divs and font header tags)
 * With the new advanced parameter it does the same as the html5 chrome
 */
function modChrome_xhtmlgr($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';


	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable<?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">
			<?php if ((bool) $module->showtitle) : ?>
				<div class="mod_name"><?php echo $module->title; ?></div>
			<?php endif; ?>
			<?php echo $module->content; ?>
		</<?php echo $moduleTag; ?>>
	<?php endif;
}
