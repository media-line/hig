<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
   
// No direct access to this file
defined('_JEXEC') or die;

	
	$document = & JFactory::getDocument();
	$document->addScript(JURI::root(true) . "/modules/mod_order_gr/order.js");	

	require JModuleHelper::getLayoutPath('mod_order_gr', $params->get('layout', 'default'));