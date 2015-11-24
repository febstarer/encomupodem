<div id="node-<?php print $node->nid; ?>" class="sh-blog <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<header>
		<h1><?php print $title; ?></h1>
	</header>
  <div class="blog-content content"<?php print $content_attributes; ?>>
    <?php print render($content['body']);?>
  </div>
        
	<hr class="line-center gr2-clr" />
  
    <?php print render($content['comments']); ?>
	
</div>

<?php/*
if( function_exists('prev_next_nid')) :

// Get the previous node id
$prev_nid = prev_next_nid($nid, 'prev');
// Get the previous node id
$next_nid = prev_next_nid($nid, 'next');

?>

<div class="blog-nav">    
	<ul>
	
		<li class="blog-prev">
			<a href="<?php print drupal_get_path_alias('node/' . $prev_nid); ?>"><i class="fa fa-arrow-left"></i></a>
		</li>
		
		<li class="blog-home">
			<a href="<?php print drupal_get_path_alias('blog'); ?>"><i class="fa fa-align-justify"></i></a>
		</li>
				
		<li class="blog-next">
			<a href="<?php print drupal_get_path_alias('node/' . $next_nid); ?>"><i class="fa fa-arrow-right"></i></a>
		</li>
	
	</ul>

</div>

<?php endif;*/ ?>