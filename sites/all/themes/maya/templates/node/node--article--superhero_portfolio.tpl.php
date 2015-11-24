<div class="blog-wrap">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-thumb">
		<div class="blog-box">
			<?php 
			if(isset($content['field_article_media'][0])) {
				print render($content['field_article_media'][0]);
			}
			?>
			<div class="blog-caption transit">
				<div class="blog-icon"><i class="fa fa-file-text-o"></i></div>
				<div class="blog-more nd-clr"><a href="<?php print $node_url; ?>"><?php print t("Read more"); ?></a></div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-detail">
		<div class="blog-box">
			<div class="blog-title">
				<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
			</div>
			<div class="blog-meta">
				<?php /*<div class="blog-author"><?php print $name;?></div> / */ ?>
				<div class="blog-date"><?php print format_date($created,'custom','d M Y');?></div>
				<div class="blog-cat"><?php print render($content['field_tags'])?></div>
			</div>
			<div class="line-center brd-gr2-clr"></div>
			<div class="blog-exc">
				<?php print render($content['body']);?>
			</div>
		</div>
	</div>
</div>