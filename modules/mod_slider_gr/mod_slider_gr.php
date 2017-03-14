<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
   
// No direct access to this file
defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$document = JFactory::getDocument();
$document->addScript(JURI::root(true) . "/modules/mod_slider_gr/js/slider.js");

require_once dirname(__FILE__).'/helper.php';

$slidesView = modSliderHelper::getSliderImg($params);
$count = count($slidesView); 
 
require JModuleHelper::getLayoutPath('mod_slider_gr', $params->get('layout', 'default'));

?>

