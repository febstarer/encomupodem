<div class="port-wrap">
	<div class="port-date">
		<span><?php print format_date($created, 'custom', 'd'); ?></span>
		<span><?php print format_date($created, 'custom', 'M'); ?></span>
	</div>
	<div class="port-detail">
		<span class="port-title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span>
		<span class="port-client nd-clr"><?php print render($content['field_client']); ?></span>
		<span class="port-skills nd-clr"><?php print render($content['field_skills']); ?></span>
	</div>
</div>