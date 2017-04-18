<?php
/**
* @version      4.0.4 02.06.2014
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

    
    $document = JFactory::getDocument();
    $document->addStyleSheet(JURI::base().'modules/'.$module->module.'/style.css');

    
    JSFactory::loadCssFiles();
    JSFactory::loadLanguageFile();
    $jshopConfig = JSFactory::getConfig();
	
    $product = JTable::getInstance('product', 'jshop');
    
    $objects = $product->getAllProducts(array('categorys'=>array(29), 'manufacturers'=>array($attribs['manufacturer'])));
    
    require(JModuleHelper::getLayoutPath('mod_gr_object','default'));
    ?>