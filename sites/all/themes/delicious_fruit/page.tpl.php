<?php
// $Id: page.tpl.php,v 1.1.4.1 2008/08/15 23:14:47 doncoryon Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<div id="container">

	<div id="header">

		<div id="header_left">
			<?php if ($site_name) { ?><h1><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
			<?php if ($site_slogan) { ?><h2><?php print $site_slogan ?></h2><?php } ?>
		</div>

		<div id="header_right">
			<?php if ($login_box) { ?> <?php print $login_box ?> <?php } ?>
		</div>
  
	</div>

	<div id="left">

		<?php if ($left) { ?> <?php print $left ?> <?php } ?>

	</div>

	<div id="right">

		<?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
		<?php print $breadcrumb ?>
	    <h1 class="node-title"><?php print $title ?></h1>
	    <div class="tabs"><?php print $tabs ?></div>
	    <?php if ($show_messages) { print $messages; } ?>
	    <?php print $help ?>
	    <?php print $content; ?>
	    <?php print $feed_icons; ?>
	  
	</div>

	<div id="footer">
		<div class="footer_message"><?php if ($footer_message) { ?> <?php print $footer_message ?> <?php } ?></div>
		<div class="footer_coded">Created by: <a href="http://www.csstemplateheaven.com">Dieter Schneider 2007</a> | Ported by: <a href="http://goodwinsolutions.com">Goodwin Web Solutions</a></div>
	</div>

</div>

<?php print $closure ?>

</body>
</html>
