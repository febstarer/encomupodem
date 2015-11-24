<div id="node-<?php print $node->nid; ?>" class="sh-blog <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="blog-box">
		<div class="blog-date"><?php print format_date($created,'custom','d M Y');?></div> 
		<div class="blog-content">
			<?php if( isset($content['field_article_media'][0]) ) : ?>
			<div class="blog-thumb">
				<?php print render($content['field_article_media'][0]);?>
				<div class="blog-caption">
					<div class="blog-icon"><i class="fa fa-file-text-o"></i></div>
					<div class="blog-more"><a href="<?php print $node_url; ?>"><?php print t("Read more"); ?></a></div>
				</div>
				
			</div>
			<?php endif; ?>
			<div class="blog-detail">
			
				<div class="blog-title">
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
</div>