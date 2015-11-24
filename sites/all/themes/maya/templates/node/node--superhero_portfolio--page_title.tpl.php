<?php
$type = $field_portfolio_type[0]['value'];

if($type == "normal") :
?>
<div class="title-media">
	<div class="title-wrap title-normal">
		<div class="title-image">
			<?php print render($content['superhero_portfolio_image']); ?>
		</div>
		<div class="title-page">
			<div class="title-detail">
				<div class="title-name"><?php print $title; ?></div>
				<div class="title-meta">
					<?php print $name; ?> / 
					<?php print format_date($created, 'custom', 'd M'); ?> / 
					<?php print render($content['superhero_portfolio_categories']); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php else : ?>

<div class="title-media">
	<div class="title-wrap">
		<div class="title-image">
			<?php print render($content['superhero_portfolio_image']); ?>
		</div>
		
		<div class="title-page">
			<div class="title-layer-page">
				<div class="title-name"><?php print $title; ?></div>
				<div class="title-meta">
					<?php print $name; ?> / 
					<?php print format_date($created, 'custom', 'd M'); ?> / 
					<?php print render($content['superhero_portfolio_categories']); ?>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php endif; ?>
