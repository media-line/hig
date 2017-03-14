<?php
/**
* @version      4.0.1 20.12.2012
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/

    defined('_JEXEC') or die('Restricted access');
    error_reporting(error_reporting() & ~E_NOTICE);
    
    if (!file_exists(JPATH_SITE.'/components/com_jshopping/jshopping.php')){
        JError::raiseError(500,"Please install component \"joomshopping\"");
    } 
    
    require_once (JPATH_SITE.'/components/com_jshopping/lib/factory.php'); 
    require_once (JPATH_SITE.'/components/com_jshopping/lib/functions.php');        
    JSFactory::loadCssFiles();
    JSFactory::loadLanguageFile();
    $jshopConfig = JSFactory::getConfig();         
    $document = JFactory::getDocument();

    $category = JTable::getInstance('category', 'jshop');
	$category->load($_REQUEST['category_id']);
	$products = $category->getProducts();
	
?>
<div class="mod_jshopping_related_gr clearfix">
	<div class="mod_jshopping_related_gr_name"><?php echo JText :: _('MOD_JSHOPPING_RELATED_GR_NAME'); ?></div>
	<?php foreach ($products as $product) { ?>
		<div class="related_product_wrap">
			<a href="<?php echo $product->product_link; ?>" class="related_product">
				<div class="img">
					<img src="<?php echo $product->image; ?>" alt="">
					<div class="joomshopping_list_image"></div>
				</div>
				<div class="name">
					<?php echo $product->name; ?>
				</div>
			</a>
		</div>
	<?php } ?>
</div>