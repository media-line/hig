<?php 
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

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
	
    <div id="header">
	    <div class="header_info">
			<div class="container-fluid clearfix">
			    <div class="header header_logo">
				    <?php if (!$mainpage) { echo '<a href="/">'; } ?><jdoc:include type="modules" name="header_logo" style="xhtmlgr" /><?php if (!$mainpage) { echo '</a>'; } ?>
				</div>
			    <div class="header header_contacts">
				    <jdoc:include type="modules" name="header_contacts" style="xhtmlgr" />
					<div class="name"><jdoc:include type="modules" name="header_logo_name" style="xhtmlgr" /></div>
				</div>
			    <div class="header_search">
				    <jdoc:include type="modules" name="header_search" style="xhtmlgr" />
				</div>				
			</div>				
		</div>	
		<div class="header_menu">
			<div class="container-fluid clearfix">		
                <jdoc:include type="modules" name="header_menu" style="xhtmlgr" />
			</div>
		</div>	
	</div>

	<div class="fixed-header">
		<div class="container-fluid clearfix">	
			<div class="header_fixed header_logo_fixed">			
                <?php if (!$mainpage) { echo '<a href="/">'; } ?><jdoc:include type="modules" name="header_logo_fixed" style="xhtmlgr" /><?php if (!$mainpage) { echo '</a>'; } ?>
		    </div>
			<div class="header_fixed header_contacts_fixed">			
                <jdoc:include type="modules" name="header_contacts_fixed" style="xhtmlgr" />
		    </div>
			<div class="header_fixed header_header_form_fixed">			
                <jdoc:include type="modules" name="header_form_fixed" style="xhtmlgr" />
		    </div>
	    </div>    
	</div>
	
	<?php if ($this->countModules('slider')) { ?>
		<div id="slider">
            <jdoc:include type="modules" name="slider" style="xhtmlgr" />
		</div>		
	<?php } ?>

	<?php if ($this->countModules('main_category')) { ?>
		<div id="main_category">
			<div class="container-fluid clearfix">
                <jdoc:include type="modules" name="main_category" style="xhtmlgr" />
			</div>
		</div>		
	<?php } ?>

	<?php if ($this->countModules('slider_partners')) { ?>
        <div id="main_plus">
            <div class="container-fluid clearfix">
                <jdoc:include type="modules" name="main_plus" style="xhtmlgr" />
            </div>
        </div>
    <?php } ?>

    <?php if ($this->countModules('slider_partners')) { ?>
		<div id="slider_partners">
			<div class="container-fluid clearfix">
                <jdoc:include type="modules" name="slider_partners" style="xhtmlgr" />
			</div>
		</div>		
	<?php } ?>	
	
	<div id="content">
		<div class="container-fluid">
			<?php if ($_SERVER['REQUEST_URI'] != '/') { ?>
				<div class="lift_bottom lift_button"><img src="/images/lift_bottom.png" alt=""></div>
				<div class="lift_top lift_button"><img src="/images/lift_top.png" alt=""></div>
			<?php } ?>
			<jdoc:include type="message" /> 
			<jdoc:include type="component" style="xhtmlgr" />	
		</div>
	</div>	
	
    <div id="footer">
        <div class="container-fluid clearfix">
			<?php if(JURI::current() !== JURI::base()){?>
				<span>Разработка сайта: </span><a target="_blank" rel="nofollow" href="http://www.medialine.by/">MediaLine</a>
			<?php } else { ?>	
				<span>Разработка сайта: </span><a target="_blank" href="http://www.medialine.by/">MediaLine</a>
			<?php } ?>
		</div>	
	</div>			

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter34486050 = new Ya.Metrika({id:34486050,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/34486050" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71852932-1', 'auto');
  ga('send', 'pageview');

</script>	
</body>
</html>