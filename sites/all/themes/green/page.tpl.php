<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
</head>
<body>
<div id="container">
	<div id="line-top"></div>
	<div id="body">
		<div id="header">
			<div class="columns">
				<div class="a">
					<?php if ($logo) { ?><a href="<?php print check_url($front_page) ?>" title="<?php print $site_title ?>"><img src="<?php print check_url($logo) ?>" alt="<?php print $site_title ?>" /></a><?php } ?>
				</div>
				<div class="b">
					<div class="padding">
						<?php if (isset($primary_links)) { ?>
						<div id="primary-links"><?php print theme('links', $primary_links) ?></div>
						<?php } ?>
						<?php 
						if( arg(0) != 'search' ){
						  print $search_box;
						}
						?>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="columns">
			<div class="a">
				<div class="padding">
					<?php if ($left) { ?>
					<div id="sidebar-left"> <?php print $left ?> </div>
					<?php } ?>
				</div>
			</div>
			<div class="b">
				<div class="padding">
					<?php if($header){ ?>
					<div><?php print $header ?></div>
					<?php } ?>
					<?php if($mission){ ?>
					<div id="mission"><?php print $mission ?></div>
					<?php } ?>                    
					<div id="main"> 
						<?php print $breadcrumb ?>
						<h1 class="title"><?php print $title ?></h1>
						<?php if( $tabs ){ ?>
						<div class="tabs"><?php print $tabs ?></div>
						<?php } ?>
						<?php print $help ?> <?php print $messages ?> <?php print $content; ?>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="footer">
			<?php if (isset($secondary_links)) { ?>
            <div id="secondary-links"><?php print theme('links', $secondary_links) ?></div>
            <?php } ?>
			<?php 
					  if($footer_message){ 
					    print $footer_message . "<br />"; 
					  } 
				?>
			Realizzato da: <a title="Realizzazione siti Internet" href="http://www.grossdesign.it">Gross Design Studio</a>
		</div>
	<div id="line-bottom"></div>
</div>
<?php
  
  print $closure;

?>
<!-- Original www.SegnalaSito.eu Theme Design by Gross Design Studio -->
</body>
</html>
