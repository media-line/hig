<?php

// No direct access to this file
defined('_JEXEC') or die;

$db = JFactory::getDBO();
$q = "SELECT id,title,introtext,images,created FROM x8thr_content WHERE catid='8' ORDER BY id DESC LIMIT 3";
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

?>

<div class="clearfix wrappernews">
    <div class="mod_name module_name">Новости</div>
    <div>
        <div class="row rownews">
            <div class="col-md-5">
                <div class="fnew">
                    <div class="fnew-img"><img src="/images<?php echo $img0 ?>" /></div>
                    <div class="fnew-info">
                        <div class="title">
                            <?php echo $data_row[0][1] ?>
                        </div>
                        <div class="intro">
                            <?php echo strip_tags(mb_strimwidth($data_row[0][2], 0, 250, "...")) ?>
                        </div>
                        <div class="date">
                            <?php echo file_get_contents(dirname(__FILE__).'/calendar.svg'); ?>
                            <?php echo JHtml::_('date', $data_row[0][4], 'd.m.Y'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="onew">
                    <div class="onew-img"><img src="/images<?php echo $img1 ?>" /> </div>
                    <div class="title">
                        <?php echo $data_row[1][1] ?>
                    </div>
                    <div class="intro">
                        <?php echo strip_tags(mb_strimwidth($data_row[1][2], 0, 120, "...")) ?>
                    </div>
                    <div class="date">
                        <?php echo file_get_contents(dirname(__FILE__).'/calendar.svg'); ?>
                        <?php echo JHtml::_('date', $data_row[1][4], 'd.m.Y'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="onew">
                    <div><img src="/images<?php echo $img2 ?>" /> </div>
                    <div class="title">
                        <?php echo $data_row[2][1] ?>
                    </div>
                    <div class="intro">
                        <?php echo strip_tags(mb_strimwidth($data_row[2][2], 0, 120, "...")) ?>
                    </div>
                    <div class="date">
                        <?php echo file_get_contents(dirname(__FILE__).'/calendar.svg'); ?>
                        <?php echo JHtml::_('date', $data_row[2][4], 'd.m.Y'); ?>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn-news" href="">Читать все</a>
    </div>
</div>
