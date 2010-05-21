<?php
// $Id: node.tpl.php,v 1.1 2008/08/12 20:32:34 doncoryon Exp $
?>

<?php if ($page == 0): ?>

	<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">

		<?php if ($picture) { print $picture; }?>
		
		<div class="date_box">
			<div class="date_box_month"> <?php print (format_date($node->created, 'custom', 'M')) ?> </div>
			<div class="date_box_day"> <?php print (format_date($node->created, 'custom', 'd')) ?> </div>
		</div>
	    
		<?php if ($page == 0) { ?><h3><a href="<?php print $node_url?>"><?php print $title?></a></h3><?php }; ?>
		<div class="taxonomy"><?php print $terms?></div>
		<div class="content"><?php print $content?></div>
	    <?php if ($links) { ?><div class="links"><?php print $links?></div><?php }; ?>
	</div>

 <?php endif; ?>
 
 
<?php if ($page == 1): ?>
 
	<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
	    <?php if ($picture) { print $picture; }?>
	    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
	    <span class="submitted"><?php print $submitted?></span>
	    <div class="taxonomy"><?php print $terms?></div>
	    <div class="content"><?php print $content?></div>
	    <?php if ($links) { ?><div class="links"><?php print $links?></div><?php }; ?>
	</div>
  
 <?php endif; ?>