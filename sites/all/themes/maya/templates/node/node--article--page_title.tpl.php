<?php
$type = $field_type[0]['value'];

if($type == "audio" || $type == "video") :
?>

<div class="title-media">
	<div class="title-wrap title-video">
		<div class="title-page">
			<div class="title-detail">
			
				<div class="title-name"><?php print $title; ?></div>
				<div class="title-meta">
					<?php //print $name; ?> / 
					<?php print format_date($created, 'custom', 'd M'); ?> / 
					<?php print render($content['field_tags']); ?>
				</div>
				
			</div>
		</div>
		<div class="title-image container">
			<?php print render($content['field_article_media']); ?>
		</div>
	</div>
</div>

<?php else : ?>

<div class="title-media">
	<div class="title-wrap <?php if($type == 'normal') print 'title-normal'; ?>">
		<div class="title-image">
			<?php print render($content['field_article_media']); ?>
		</div>
		<div class="title-page">
			<div class="title-detail">
			
				<div class="title-name"><?php print $title; ?></div>
				<div class="title-meta">
					<?php //print $name; ?> / 
					<?php print format_date($created, 'custom', 'd M'); ?> / 
					<?php print render($content['field_tags']); ?>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php endif; ?>
