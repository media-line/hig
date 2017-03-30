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
$q = "SELECT id,title,introtext,images,created FROM x8thr_content WHERE catid='9'";
$db->setQuery($q);
$data_row = $db->loadRowList();

    $img = $data_row[0][3];
    $img = strstr($img, '",', true);
    $img0 = strstr($img, '\/');
    $img = $data_row[1][3];
    $img = strstr($img, '",', true);
    $img1 = strstr($img, '\/');
    $img = $data_row[2][3];
    $img = strstr($img, '",', true);
    $img2 = strstr($img, '\/');
    $img = $data_row[3][3];
    $img = strstr($img, '",', true);
    $img3 = strstr($img, '\/');

?>

<!--<pre>
    <?php
/*        var_dump($data_row);
    */?>
</pre>-->

<div class="clearfix">
    <div style="text-align: center;">
        <div class="mod_name module_name">Сертификаты</div>

        <div style="height: 285px;">
            <div class="modsertif col-md-3">
                <img src="/images/<?php echo $img0 ?>" />
                <p><?php echo $data_row[0][1] ?></p></p>
            </div>
            <div class="modsertif col-md-3">
                <img src="/images/<?php echo $img1 ?>" />
                <p><?php echo $data_row[1][1] ?></p>
            </div>
            <div class="modsertif col-md-3">
                <img src="/images/<?php echo $img2 ?>" />
                <p><?php echo $data_row[2][1] ?></p>
            </div>
            <div class="modsertif col-md-3">
                <img src="/images/<?php echo $img3 ?>" />
                <p><?php echo $data_row[3][1] ?></p>
            </div>
        </div>
        <a class="btn-news" href="/">Смотреть все</a>
    </div>
</div>
