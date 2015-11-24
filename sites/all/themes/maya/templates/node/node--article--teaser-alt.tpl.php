<div id="node-<?php print $node->nid; ?>" class="sh-blog <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="blog-box">
		<div class="blog-date marg-bott-25 wh-clr"><?php print format_date($created,'custom','d M Y');?></div> 

		<div class="blog-detail padd-25 bg-gr1-clr">
		
			<div class="blog-title fs-clr">
				<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
			</div>
			
			<div class="blog-meta">
				<?php /*<div class="blog-author"><?php print $name;?></div> / */ ?>
				<div class="blog-cat"><?php print render($content['field_tags'])?></div>
			</div>
			
			<div class="line-center brd-gr2-clr"></div>
			
			<div class="blog-exc">
				<?php print render($content['body']);?>
			</div>
		
		</div>
	</div>
</div>