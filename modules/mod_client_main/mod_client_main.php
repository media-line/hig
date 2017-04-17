<?php

/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die;

$db = JFactory::getDBO();
$q = "SELECT manufacturer_id,manufacturer_logo,`name_ru-RU` FROM x8thr_jshopping_manufacturers";
$db->setQuery($q);
$data_row = $db->loadRowList();
?>

<div class="clearfix">
    <div class="module-title">Клиенты</div>
    <div class="client_mod">
        <?php
            $count = count($data_row);
        for ($i=0; $i<$count; $i++){?>
            <div class="mclient col-xs-6 col-sm-3 col-md-2">
                <a class="mclient__link" href="/ob-ekty?manufacturer_id=<?php echo $data_row[$i][0]; ?>">
                    <div class="mclient__img">
                        <img src="/components/com_jshopping/files/img_manufs/<?php echo $data_row[$i][1] ?>" />
                    </div>

                    <div class="mclient__title"><?php echo $data_row[$i][2] ?></div>
                </a>
            </div>
        <?php }; ?>
    </div>
</div>
