<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
   
// No direct access to this file
defined('_JEXEC') or die;

$count3 = strrpos( $params->get('text3'), ')')+1;
$count4 = strrpos( $params->get('text4'), ')')+1;
$count5 = strrpos( $params->get('text5'), ')')+1;
$count6 = strrpos( $params->get('text6'), ')')+1;

?>
<div class="clearfix mod_header_contacts_gr">
	<div>
		<div class="mod_header_contacts_gr_logo">
		    <a href="skype:<?php echo $params->get('text1'); ?>?chat"><span><img src="<?php echo $params->get('logo1'); ?>" alt=""></span> <?php echo $params->get('text1'); ?></a>
		</div>
		<div class="mod_header_contacts_gr_logo">
		    <a href="viber://chat:<?php echo $params->get('text2_viber'); ?>"><span><img src="<?php echo $params->get('logo2'); ?>" alt=""></span> <?php echo $params->get('text2'); ?></a>
		</div>	
	</div>
	<div>
		<div class="mod_header_contacts_gr_logo">
		    <span><img src="<?php echo $params->get('logo3'); ?>" alt=""></span> <?php echo substr($params->get('text3'), 0, $count3).'<span class="bold">'.substr($params->get('text3'), $count3).'</span>'; ?>
		</div>
		<div class="mod_header_contacts_gr_logo">
		    <span><img src="<?php echo $params->get('logo4'); ?>" alt=""></span> <?php echo substr($params->get('text4'), 0, $count4).'<span class="bold">'.substr($params->get('text4'), $count4).'</span>'; ?>
		</div>	
	</div>	
	<div>
		<div class="mod_header_contacts_gr_logo">	
		    <span><img src="<?php echo $params->get('logo5'); ?>" alt=""></span> <?php echo substr($params->get('text5'), 0, $count5).'<span class="bold">'.substr($params->get('text5'), $count5).'</span>'; ?>
		</div>
		<div class="mod_header_contacts_gr_logo">
		    <span><img src="<?php echo $params->get('logo6'); ?>" alt=""></span> <?php echo substr($params->get('text6'), 0, $count6).'<span class="bold">'.substr($params->get('text6'), $count6).'</span>'; ?>
		</div>
	</div>	
	<div>
		<div class="mod_header_contacts_gr_logo">
		    <a href="mailto:<?php echo $params->get('text7'); ?>"><span><img src="<?php echo $params->get('logo7'); ?>" alt=""></span> <?php echo $params->get('text7'); ?></a>
	    </div>
	</div>
</div>