<?php
/**
 * @package        Joomla.Site
 * @copyright    Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$app = Jfactory::getApplication();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>"
      lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script type="text/javascript">
        jQuery.noConflict();
    </script>

    <jdoc:include type="head"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/reset.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/jquery.jscrollpane.css"
          type="text/css"/>
    <link rel="stylesheet"
          href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/jquery.fancybox.min.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css"
          type="text/css"/>

    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.mousewheel.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.jscrollpane.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.fancybox.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link rel="icon" type="image/vnd.microsoft.icon" href="templates/hig/favicon.ico">

    <link rel="stylesheet" href="/templates/hignew/css/responsive.css" type="text/css"/>

</head>
<?php $menuitemid = JRequest::getInt('Itemid');
if ($menuitemid) {
    $menu = JFactory::getApplication()->getMenu();
    $bodysuffix = $menu->getParams($menuitemid)->get('pageclass_sfx');
}

$mainpage = false;
if (JURI::current() == JURI::base()) {
    $mainpage = true;
}

?>

<body class="body <?php print_r($bodysuffix); ?>">
<div id="float-block" class="float-block">
    <div class="form_tail hidden-xs hidden-sm"></div>
    <a href="/" class="ltl-logo">
        <img class="logoimg" src="templates/hignew/images/logo-ltl.png"/>
    </a>

    <a href="/" class="big-logo">
        <img class="logoimg" src="templates/hignew/images/logonew.png"/>
    </a>

    <div class="container">
        <div id="header">
            <div class="allheader">
                <div class="top_header">
                    <div class="header_contacts col-xs-8 col-sm-8 col-md-5">
                        <jdoc:include type="modules" name="header_contacts" style="xhtmlgr"/>
                    </div>
                    <div class="header_form col-xs-4 col-sm-4 col-md-4">
                        <jdoc:include type="modules" name="header_form_fixed" style="xhtmlgr"/>
                    </div>
                </div>
                <div class="bottom_header">
                    <div class="header_menu">
                        <!-- главное меню -->
                        <div class="navbar-header">
                            <!-- кнопка на мобильной версии -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span><!--Полоски на кноке-->
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- /кнопка на мобильной версии -->
                        </div>
                        <div class="collapse navbar-collapse dropdown" id="bs-example-navbar-collapse-1">
                            <jdoc:include type="modules" name="header_menu" style="xhtml"/>
                        </div>
                        <!-- /главное меню -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($this->countModules('slider')) { ?>
    <div id="slider" class="hidden-xs hidden-sm">
        <jdoc:include type="modules" name="slider" style="xhtmlgr"/>
    </div>
<?php } ?>

<div class="container">
    <?php if ($this->countModules('main_category')) { ?>
        <div id="main_category">
            <div class="container-fluid clearfix">
                <jdoc:include type="modules" name="main_category" style="xhtmlgr"/>
            </div>
        </div>
    <?php } ?>
</div>

<div class="container prodslider">
    <?php if ($this->countModules('slider_production')) { ?>
        <div id="slider_partners">
            <div class="container-fluid clearfix">
                <jdoc:include type="modules" name="slider_production" style="xhtmlgr"/>
            </div>
        </div>
    <?php } ?>
</div>

<div class="container">
    <?php if ($this->countModules('main_plus')) { ?>
        <div id="slider_partners">
            <div class="container-fluid clearfix">
                <jdoc:include type="modules" name="main_plus" style="xhtmlgr"/>
            </div>
        </div>
    <?php } ?>
</div>

<div class="container hidden-xs hidden-sm slider_partners_last">
    <?php if ($this->countModules('slider_partners')) { ?>
        <div id="slider_partners">
            <div class="container-fluid clearfix">
                <jdoc:include type="modules" name="slider_partners" style="xhtmlgr"/>
            </div>
        </div>
    <?php } ?>
</div>

<div class="container">
    <div id="content">
        <div class="container-fluid">
            <jdoc:include type="message"/>
            <jdoc:include type="component" style="xhtmlgr"/>
        </div>
    </div>
</div>

<div id="footer">
    <div class="container-fluid clearfix">
        <?php if (JURI::current() !== JURI::base()) { ?>
            <span>Разработка сайта: </span><a target="_blank" rel="nofollow"
                                              href="http://www.medialine.by/">MediaLine</a>
        <?php } else { ?>
            <span>Разработка сайта: </span><a target="_blank" href="http://www.medialine.by/">MediaLine</a>
        <?php } ?>
    </div>
</div>
</body>
</html>
<script src="/templates/hignew/js/ltlfunction.js" type="text/javascript"></script>