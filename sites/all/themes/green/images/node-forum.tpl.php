<table style="background:#F1EDED; " class="node<?php if ($sticky) { print " sticky"; } ?>">
  <tr>
    <td><img alt="Италия" src="themes/Default/images/node-top-left.png" /></td>
    <td class="node-top"></td>
  </tr>
  <tr>
    <td colspan="2" class="node-borders">
    <?php
	if ($picture) { 
      print $picture;
    }
	?>
    <?php if ($main) { ?>    <h2 class="title"><?php if($is_front){ echo t('Forum') . " : "; } ?><a href="<?php print $node_url?>"><?php print $title?></a></h2>    <?php } ?>
    <span class="submitted"><?php print $submitted?></span>
    <!--<span class="taxonomy"><?php print $terms?></span>-->
    <div class="content"><?php print $content?></div>
<?php 
	  if( $node->body ){ 
		include "misc/secondary.add";
	  } 
?>		
	<div class="links"><?php print $links?></div></td>
  </tr>
</table>