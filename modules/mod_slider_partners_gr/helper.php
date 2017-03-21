<?php
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
  
// No direct access.
defined('_JEXEC') or die;
 
class modSliderPartnersHelper
{
    public static function getSliderImg($params)
    {    
	    $sliderArr = json_decode($params->get('list_images'))->logo;
		return $sliderArr;
    }
}
