  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <span class="taxonomy">Categorie &amp; tags: <?php print $terms?></span>
    <div class="content"><?php print $content?></div>
	<?php if ($page == 1) { ?>
	<div id="google-secondary">
	<script type="text/javascript"><!--
	google_ad_client = "pub-4743562067484086";
	google_ad_width = 468;
	google_ad_height = 60;
	google_ad_format = "468x60_as";
	google_ad_type = "text_image";
	//2007-09-22: Segnalasito.eu
	google_ad_channel = "3981099890";
	google_color_border = "FFFFFF";
	google_color_bg = "FFFFFF";
	google_color_link = "FF00FF";
	google_color_text = "000000";
	google_color_url = "FF00FF";
	//-->
	</script>
	<script type="text/javascript"
	  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>	
	</div>
	<?php }; ?>	                                            
    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
	<br style="clear:both;" />
  </div>
