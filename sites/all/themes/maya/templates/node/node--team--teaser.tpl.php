<div id="node-<?php print $node->nid; ?>" class="team-box">
                        
	<div class="team-thumb">
		<?php print render($content['field_image']); ?>
		<div class="team-caption transit">
			<div class="team-name"><?php print $title; ?></div>
			<div class="line-center brd-gr2-clr"></div>
			<div class="team-skills">
				<?php print render($content['field_team_skills']); ?>                            
			</div>
		</div>
		
	</div>
	
	<div class="team-detail">
		<span class="team-role"><?php print strip_tags(render($content['field_job_title'])); ?></span>
		<span class="team-contact"><i class="fa fa-envelope"></i><i class="fa fa-clock-o"></i></span>
	</div>
	
</div>