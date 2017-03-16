<?php 
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$app = Jfactory::getApplication();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script type="text/javascript">
		jQuery.noConflict();
	</script>
	
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/jquery.jscrollpane.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css" type="text/css" />
	
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.mousewheel.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.jscrollpane.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
	<meta name="viewport" content="width=1280px">
	
    <script src='https://www.google.com/recaptcha/api.js'></script>	
	
	<link rel="icon" type="image/vnd.microsoft.icon" href="templates/hig/favicon.ico">
</head>
<?php $menuitemid = JRequest::getInt( 'Itemid' ); 
if ($menuitemid) {
    $menu = JFactory::getApplication()->getMenu();
	$bodysuffix = $menu->getParams( $menuitemid )->get('pageclass_sfx');
} 

$mainpage = false;
if (JURI::current() == JURI::base()) {
	$mainpage = true;
}

?>

<body class="body <?php print_r($bodysuffix); ?>">

<div class="container">
    <div id="header">
        <div class="logoname">
            <img src="templates/hignew/images/logonew.png" />
        </div>
        <div class="allheader">
            <div class="top_header">
                <div class="header_contacts">
                    <jdoc:include type="modules" name="header_contacts" style="xhtmlgr" />
                </div>
                <div class="header_form">
                    <jdoc:include type="modules" name="header_form_fixed" style="xhtmlgr" />
                </div>
            </div>
            <div class="header_menu">
                <jdoc:include type="modules" name="header_menu" style="xhtmlgr" />
            </div>
        </div>

	</div>
</div>
	

</body>
</html>
<svg>
    <defs>
        <clipPath id="clipping">
            <circle cx="85" cy="85" r="85" />
        </clipPath>
    </defs>
</svg>