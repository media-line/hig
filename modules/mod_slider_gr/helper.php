<?php
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
  
// No direct access.
defined('_JEXEC') or die;
 
class modSliderHelper
{
    public static function getSliderImg($params)
    {    
	    $slidesArray = array();
	    for ($j=1; $j<7; $j++) {
		    if ($params->get('image'.$j)) {
				$slide = array(image=>$params->get('image'.$j), up=>$params->get('up'.$j), down=>$params->get('down'.$j), url=>$params->get('url'.$j));
				array_push($slidesArray, $slide);
			}
		}
        return $slidesArray;
    }
     
}
