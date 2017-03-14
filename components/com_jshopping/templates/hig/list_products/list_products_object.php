<?php 
/**
* @version      4.9.1 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');
?>
<div class="jshop list_product_object" id="comjshop_list_product">
<?php print $this->_tmp_list_products_html_start?>
<?php foreach ($this->rows as $k=>$product) : ?>
    <?php if ($k % 2 == 0) : ?>
        <div class = "row-fluid clearfix">
    <?php endif; ?>
    
    <div class = "sblock2">
        <div class = "block_product">
            <?php include(dirname(__FILE__)."/product_object.php");?>
        </div>
    </div>
            
    <?php if ($k % 2 == 1) : ?>
        <div class = "clearfix"></div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

<?php if ($k % 2 != 1) : ?>
    <div class = "clearfix"></div>
    </div>
<?php endif; ?>
<?php print $this->_tmp_list_products_html_end;?>
</div>