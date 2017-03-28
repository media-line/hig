<?php
/**
 * @version      4.11.0 17.09.2015
 * @author       MAXXmarketing GmbH
 * @package      Jshopping
 * @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
 * @license      GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');

print $this->_tmp_category_html_start;

/*$product = JTable::getInstance('product', 'jshop');
$allProducts = $product->getAllProducts();*/


$cat = JTable::getInstance('category', 'jshop');

?>
<div class="jshop" id="comjshop">

    <div class="div_h1"><?php print $this->category->name ?></div>
    <?php jimport('joomla.application.module.helper');
    $module = JModuleHelper::getModules('breadcrumbs');
    $attribs['style'] = 'xhtml';
    echo JModuleHelper::renderModule($module[0], $attribs); ?>

    <div class="joomshopping_category clearfix">

        <?php $productCats = $cat->getSubCategories(7, 'id', 'asc', 1); ?>
        <div class="jshop_list_category">
            <?php if (count($this->categories)) : ?>
            <div class="jshop list_category">
                <?php foreach ($productCats as $k => $category) : ?>

                    <?php if ($k % $this->count_category_to_row == 0) : ?>
                        <div class="row-fluid">
                    <?php endif; ?>

                    <div class="sblock<?php echo $this->count_category_to_row; ?> jshop_categ jshop_categ_<?php echo $k; ?> category">
                        <div class="sblock2 name">
                            <div class="category_name">
                                <a class="product_link" href="<?php print $category->category_link ?>">
                                    <?php print $category->name ?>
                                </a>
                            </div>
                        </div>
                        <div class="sblock2 content clearfix">
                            <div class="sblock2_inner products">
                                <?php /* foreach($allProducts as $singleProduct) {
										if ($singleProduct->category_id == $category->category_id) { ?>
											<a href="<?php echo $singleProduct->product_link; ?>"><?php echo $singleProduct->name; ?></a>
										<?php }
									}*/ ?>
                                <a class="product_link" href="<?php print $category->category_link ?>">
                                    <p class="category_short_description">
                                        <?php print $category->short_description ?>
                                    </p>
                                </a>
                                <?php $subCats = $cat->getSubCategories($category->category_id, 'id', 'asc', 1);
                                foreach ($subCats as $subCat) { ?>
                                    <a class="subCatLink"
                                       href="<?php echo $subCat->category_link; ?>"><?php echo $subCat->name; ?></a><br>
                                <?php } ?>
                            </div>
                            <div class="sblock2_inner image">
                                <!--<a href = "<?php print $category->category_link; ?>">-->
                                <img class="jshop_img"
                                     src="<?php print $this->image_category_path; ?>/<?php if ($category->category_image) print $category->category_image; else print $this->noimage; ?>"
                                     alt="<?php print htmlspecialchars($category->name) ?>"
                                     title="<?php print htmlspecialchars($category->name) ?>"/>
                                <!--</a>-->
                            </div>
                        </div>
                    </div>

                    <?php if ($k % $this->count_category_to_row == $this->count_category_to_row - 1) : ?>
                        <div class="clearfix"></div>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?>

                <?php if ($k % $this->count_category_to_row != $this->count_category_to_row - 1) : ?>
                <div class="clearfix"></div>
            </div>
        <?php endif; ?>

        </div>
    <?php endif; ?>
    </div>

    <?php include(dirname(__FILE__) . "/products.php"); ?>

</div>

<div class="category_description">
    <?php print $this->category->description ?>
</div>

<?php print $this->_tmp_category_html_end; ?>
</div>