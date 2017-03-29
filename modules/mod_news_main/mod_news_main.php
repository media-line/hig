<?php
 
/**
 * @package     Joomla.Tutorials
 * @subpackage  Module
 * @copyright   (C) 2015 gordoney
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 */
   
// No direct access to this file
defined('_JEXEC') or die;

/*id категории - 8; таблица - x8thr_content*/

//1. Создадим экземпляр класса
$db = JFactory::getDBO();
//2. Создадим запрос к базе данных, в данном случае мы выбираем первую статью
$q = "SELECT id,title,introtext,images,created FROM x8thr_content WHERE catid='8' ORDER BY id DESC LIMIT 3";
//3. Установим этот запрос в экземпляр класса  работы с базами данных
$db -> setQuery($q);
//4.  Выполним запрос и получим данные
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

<!--        <pre>
            <?php
/*            //5. Посмотрим  что нам вернул этот метод, должен быть массив из 2-х элементов id и  title
            print_r($data_row);
            */?>
        </pre>-->

	<div class="clearfix wrappernews">
        <div class="mod_name module_name">Новости</div>
        <div>
            <div class="row rownews">
                <div class="col-md-5 fnew">
                    <div><img src="/images<?php echo $img0 ?>" /></div>
                    <div class="title">
                        <?php echo $data_row[0][1] ?>
                    </div>
                    <div class="intro">
                        <?php echo mb_strimwidth($data_row[0][2], 0, 80, "...") ?>
                    </div>
                    <div class="date">
                        <?php echo $data_row[0][4] ?>
                    </div>
                </div>
                <div class="col-md-3 onew">
                    <div><img src="/images<?php echo $img1 ?>" /> </div>
                    <div class="title">
                        <?php echo $data_row[1][1] ?>
                    </div>
                    <div class="intro">
                        <?php echo mb_strimwidth($data_row[1][2], 0, 80, "...") ?>
                    </div>
                    <div class="date">
                        <?php echo $data_row[1][4] ?>
                    </div>
                </div>
                <div class="col-md-3 onew">
                    <div><img src="/images<?php echo $img2 ?>" /> </div>
                    <div class="title">
                        <?php echo $data_row[2][1] ?>
                    </div>
                    <div class="intro">
                        <?php echo mb_strimwidth($data_row[2][2], 0, 80, "...") ?>
                    </div>
                    <div class="date">
                        <?php echo $data_row[2][4] ?>
                    </div>
                </div>
            </div>
            <a class="btn-news" href="">Читать все</a>
        </div>
	</div>
