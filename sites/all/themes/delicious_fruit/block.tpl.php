<?php
// $Id: block.tpl.php,v 1.1 2008/08/12 20:32:34 doncoryon Exp $
?>
<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?> unstyled-block">

	<?php if ($block->subject): ?>
		<h4><?php print $block->subject; ?></h4> 
	<?php endif;?>
	
	<div class="content"><?php print $block->content ?></div>
</div>