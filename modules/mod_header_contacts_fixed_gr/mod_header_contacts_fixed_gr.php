<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
   
// No direct access to this file
defined('_JEXEC') or die;

/*$count1 = strrpos( $params->get('text1'), ')')+1;*/
$count2 = strrpos( $params->get('text2'), ')')+1;

?>
	<div class="clearfix">
		<!--<div class="mod_header_fixed_contacts_gr_logo">
		    <span><img src="<?php echo $params->get('logo1'); ?>" alt=""></span> <?php echo substr($params->get('text1'), 0, $count1).'<span class="bold">'.substr($params->get('text1'), $count1).'</span>'; ?>
		</div>-->
		<div class="mod_header_fixed_contacts_gr_logo">
		    <span><img src="<?php echo $params->get('logo2'); ?>" alt=""></span> <?php echo substr($params->get('text2'), 0, $count2).'<span class="bold">'.substr($params->get('text2'), $count2).'</span>'; ?>
		</div>	
	</div>
